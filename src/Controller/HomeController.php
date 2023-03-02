<?php

namespace App\Controller;

use App\Entity\Campaign;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function list(ManagerRegistry $doctrine): Response
    {
        $campaign = $doctrine->getRepository(Campaign::class)->findAll();

        return $this->render('base.html.twig', [
            'campaigns' => $campaign
        ]);
    }
}
