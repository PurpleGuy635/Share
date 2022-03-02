<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;

class BaseController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController', // suppression de la variable passée à la vue
        ]);

    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $form = $this->createForm(ContactType::class);
        return $this->render('base/contact.html.twig', [
            'form' => $form->createView()
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
      