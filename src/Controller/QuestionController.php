<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="question")
     */
    public function homepage()
    {
        return new Response('What a bewtiching controller we have conjured!!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show the question "%s"!!', ucwords(str_replace("-"," ", $slug))));
    }
}
