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
     * @Route("/test", name="app_test")
     */
    public function contact(): Response
    {

        return $this->render('pins/test.html.twig');
    }
    /**
     * @Route("/concierge_services", name="app_services")
     */
    public function services(): Response
    {

        return $this->render('pins/Services.html.twig');
    }

    /**
     * @Route("/about_us", name="app_about")
     */
    public function about(): Response
    {

        return $this->render('pins/about.html.twig');
    }
    /**
     * @Route("/Private-events", name="app-Private-events")
     */
    public function events(): Response
    {

        return $this->render('pins/Private-events.html.twig');
    }
    /**
     * @Route("/Marrakech-by-night", name="app-Marrakech-by-night")
     */
    public function kech(): Response
    {

        return $this->render('pins/Marrakech-by-night.html.twig');
    }
    /**
     * @Route("/Drivers-on-call", name="app_Drivers-on-call")
     */
    public function driver(): Response
    {

        return $this->render('pins/Drivers-on-call.html.twig');
    }
    /**
     * @Route("/private_palace", name="app_private_palace")
     */
    public function palace(): Response
    {

        return $this->render('pins/private_palace.html.twig');
    }
    /**
     * @Route("/private_residence", name="app_private_residence")
     */
    public function residence(): Response
    {

        return $this->render('pins/private_residence.html.twig');
    }
    /**
     * @Route("/concierge_services/{nam}",priority="1", name="app_reservation")
     */
    public function reservation($nam): Response
    {

        return $this->render("pins/reservation.html.twig", ['question'=>$nam]);
    }
    /**
     * @Route("/luxury_cars/{nam}",priority="1", name="app_cars_reservation")
     */
    public function cars_reserv($nam): Response
    {

        return $this->render("pins/cars_reserv.html.twig", ['question'=>$nam]);
    }
    /**
     * @Route("/vip_trips/{nam}",priority="1", name="app_trips_reservation")
     */
    public function trips_reserv($nam): Response
    {

        return $this->render("pins/trips_reserv.html.twig", ['question'=>$nam]);
    }
    /**
     * @Route("/private_palace/{nam}",priority="1", name="app_palace_reservation")
     */
    public function palace_reserv($nam): Response
    {

        return $this->render("pins/palace_reserv.html.twig", ['question'=>$nam]);
    }
    /**
     * @Route("/private_residence/{nam}",priority="1", name="app_residence_reservation")
     */
    public function residence_reserv($nam): Response
    {

        return $this->render("pins/residence_reserv.html.twig", ['question'=>$nam]);
    }
}
