<?php


class AdminManager extends BddManager

{	/**
	*
	* method to retrieve admin informations
	*/
	public function getLogin()
	{
		$db = $this->dbconnect();
		$req = $db->query('SELECT login, password FROM administration');
		$log = $req->fetch();

		return $log;
	}


}
