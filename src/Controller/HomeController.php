<?php

namespace App\Controller;

use App\Entity\Test;
use App\Repository\TestRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TestRepository $repository): Response
    {
        $name = $repository->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => $name,
        ]);
    }
}
