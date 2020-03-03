<?php

namespace App\Controller;

use App\Entity\AboutMe;
use App\Entity\LoggedIn;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoggedInController extends AbstractController
{
    /**
     * @Route("/logged_in", name="logged_in", methods={ "POST"})
     */
    public function index()
    {
        var_dump ($_POST);
        $loggedIn = new LoggedIn();
        $user = new AboutMe();
        return $this->render('logged_in/index.html.twig', [
            'controller_name' => $user->changeMyName(),
            'controller_text' => $loggedIn->getText()
        ]);
    }
}
