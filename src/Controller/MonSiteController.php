<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonSiteController extends AbstractController
{

    #[Route('/site', name: 'site')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
