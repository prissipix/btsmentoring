<?php
include('crud_classCheckout.php');
	$obj=new Crud("localhost","root","Keeptry1ng","mydb");
	if (isset($_POST['id']) && $_POST['id'] > 0) {
	//update
	extract($_REQUEST);
	$obj->update($id,$books_id, $borrower,$verifier,$date_out,$date_return,$verifier_in, $available);

} else {
	// insert
	extract($_REQUEST);	
	$obj->insert($books_id, $borrower,$verifier,$date_out,$date_return,$verifier_in, $available);
}

?>