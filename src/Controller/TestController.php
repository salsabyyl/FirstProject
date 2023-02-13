<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/tt', name: 'ttttt')]
    public function index(): Response
    {
        return new Response('bonsoir loula ');
    }

    #[Route('/test', name: 'app_test')]
    public function test(): Response
    {
        return new Response('<h1> bonsoir loula </h1>');
    }
    #[Route('/json', name: 'json')]
    public function jsontest()
    {
        return new JsonResponse ('bonsoir loula ');
    }
    #[Route('/vershtml', name: 'vershtml')]
    public function show()
    {
        return $this->render('3a/show.html.twig');
    }





}
