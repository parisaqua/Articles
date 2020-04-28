<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController {

    /**
     * @Route("/", name="homepage")
     *
     * @return void
     */
    public function homepage() {
        return new Response('hello');
    }


    /**
     * @Route("/news/{slug}", name="article_show")
     *
     * @return void
     */
    public function show($slug) {
        return new Response(
            sprintf(
                'Page spécifique pour l\'article : %s',
                $slug
            )

        );
    }
}