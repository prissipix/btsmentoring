<?php
include('Crud_class.php');
$obj=new Crud("localhost","root","Keeptry1ng","mydb");
if(isset($_REQUEST['id'])){	
$obj->delete($_REQUEST['id']);
}
?>