<?php
class crud{
	private $pdoC;

	public function __construct(){
		$this->pdoC=new PDO("mysql:host=localhost;dbname=animals","root","Keeptry1ng");
		//$this->pdoC->setAttribute
	}

	public function readAll(){
		$aRecords=$this->pdoC->query("SELECT * FROM felines;");
		while($aRow = $aRecords->fetch()){
		print_r($aRow);
		}
	}
}

$oMiCrudsito = new crud();
$oMiCrudsito->readAll();
















?>