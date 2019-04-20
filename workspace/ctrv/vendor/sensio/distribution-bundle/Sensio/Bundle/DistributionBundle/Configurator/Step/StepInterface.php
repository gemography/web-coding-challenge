<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sensio\Bundle\DistributionBundle\Configurator\Step;

use Symfony\Component\Form\Type\FormTypeInterface;

/**
 * StepInterface.
 *
 * @author Marc Weistroff <marc.weistroff@sensio.com>
 */
interface StepInterface
{
    /**
     * __construct
     *
     * @param array $parameters
     */
    function __construct(array $parameters);

    /**
     * Returns the form used for configuration.
     *
     * @return FormTypeInterface
     */
    function getFormType();

    /**
     * Checks for requirements.
     *
     * @return array
     */
    function checkRequirements();

    /**
     * Checks for optional setting it could be nice to have.
     *
     * @return array
     */
    function checkOptionalSettings();

    /**
     * Returns the template to be renderer for this step.
     *
     * @return string
     */
    function getTemplate();

    /**
     * Updates form data parameters.
     *
     * @param array $parameters
     * @return array
     */
    function update(StepInterface $data);
}
