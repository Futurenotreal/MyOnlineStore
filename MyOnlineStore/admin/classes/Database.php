<?php
require "../../config/constants.php";
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli(_host, _user, _password, _data_base_name);
		return $this->con;
	}
}

?>