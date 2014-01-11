<?php 
    include_once('crud_classCheckout.php');
    $obj = new Crud("loocalhost","root","Keeptry1ng","mydb");
    $id = $_GET['id'];

    if (isset($_GET['id']) && $_GET['id'] > 0) {
    echo "You are borrowing book with id#:" . $_GET['id'];
   }

    if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $result=$obj->mysqli->query("SELECT * FROM checkout_info WHERE id='$id'");

    
   $rows=$result->fetch_assoc();

    extract($rows);
    } else {
      echo "Insert new book"; 
    } 
?>
      
<html>
<head>
<title>Add New Product</title>
<style>

li{
  list-style: none;
}
label {
  float:left;
  width:20%;
  margin-right:0.5em;
  padding-top:0.2em;
  text-align:right;
  font-weight:bold;
  }
.submit {
  margin-left: 21%;
}
</style>
</head>

<body>
<form method="post" action="actionsCO.php">
<ul class="form">

  <li><label for"title">Book:</label>
 <input type="text" name="books_id" value="<?php echo $books_id; ?>" readonly/></li>
   
   <li><label for="author">Borrower Name:</label>
   <input type="text" name="borrower"/></li>

  <li><label for"description">Verified by:</label>
   <input type="text" name="verifier"/></li>

  <li><label for="img_path">Date:</label>
  <input type="date" name="date_out"/>

    <input type="hidden" name="id" value="<?php if ($id > 0) { echo $id;} else {echo 0;} ?>"/>
    <li><button class="submit" type="submit" name="available" value="no">Submit</button></li>
</ul>
</form>

</body>
</html>