<?php

namespace App\Controller;

use App\Entity\Merk;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MerkController extends AbstractController
{
    #[Route('/', name: 'app_merk')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $merken = $doctrine->getRepository(Merk::class)->findAll();
        return $this->render('merk/index.html.twig', [
            'controller_name' => 'MerkController',
            'merken' => $merken
        ]);
    }
}
