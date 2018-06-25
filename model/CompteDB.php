<?php
class CompteDB extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($libelle,$numero,$solde,$id)
	{
		$sql="INSERT INTO compte
			  VALUES(NULL,'$libelle', '$numero', '$solde', '$id')";

		if ($this->db != null)
		{
		 	return $this->db->exec($sql);
		 } 	
	     else{
		      return null;
		}
	}

}
?>