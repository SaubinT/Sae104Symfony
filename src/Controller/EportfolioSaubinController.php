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
            'controller_name' => 'E-eportfolio',
        ]);
    }

    #[Route('/descri', name: 'app_descri')]
    public function home() 
    {
        return $this->render('eportfolio_saubin/description.html.twig',[
            'Titre' => "Ce que je suis et ce que j'apprécie",
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function suite() 
    {
        return $this->render('eportfolio_saubin/cv.html.twig',[
            'Poste' => "Administrateur réseau",
        ]);
    }

    #[Route('/Admini', name: 'app_Admini')]
    public function Compet1() 
    {
        return $this->render('eportfolio_saubin/Competence/Admini.html.twig',[
            'Titre' => "Administrer les Réseaux et l'Internet",
        ]);
    }

    #[Route('/Connect', name: 'app_Connect')]
    public function Compet2() 
    {
        return $this->render('eportfolio_saubin/Competence/Connect.html.twig',[
            'Titre' => "Connecter les Entreprises et les Usagers",
        ]);
    }

    #[Route('/Prog', name: 'app_Prog')]
    public function Compet3() 
    {
        return $this->render('eportfolio_saubin/Competence/Prog.html.twig',[
            'Titre' => "Créer des Outils et Applications informatiques pour les R&T",
        ]);
    }

    #[Route('/Plus', name: 'app_Plus')]
    public function Plus() 
    {
        return $this->render('eportfolio_saubin/Competence/Plus.html.twig',[
            'Titre' => "Quelques infromations sur vous",
        ]);
    }
}
