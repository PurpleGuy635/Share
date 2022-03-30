<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class UserController extends AbstractController
{
    #[Route('/liste-users', name: 'user')]
    public function listeUser(): Response
    {
        $repoUser = $this->getDoctrine()->getRepository(User::class);
        $users = $repoUser->findAll();
        return $this->render('user/liste-user.html.twig', [
            'user' => $users
        ]);
    }
}
