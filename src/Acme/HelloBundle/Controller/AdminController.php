<?php
namespace Acme\HelloBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class AdminController extends Controller
{
    public function indexAction()
    {
    //return new Response('<html><body>Hello '.$name.'!</body></html>');

    return $this->render('AcmeHelloBundle:Admin:index.html.twig');

    // render a PHP template instead
    // return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
    }
  
    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('AcmeHelloBundle:Admin:login.html.twig', array(
    // last username entered by the user
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
                ));
    }

}
