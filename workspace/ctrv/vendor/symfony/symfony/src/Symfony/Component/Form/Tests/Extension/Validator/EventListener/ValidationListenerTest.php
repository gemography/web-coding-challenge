<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Extension\Validator\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\Util\PropertyPath;
use Symfony\Component\Form\Extension\Validator\Constraints\Form;
use Symfony\Component\Form\Extension\Validator\EventListener\ValidationListener;
use Symfony\Component\Validator\ConstraintViolation;

class ValidationListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $factory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $validator;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $violationMapper;

    /**
     * @var ValidationListener
     */
    private $listener;

    private $message;

    private $params;

    protected function setUp()
    {
        if (!class_exists('Symfony\Component\EventDispatcher\Event')) {
            $this->markTestSkipped('The "EventDispatcher" component is not available');
        }

        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');
        $this->factory = $this->getMock('Symfony\Component\Form\FormFactoryInterface');
        $this->validator = $this->getMock('Symfony\Component\Validator\ValidatorInterface');
        $this->violationMapper = $this->getMock('Symfony\Component\Form\Extension\Validator\ViolationMapper\ViolationMapperInterface');
        $this->listener = new ValidationListener($this->validator, $this->violationMapper);
        $this->message = 'Message';
        $this->params = array('foo' => 'bar');
    }

    private function getConstraintViolation($code = null)
    {
        return new ConstraintViolation($this->message, $this->params, null, 'prop.path', null, null, $code);
    }

    private function getFormError()
    {
        return new FormError($this->message, $this->params);
    }

    private function getBuilder($name = 'name', $propertyPath = null, $dataClass = null)
    {
        $builder = new FormBuilder($name, $dataClass, $this->dispatcher, $this->factory);
        $builder->setPropertyPath(new PropertyPath($propertyPath ?: $name));
        $builder->setAttribute('error_mapping', array());
        $builder->setErrorBubbling(false);
        $builder->setMapped(true);

        return $builder;
    }

    private function getForm($name = 'name', $propertyPath = null, $dataClass = null)
    {
        return $this->getBuilder($name, $propertyPath, $dataClass)->getForm();
    }

    private function getMockForm()
    {
        return $this->getMock('Symfony\Component\Form\Tests\FormInterface');
    }

    // More specific mapping tests can be found in ViolationMapperTest
    public function testMapViolation()
    {
        $violation = $this->getConstraintViolation();
        $form = $this->getForm('street');

        $this->validator->expects($this->once())
            ->method('validate')
            ->will($this->returnValue(array($violation)));

        $this->violationMapper->expects($this->once())
            ->method('mapViolation')
            ->with($violation, $form, false);

        $this->listener->validateForm(new FormEvent($form, null));
    }

    public function testMapViolationAllowsNonSyncIfInvalid()
    {
        $violation = $this->getConstraintViolation(Form::ERR_INVALID);
        $form = $this->getForm('street');

        $this->validator->expects($this->once())
            ->method('validate')
            ->will($this->returnValue(array($violation)));

        $this->violationMapper->expects($this->once())
            ->method('mapViolation')
            // pass true now
            ->with($violation, $form, true);

        $this->listener->validateForm(new FormEvent($form, null));
    }

    public function testValidateIgnoresNonRoot()
    {
        $form = $this->getMockForm();
        $form->expects($this->once())
            ->method('isRoot')
            ->will($this->returnValue(false));

        $this->validator->expects($this->never())
            ->method('validate');

        $this->violationMapper->expects($this->never())
            ->method('mapViolation');

        $this->listener->validateForm(new FormEvent($form, null));
    }
}
