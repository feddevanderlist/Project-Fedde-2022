<?php

namespace App\Controller;

use App\Entity\Motor;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MotorController extends AbstractController
{
    #[Route('/motor', name: 'app_motor')]
    public function index(ManagerRegistry $doctrine): Response
    {

        $motor = $doctrine->getRepository(Motor::class)->findAll();
        return $this->render('motor/index.html.twig', [
            'controller_name' => 'MotorController',
            'motors' => $motor
        ]);
    }

    #[Route('/motor/{id}', name: 'motor')]
    public function getMotor($id, ManagerRegistry $doctrine): Response
    {
        $motor = $doctrine->getRepository(Motor::class)->find($id);
        $autos = $motor->getAutos();

        return $this->render('motor/motor.html.twig', ['controller_name' => 'MotorController', 'motor' => $motor, 'autos'=>$autos]);

    }
}
