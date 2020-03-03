<?php

namespace App\Controller;

use App\Entity\AboutMe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */
    public function index()
    {
        $user = new AboutMe();
        return $this->render('learning/index.html.twig', [
            'controller_name' => $user->showMyName(),
        ]);
    }
}
