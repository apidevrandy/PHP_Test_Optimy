<?php

require_once 'app/models/Model.php';
/*
    Class extended to Model class for easy access of sql queries
*/
class NewsModel extends Model
{
	protected $table = 'news';
    
    public function getNewsList()
	{
		return $this->select("SELECT * FROM $this->table");
	}
}