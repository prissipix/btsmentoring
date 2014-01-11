<?php
include('Crud_class.php');
	$obj=new Crud("localhost","root","Keeptry1ng","mydb");
	if (isset($_POST['id']) && $_POST['id'] > 0) {
	//update
	extract($_REQUEST);
	$obj->update($id,$title,$author,$category,$description,$img_path);

} else {
	// insert
	extract($_REQUEST);	
	$obj->insert($title,$author,$category,$description,$img_path);
}

?>