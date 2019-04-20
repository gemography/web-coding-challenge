<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Templating;

/**
 * DelegatingEngine selects an engine for a given template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @api
 */
class DelegatingEngine implements EngineInterface, StreamingEngineInterface
{
    protected $engines;

    /**
     * Constructor.
     *
     * @param array $engines An array of EngineInterface instances to add
     *
     * @api
     */
    public function __construct(array $engines = array())
    {
        $this->engines = array();
        foreach ($engines as $engine) {
            $this->addEngine($engine);
        }
    }

    /**
     * Renders a template.
     *
     * @param mixed $name       A template name or a TemplateReferenceInterface instance
     * @param array $parameters An array of parameters to pass to the template
     *
     * @return string The evaluated template as a string
     *
     * @throws \InvalidArgumentException if the template does not exist
     * @throws \RuntimeException         if the template cannot be rendered
     *
     * @api
     */
    public function render($name, array $parameters = array())
    {
        return $this->getEngine($name)->render($name, $parameters);
    }

    /**
     * Streams a template.
     *
     * @param mixed $name       A template name or a TemplateReferenceInterface instance
     * @param array $parameters An array of parameters to pass to the template
     *
     * @throws \RuntimeException if the template cannot be rendered
     *
     * @api
     */
    public function stream($name, array $parameters = array())
    {
        $engine = $this->getEngine($name);
        if (!$engine instanceof StreamingEngineInterface) {
            throw new \LogicException(sprintf('Template "%s" cannot be streamed as the engine supporting it does not implement StreamingEngineInterface.', $name));
        }

        $engine->stream($name, $parameters);
    }

    /**
     * Returns true if the template exists.
     *
     * @param mixed $name A template name or a TemplateReferenceInterface instance
     *
     * @return Boolean true if the template exists, false otherwise
     *
     * @api
     */
    public function exists($name)
    {
        return $this->getEngine($name)->exists($name);
    }

    /**
     * Adds an engine.
     *
     * @param EngineInterface $engine An EngineInterface instance
     *
     * @api
     */
    public function addEngine(EngineInterface $engine)
    {
        $this->engines[] = $engine;
    }

    /**
     * Returns true if this class is able to render the given template.
     *
     * @param mixed $name A template name or a TemplateReferenceInterface instance
     *
     * @return Boolean true if this class supports the given template, false otherwise
     *
     * @api
     */
    public function supports($name)
    {
        try {
            $this->getEngine($name);
        } catch (\RuntimeException $e) {
            return false;
        }

        return true;
    }

    /**
     * Get an engine able to render the given template.
     *
     * @param mixed $name A template name or a TemplateReferenceInterface instance
     *
     * @return EngineInterface The engine
     *
     * @throws \RuntimeException if no engine able to work with the template is found
     *
     * @api
     */
    protected function getEngine($name)
    {
        foreach ($this->engines as $engine) {
            if ($engine->supports($name)) {
                return $engine;
            }
        }

        throw new \RuntimeException(sprintf('No engine is able to work with the template "%s".', $name));
    }
}
