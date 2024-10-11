<?php

require 'config/database.php';
/*
    Class for sql queries
*/
class Model
{
    protected $db;
    
    public function __construct()
    {
        global $pdo;    // PDO from database.php
        $this->db = $pdo;
    }

	public function select($sql)
	{
		$query = $this->db->query($sql);

		return $query->fetchAll();
	}
}