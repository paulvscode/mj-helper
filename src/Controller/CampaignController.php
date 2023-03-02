<?php

namespace App\Controller;

use App\Entity\Campaign;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CampaignController extends AbstractController
{
    #[Route('/campaign/{id}', name: 'index_campaign')]
    public function index(ManagerRegistry $doctrine, int $id): Response
    {
        $campaign = $doctrine->getRepository(Campaign::class)->find($id);

        return $this->render('layout/content/campaigns.html.twig', [
            'campaign' => $campaign
        ]);
    }
}
