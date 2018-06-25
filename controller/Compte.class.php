<?php
class Compte extends controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/CompteDB.php';
	}
	public function index()
	{
	return $this->view->load('compte/index');
	}
	public function add()

	{
			$comptedb = new CompteDB();
			$comptedb->add("epargne","0001","250000",2);
             
	return $this->view->load('compte/add');
	
	}
}
?>