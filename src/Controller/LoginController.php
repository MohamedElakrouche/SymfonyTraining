<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class LoginController extends AbstractController
{
    #[Route('/connexion', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {

        //Gérer les erreurs de connexion

        $error=$authenticationUtils->getLastAuthenticationError(); //Dernière erreur de connexion

        //Dernier username saisi par l'utilisateur
        $lastUsername=$authenticationUtils->getLastUsername();
        return $this->render('login/index.html.twig', [
            
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
        #[Route('/deconnexion', name: 'app_logout', methods: ['GET'])]
       
    
    public function logout(): never
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
}
