<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form;

/**
 * A builder for FormFactoryInterface objects.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormFactoryBuilderInterface
{
    /**
     * Sets the factory for creating ResolvedFormTypeInterface instances.
     *
     * @param ResolvedFormTypeFactoryInterface $resolvedTypeFactory
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function setResolvedTypeFactory(ResolvedFormTypeFactoryInterface $resolvedTypeFactory);

    /**
     * Adds an extension to be loaded by the factory.
     *
     * @param FormExtensionInterface $extension The extension.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addExtension(FormExtensionInterface $extension);

    /**
     * Adds a list of extensions to be loaded by the factory.
     *
     * @param array $extensions The extensions.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addExtensions(array $extensions);

    /**
     * Adds a form type to the factory.
     *
     * @param FormTypeInterface $type The form type.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addType(FormTypeInterface $type);

    /**
     * Adds a list of form types to the factory.
     *
     * @param array $types The form types.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addTypes(array $types);

    /**
     * Adds a form type extension to the factory.
     *
     * @param FormTypeExtensionInterface $typeExtension The form type extension.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addTypeExtension(FormTypeExtensionInterface $typeExtension);

    /**
     * Adds a list of form type extensions to the factory.
     *
     * @param array $typeExtensions The form type extensions.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addTypeExtensions(array $typeExtensions);

    /**
     * Adds a type guesser to the factory.
     *
     * @param FormTypeGuesserInterface $typeGuesser The type guesser.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addTypeGuesser(FormTypeGuesserInterface $typeGuesser);

    /**
     * Adds a list of type guessers to the factory.
     *
     * @param array $typeGuessers The type guessers.
     *
     * @return FormFactoryBuilderInterface The builder.
     */
    public function addTypeGuessers(array $typeGuessers);

    /**
     * Builds and returns the factory.
     *
     * @return FormFactoryInterface The form factory.
     */
    public function getFormFactory();
}
