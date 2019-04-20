DependencyInjection Component
=============================

DependencyInjection manages your services via a robust and flexible Dependency
Injection Container.

Here is a simple example that shows how to register services and parameters:

    use Symfony\Component\DependencyInjection\ContainerBuilder;
    use Symfony\Component\DependencyInjection\Reference;

    $sc = new ContainerBuilder();
    $sc
        ->register('foo', '%foo.class%')
        ->addArgument(new Reference('bar'))
    ;
    $sc->setParameter('foo.class', 'Foo');

    $sc->get('foo');

Method Calls (Setter Injection):

    $sc = new ContainerBuilder();

    $sc
        ->register('bar', '%bar.class%')
        ->addMethodCall('setFoo', array(new Reference('foo')))
    ;
    $sc->setParameter('bar.class', 'Bar');

    $sc->get('bar');

Factory Class:

If your service is retrieved by calling a static method:

    $sc = new ContainerBuilder();

    $sc
        ->register('bar', '%bar.class%')
        ->setFactoryClass('%bar.class%')
        ->setFactoryMethod('getInstance')
        ->addArgument('Aarrg!!!')
    ;
    $sc->setParameter('bar.class', 'Bar');

    $sc->get('bar');

File Include:

For some services, especially those that are difficult or impossible to
autoload, you may need the container to include a file before
instantiating your class.

    $sc = new ContainerBuilder();

    $sc
        ->register('bar', '%bar.class%')
        ->setFile('/path/to/file')
        ->addArgument('Aarrg!!!')
    ;
    $sc->setParameter('bar.class', 'Bar');

    $sc->get('bar');

Resources
---------

You can run the unit tests with the following command:

    phpunit

If you also want to run the unit tests that depend on other Symfony
Components, install dev dependencies before running PHPUnit:

    php composer.phar install --dev
