<?php

namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter;

use Symfony\Component\HttpFoundation\Request;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Managers converters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class ParamConverterManager
{
    /**
     * @var array
     */
    protected $converters = array();

    /**
     * @var array
     */
    protected $namedConverters = array();

    /**
     * Applies all converters to the passed configurations and stops when a
     * converter is applied it will move on to the next configuration and so on.
     *
     * @param Request      $request
     * @param array|object $configurations
     */
    public function apply(Request $request, $configurations)
    {
        if (is_object($configurations)) {
            $configurations = array($configurations);
        }

        foreach ($configurations as $configuration) {
            $this->applyConverter($request, $configuration);
        }
    }

    /**
     * Apply converter on request based on the given configuration.
     *
     * @param Request $request
     * @param ConfigurationInterface $configuration
     */
    protected function applyConverter(Request $request, $configuration)
    {
        $value     = $request->attributes->get($configuration->getName());
        $className = $configuration->getClass();

        // If the value is already an instance of the class we are trying to convert it into
        // we should continue as no convertion is required
        if (is_object($value) && $value instanceof $className) {
            return;
        }

        if ($converterName = $configuration->getConverter()) {
            if (!isset($this->namedConverters[$converterName])) {
                throw new \RuntimeException(sprintf(
                    "No converter named '%s' found for conversion of parameter '%s'.",
                    $converterName, $configuration->getName()
                ));
            }

            $converter = $this->namedConverters[$converterName];

            if (!$converter->supports($configuration)) {
                throw new \RuntimeException(sprintf(
                    "Converter '%s' does not support conversion of parameter '%s'.",
                    $converterName, $configuration->getName()
                ));
            }

            $converter->apply($request, $configuration);
            return;
        }

        foreach ($this->all() as $converter) {
            if ($converter->supports($configuration)) {
                if ($converter->apply($request, $configuration)) {
                    return;
                }
            }
        }
   }

   /**
    * Adds a parameter converter.
    *
    * Converters match either explicitly via $name or by iteration over all
    * converters with a $priority. If you pass a $priority = null then the
    * added converter will not be part of the iteration chain and can only
    * be invoked explicitly.
    *
    * @param ParamConverterInterface $converter A ParamConverterInterface instance
    * @param integer                 $priority  The priority (between -10 and 10).
    * @param string                  $name      Name of the converter.
    */
    public function add(ParamConverterInterface $converter, $priority = 0, $name = null)
    {
        if ($priority !== null) {
            if (!isset($this->converters[$priority])) {
                $this->converters[$priority] = array();
            }

            $this->converters[$priority][] = $converter;
        }

        if (null !== $name) {
            $this->namedConverters[$name] = $converter;
        }
    }

   /**
    * Returns all registered param converters.
    *
    * @return array An array of param converters
    */
   public function all()
   {
       krsort($this->converters);

       $converters = array();
       foreach ($this->converters as $all) {
           $converters = array_merge($converters, $all);
       }

       return $converters;
   }
}
