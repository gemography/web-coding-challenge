<?php

$container->loadFromExtension('twig', array(
    'form' => array(
        'resources' => array(
            'MyBundle::form.html.twig',
        )
     ),
     'globals' => array(
         'foo' => '@bar',
         'pi'  => 3.14,
         'bad' => array('key' => 'foo'),
     ),
     'auto_reload'         => true,
     'autoescape'          => true,
     'base_template_class' => 'stdClass',
     'cache'               => '/tmp',
     'charset'             => 'ISO-8859-1',
     'debug'               => true,
     'strict_variables'    => true,
     'paths'               => array('path1', 'path2'),
));
