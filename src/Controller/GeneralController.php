<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        return $this->render('general/accueil.html.twig');
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu()
    {
        return $this->render('general/menu.html.twig');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        return $this->render('general/accueil.html.twig');
    }

}
