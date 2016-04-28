<?php

namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormTest extends KernelTestCase
{
    public function setUp()
    {
        self::bootKernel();
        $this->container = self::$kernel->getContainer();
    }

    public function testFormHandling()
    {
        $user = new User();

        $errors = $this->submitForm(UserType::class, $user, ['name' => 'Benjamin']);

        $this->assertCount(0, $errors);
        $this->assertEquals('Benjamin', $user->name);
    }

    private function submitForm($typeName, $data, $request)
    {
        $form = $this->container->get('form.factory')->create($typeName, $data);

        $name = $typeName::getName();

        $request = Request::create('/', 'POST', [
            $name => $request,
        ]);

        $form->handleRequest($request);

        return $form->getErrors();
    }
}

class User
{
    public $name;
}

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array());
    }

    public function getName()
    {
        return 'user';
    }
}

