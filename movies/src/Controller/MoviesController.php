<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $movies = ["Pham Trung", "Jack goat", "123"];

        // Pass the data as 'movies' to match the template variable
        return $this->render('index.html.twig', ['movies' => $movies]);
    }
}
