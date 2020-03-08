<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{   
    /**
     * @Route("/") 
     */
    public function homepage()
    {
        return new Response('La première page de mon bar interstellaire'); 
    }   
    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Futur page to show one space article : "%s"', $slug));
    }
}

