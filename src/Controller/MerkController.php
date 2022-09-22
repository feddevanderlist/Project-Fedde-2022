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

    #[Route('/merk/{id}', name: 'merk')]
    public function getMerk($id, ManagerRegistry $doctrine): Response
    {
        $merk = $doctrine->getRepository(Merk::class)->find($id);
        $autos = $merk->getAutos();

        return $this->render('merk/merk.html.twig', ['controller_name' => 'MerkController', 'merk' => $merk, 'autos' => $autos]);

    }
}
