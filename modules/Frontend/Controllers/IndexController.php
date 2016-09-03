<?php
namespace App\Frontend\Controllers;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $article_manager = $this->getDI()->get('core_article_manager');
        $articles = $article_manager->find();
        var_dump($articles);exit;
    }
}