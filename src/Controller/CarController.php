<?php

namespace App\Controller;

use App\Entity\Car;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    #[Route('/car', name: 'app_car')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $cars = $doctrine->getRepository(Car::class)->findAll();

        return $this->render('car/index.html.twig', [
            'controller_name' => 'CarController',
            'autos' => $cars
        ]);
    }

    #[Route('/car/{id}', name: 'car')]
    public function getCar($id, ManagerRegistry $doctrine): Response
    {
        $car = $doctrine->getRepository(Car::class)->find($id);
        $motor = $car->getMotor();
        $merk = $car->getMerk();

        return $this->render('car/car.html.twig', ['controller_name' => 'CarController', 'car' => $car, 'motor' => $motor, 'mer' => $merk]);

    }
}
