<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AppController
 *
 * @package App\Controller
 */
class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('app/index.html.twig');
    }

    /**
     * @Route("/about", name="app_about")
     */
    public function about()
    {
        return $this->render('app/about.html.twig');
    }

    /**
     * @Route("/fashion", name="app_fashion")
     */
    public function fashion()
    {
        return $this->render('app/fashion.html.twig');
    }

    /**
     * @Route("/travel", name="app_travel")
     */
    public function travel()
    {
        return $this->render('app/travel.html.twig');
    }

    /**
     * @Route("/single", name="app_single")
     */
    public function single()
    {
        return $this->render('app/single.html.twig');
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact()
    {
        return $this->render('app/contact.html.twig');
    }
}
