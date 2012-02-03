<?php
namespace Acme\HelloBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecuredController extends Controller
{
    public function indexAction()
    {

        return $this->render('AcmeHelloBundle:Secured:index.html.twig');

    }
  
    

}
