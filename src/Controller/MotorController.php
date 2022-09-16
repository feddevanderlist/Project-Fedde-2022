<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MotorController extends AbstractController
{
    #[Route('/motor', name: 'app_motor')]
    public function index(): Response
    {
        return $this->render('motor/index.html.twig', [
            'controller_name' => 'MotorController',
        ]);
    }
}
