<?php


namespace viewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class LoginController extends Controller{
    /**
     * @Route("/loginForm", name="loginForm")
     * @Template("viewBundle:Default:login.html.twig")
     */
    public function loginForm() {
        
    }
   
    /**
     * @Route ("/login", name="login")
     */
    public function login() {
        throw new Exception("Va te faire foutre on ne doit jamais voir ça!");
    }
    
    /**
     * @Route("/logout",name="logout")
     */
    public function logout() {
        throw new Exception("Va te faire foutre on ne doit jamais voir ça!");
    }
}
