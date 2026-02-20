<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{
    #[Route('/api/index', name: 'api_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->json([
            'data' => [
                'username' => 'Sara',
                'email' => 'sara@gmail.com',
                'password' => 'passfjfkjjj',
                'age' => 20,
                'isVerified' => true
            ],
            'count' => 400
        ], Response:: HTTP_OK
        );
    }
}
