<?php
class Crud{
	public $mysqli;
	public $data;
	public function __construct($host,$username,$password,$db_name){
		$this->mysqli = new mysqli('localhost', 'root', 'Keeptry1ng', 'mydb');			
	}

	// BOOKS Table
	//READ
	public function readAll(){
		$query="SELECT * FROM books";
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
	public function insert($title,$author,$category,$description,$img_path){
		$query="INSERT INTO books SET title='$title', author='$author', category='$category', description='$description', img_path='$img_path'";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Product Failed to Insert");
	
		if($result){
			header('location:read.php?insert_status=success');	
		}
	}
	//UPDATE
		public function update($id,$title,$author,$category,$description,$img_path){
			$query="UPDATE books SET title='$title', author='$author', category='$category', description='$description', img_path='$img_path' WHERE id='$id'";
			$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Cannot update");
		
			if($result){
				header('location:read.php?update_status=success');	
			}
		} 
	//Delete
	public function delete($id){
		$query="DELETE FROM books WHERE id='$id'";		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Failed to Delete");
		
		if($result){
			header('location:read.php?delete_status=success');	
		}				
	}
    
  
}




?>