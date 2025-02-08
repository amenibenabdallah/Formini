<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class InstructeurController extends AbstractController{
    #[Route('/instructeur', name: 'app_instructeur')]
    public function index(): Response
    {
        return $this->render('instructeur/instructeur.html.twig', [
            'controller_name' => 'InstructeurController',
        ]);
    }
}
