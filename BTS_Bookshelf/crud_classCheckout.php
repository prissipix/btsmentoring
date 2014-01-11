<?php
     $date_out = date('Y-m-d');   //Converts date to 'yyyy-mm-dd' acceptable to mysql
     $date_return = date('Y-m-d');   //Converts date to 'yyyy-mm-dd' acceptable to mysql

	class Crud{
		public $mysqli;
		public $data;
		public function __construct($host,$username,$password,$db_name){
			$this->mysqli = new mysqli('localhost', 'root', 'Keeptry1ng', 'mydb');			
		}

	// Checkout Table

	//READ
    // CHECKOUT INFO TABLE 
    public function readAll(){
		$query="SELECT checkout_info.id, checkout_info.books_id, checkout_info.borrower, checkout_info.verifier, checkout_info.date_out, checkout_info.date_return, checkout_info.verifier_in, checkout_info.available 
		from checkout_info
    	INNER JOIN books on checkout_info.books_id=books.id;";
		$result= $this->mysqli->query($query);
		$num_result=$result->num_rows;		
				
		if($num_result>0){
			while($rows=$result->fetch_assoc()){		
				$this->data[]=$rows;
				//print_r($rows);
			}		
			return $this->data;
		}
	}

    //INSERT
	public function insert2($books_id, $borrower,$verifier,$date_out,$date_return,$verifier_in, $available){

		$query="INSERT INTO checkout_info SET books_id='$books_id', borrower='$borrower', verifier='$verifier', date_out='$date_out', date_return='$date_return', verifier_in='$verifier_in', available='$available'";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Product Failed to Insert");
	
		if($result){
			header('location:read.php?insert_status=success');	
		}
	}
	//UPDATE
		public function update($id,$books_id, $borrower,$verifier,$date_out,$date_return,$verifier_in, $available){
			$query="UPDATE checkout_info SET books_id='$books_id', borrower='$borrower', verifier='$verifier', date_out='$date_out', date_return='$date_return', verifier_in='$verifier_in', available='$available' WHERE id='$id'";
			$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Cannot update");
		
			if($result){
				header('location:read.php?update_status=success');	
			}
		} 
	}
?>