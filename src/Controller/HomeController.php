<?php


namespace App\Controller;


use App\Repository\EventRepository;
use App\Repository\SpectacleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function seeHome(Request $request, SpectacleRepository $spectacleRepository, EventRepository $eventRepository) :Response
    {
        $spectacles = $spectacleRepository->findSpectacleHome();
        $events =  $eventRepository->findEventHome();
        return $this->render('Home/index.html.twig', [
            'spectacles' => $spectacles,
            'events' => $events,
        ]);
    }

}