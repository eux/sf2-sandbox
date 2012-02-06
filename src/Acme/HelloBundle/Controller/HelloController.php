<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
  public function indexAction()
  {
    return $this->render('AcmeHelloBundle:Hello:index.html.twig');
  }
  
  public function helloAction($name)
  {
    //return new Response('<html><body>Hello '.$name.'!</body></html>');
    
    return $this->render('AcmeHelloBundle:Hello:hello.html.twig', array('name' => $name));

    // render a PHP template instead
    // return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
  }
  
  //dummy controller
  public function loginFbAction() 
  {
      
  }

}
