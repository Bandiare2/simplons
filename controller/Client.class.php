<?php
class Client extends controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/ClientDB.php';
	}
	public function index()
	{
	return $this->view->load('client/index');

	}
	public function add()

	{
			$clientdb = new ClientDB();
			$clientdb->add("nael","amadou","ouest foire");
	return $this->view->load('client/add');
	
	}
	public function liste()
	{
		$clientdb =new ClientDB();
		var_dump($clientdb->listeClient());
	return $this->view->load('client/liste');

	}
}
?>