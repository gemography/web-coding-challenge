<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator;

use Symfony\Component\Validator\Mapping\ClassMetadataFactoryInterface;

/**
 * Default implementation of ValidatorContextInterface
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated Deprecated since version 2.1, to be removed in 2.3. Use
 *             {@link Validation::createValidatorBuilder()} instead.
 */
class ValidatorContext implements ValidatorContextInterface
{
    /**
     * The class metadata factory used in the new validator
     * @var ClassMetadataFactoryInterface
     */
    protected $classMetadataFactory = null;

    /**
     * The constraint validator factory used in the new validator
     * @var ConstraintValidatorFactoryInterface
     */
    protected $constraintValidatorFactory = null;

    /**
     * {@inheritDoc}
     *
     * @deprecated Deprecated since version 2.1, to be removed in 2.3. Use
     *             {@link Validation::createValidatorBuilder()} instead.
     */
    public function setClassMetadataFactory(ClassMetadataFactoryInterface $classMetadataFactory)
    {
        $this->classMetadataFactory = $classMetadataFactory;

        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * @deprecated Deprecated since version 2.1, to be removed in 2.3. Use
     *             {@link Validation::createValidatorBuilder()} instead.
     */
    public function setConstraintValidatorFactory(ConstraintValidatorFactoryInterface $constraintValidatorFactory)
    {
        $this->constraintValidatorFactory = $constraintValidatorFactory;

        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * @deprecated Deprecated since version 2.1, to be removed in 2.3. Use
     *             {@link Validation::createValidator()} instead.
     */
    public function getValidator()
    {
        return new Validator(
            $this->classMetadataFactory,
            $this->constraintValidatorFactory
        );
    }

    /**
     * Returns the class metadata factory used in the new validator
     *
     * @return ClassMetadataFactoryInterface  The factory instance
     *
     * @deprecated Deprecated since version 2.1, to be removed in 2.3.
     */
    public function getClassMetadataFactory()
    {
        return $this->classMetadataFactory;
    }

    /**
     * Returns the constraint validator factory used in the new validator
     *
     * @return ConstraintValidatorFactoryInterface  The factory instance
     *
     * @deprecated Deprecated since version 2.1, to be removed in 2.3.
     */
    public function getConstraintValidatorFactory()
    {
        return $this->constraintValidatorFactory;
    }
}
