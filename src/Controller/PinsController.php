<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {

        return $this->render('pins/index.html.twig');
    }
    /**
     * @Route("/luxury_cars", name="app_cars")
     */
    public function cars(): Response
    {

        return $this->render('pins/luxury_cars.html.twig');
    }
    /**
     * @Route("/vip_trips", name="app_trips")
     */
    public function trips(): Response
    {

        return $this->render('pins/trips.html.twig');
    }
    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(): Response
    {

        return $this->render('pins/contactus.html.twig');
    }
    /**
     * @Route("/concierge_services", name="app_services")
     */
    public function services(): Response
    {

        return $this->render('pins/Services.html.twig');
    }
    /**
     * @Route("/trips_reservation", name="app_reserv_trips")
     */
    public function reserv_trip(): Response
    {

        return $this->render('pins/trips_reserv.html.twig');
    }
    /**
     * @Route("/about_us", name="app_about")
     */
    public function about(): Response
    {

        return $this->render('pins/about.html.twig');
    }
}
