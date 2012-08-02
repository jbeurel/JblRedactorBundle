<?php
namespace Jbl\RedactorBundle\Twig\Extension;

use Twig_Extension;
use Symfony\Component\DependencyInjection\ContainerInterface;

class JblRedactorExtension extends Twig_Extension
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getService($id)
    {
        return $this->container->get($id);
    }

     public function getParameter($name)
    {
        return $this->container->getParameter($name);
    }

    public function getFunctions()
    {
        return array(
            'redactor_init' => new \Twig_Function_Method($this, 'redactor_init', array('is_safe' => array('html')))
        );
    }

    public function redactor_init()
    {
        $config = $this->getParameter('jbl_redactor.config');

        return $this->getService('templating')->render('JblRedactorBundle:Script:init.html.twig', array(
            'redactor_config' => json_encode($config)
        ));

    }

    public function getName()
    {
        return 'jbl_redactor';
    }
}