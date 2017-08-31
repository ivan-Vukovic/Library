<?php
/**
 * Created by PhpStorm.
 * User: josip
 * Date: 31-Aug-17
 * Time: 10:28
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/admin", name="security_login")
     */
    public function loginAction(AuthenticationUtils $helper)
    {
        return $this->render('security/login.html.twig', [
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }
}