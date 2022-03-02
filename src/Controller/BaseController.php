<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController', // suppression de la variable passée à la vue
        ]);

    }

    #[Route('/contact', name: 'contact')] // étape 1
    public function contact(): Response // étape 2
    {
        return $this->render('base/contact.html.twig', [ // étape 3
            
        ]);
    }

    #[Route('/mention', name: 'mention')] // étape 1
    public function mention(): Response // étape 2
    {
        return $this->render('base/mention.html.twig', [ // étape 3
            
        ]);
    }

    #[Route('/propos', name: 'propos')] // étape 1
    public function propos(): Response // étape 2
    {
        return $this->render('base/propos.html.twig', [ // étape 3
            
        ]);
    }
}
      