<?php

namespace App\Controller;

use App\Repository\CardRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CardRepository $cardRepository): Response
    {
        $cards = $cardRepository->findAll();

        return $this->render('home/index.html.twig', [
            'cards' => $cards,
        ]);
    }
}
