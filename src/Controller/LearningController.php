<?php

namespace App\Controller;

use App\Entity\AboutMe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/", name="learning")
     */
    public function index()
    {
        $user = new AboutMe();
        return $this->render('learning/index.html.twig', [
            'controller_name' => $user->changeMyName(),
        ]);
    }

    /**
     * @Route("/aboot", name="abootWhat")
     */
    public function abooot()
    {
        $user = new AboutMe();
        return $this->render('learning/about.html.twig', [
            'controller_name' => $user->changeMyName(),
        ]);
    }
}
