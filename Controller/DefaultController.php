<?php

namespace Starter\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StarterArticleBundle:Default:index.html.twig');
    }
}
