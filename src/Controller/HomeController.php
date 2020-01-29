<?php


namespace App\Controller;


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
    public function seeHome(Request $request, SpectacleRepository $spectacleRepository) :Response
    {
        $spectacles = $spectacleRepository->findSpectacleHome();
        return $this->render('Home/index.html.twig', [
            'spectacles' => $spectacles
        ]);
    }

}