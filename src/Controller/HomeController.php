<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route(path="/home", name="app_home")
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'user' => $this->getUser()
        ]);
    }
}