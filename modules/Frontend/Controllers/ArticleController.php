<?php
namespace App\Frontend\Controllers;

class ArticleController extends BaseController
{
    public function indexAction()
    {
        echo 'article/index';exit;
    }

    public function listAction()
    {
        $article_manager = $this->getDI()->get('core_article_manager');
        $this->view->articles = $article_manager->find();
    }
}