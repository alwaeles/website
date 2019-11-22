<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{

    public function index()
    {
        return new Response('It works (bleh) perfectly!', Response::HTTP_OK, [
            'Content-Type' => 'text/plain'
        ]);
    }
}
