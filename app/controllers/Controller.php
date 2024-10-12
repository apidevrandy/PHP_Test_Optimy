<?php

require 'app/models/CommentModel.php';
require 'app/models/NewsModel.php';

class Controller
{
	private $comment;
    private $news;

    public function __construct()
    {
        $this->comment = new CommentModel;
        $this->news = new NewsModel;

        $this->displayView();
    }

    public function displayView()
    {
        $newsList = $this->news->getNewsList();
        $commentsList = $this->comment->getCommentsList();

        $viewData = [
            'news' => $newsList,
            'comments' => $commentsList
        ];
        
        require "app/views/View.php";
    }
}