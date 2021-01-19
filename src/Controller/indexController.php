<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class indexController extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }
    public function propos()
    {
        return $this->render('propos.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }
}

