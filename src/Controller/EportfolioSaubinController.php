<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EportfolioSaubinController extends AbstractController
{
    #[Route('/eportfolio/saubin', name: 'app_eportfolio_saubin')]
    public function index(): Response
    {
        return $this->render('eportfolio_saubin/index.html.twig', [
            'controller_name' => 'EportfolioSaubinController',
        ]);
    }
}
