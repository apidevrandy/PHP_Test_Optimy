<?php

require_once 'app/models/Model.php';
/*
    Class extended to Model class for easy access of sql queries
*/
class CommentModel extends Model
{
	protected $table = 'comment';
    
    public function getCommentsList()
	{
		return $this->select("SELECT * FROM $this->table");
	}
}