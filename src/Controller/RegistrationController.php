<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/signup', name: 'signup')]
    public function signup(): Response
    {
        return $this->render('registration/signup_form.html.twig');
    }
}