<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\PasswordUserType;
use Symfony\Component\HttpFoundation\Request;
class AccountController extends AbstractController
{
    #[Route('/compte', name: 'app_account')]
    public function index(): Response
    {
        return $this->render('account/index.html.twig', [
            
        ]);
    }

    #[Route('/compte/modifier-mon-de-passe', name: 'app_account_modify_password')]
    public function password(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(PasswordUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $entityManager->persist($user);
            // $entityManager->flush();
        }
        
        return $this->render('account/password.html.twig', [
            'newPassword' => $form->createView(),
        ]);
    }
}
