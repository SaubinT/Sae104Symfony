<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EportfolioSaubinController extends AbstractController
{
    #[Route('/', name: 'app_eportfolio')]
    public function index(): Response
    {
        return $this->render('eportfolio_saubin/index.html.twig', [
            'controller_name' => 'EportfolioSaubin',
        ]);
    }
    #[Route('/descri', name: 'app_descri')]
    public function home() 
    {
        return $this->render('eportfolio_saubin/description.html.twig',[
            'Titre' => 'E-Portfolio',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function suite() 
    {
        return $this->render('eportfolio_saubin/cv.html.twig',[
            'Titre' => "Ce que je suis et ce que j'apprécie",
        ]);
    }
}
