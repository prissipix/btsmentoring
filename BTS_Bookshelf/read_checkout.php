<?php
include('crud_classCheckout.php');
 
if(isset($_REQUEST['insert_status'])){
  echo"Your Product was Successfully Inserted";
}

if(isset($_REQUEST['update_status'])){
  echo"Your Product was Successfully Updated";
}

if(isset($_REQUEST['delete_status'])){
  echo"Your Product was Successfully Deleted";
}

?>
<html>
<head>
<title>Read Data</title>
<style>

li{
  list-style: none;
}
</style>
</head>

<body>
<?php
$obj=new Crud("localhost","root","Keeptry1ng","mydb"); //connecting
$obj->readAll();//calling read function112740
?>
<ul>
  <li><button><a href='read_checkout.php?'>Refresh</a></button></li>
  <li><button><a href='read.php?'>List of Books</a></button></li>
  <li><div class="success"></div></li>
</ul>
<table border="1" cellpadding="5">
  <tr>
    <th scope="row">ID</th>
    <td>Book</td>
    <td>Borrower</td>
    <td>Checkout verified by:</td>
    <td>Date checkout (y/m/d)</td>
    <td>Date returned (y/m/d)</td>
    <td>Return verified by:</td>
    <td>Available</td>
    <td>Actions</td>

  </tr>
<?php
foreach($obj->data as $val){
	extract($val);
	?>
  <tr>
    <td scope="row"><?php echo $id; ?></td>
    <td><?php echo $books_id; ?></td>
    <td><?php echo $borrower; ?></td>
    <td><?php echo $verifier; ?></td>
    <td><?php echo $date_out; ?></td>
    <td><?php echo $date_return; ?></td>
    <td><?php echo $verifier_in; ?></td>
    <td><?php echo $available; ?></td>

     <td><button><a href='form_checkout.php?id=<?php echo $id; ?>'>Checkout</a></button>|
     <button><a href="form_return.php?id=<?php echo $id; ?>">Return</a></button></td>
  </tr>
    <?php
    }
    ?>
    <!--
    <tr>
      <th scope="col" colspan="8" align="right">
        <div class="btn-group">
          <button class="btn"><a href="form.php">Insert New Product</a></button>
        </div>
      </th>    
    </tr>
</table> -->
</body>
</html>