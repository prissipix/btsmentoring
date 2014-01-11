<?php
include('Crud_class.php');
 
if(isset($_REQUEST['insert_status'])){
  echo"Book successfully inserted";
}

if(isset($_REQUEST['update_status'])){
  echo"Book successfully updated";
}

if(isset($_REQUEST['delete_status'])){
  echo"Book successfully deleted";
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
$obj->readAll();//calling read function
?>
<ul>
  <li><button><a href='read.php?'>Refresh</a></button></li>
  <li><button><a href='read_checkout.php?'>Checkout Records</a></button></li>
  <li><div class="success"></div></li>
</ul>
<table border="1" cellpadding="5">
  <tr>
    <th scope="row">ID:</th>
    <td>Title</td>
    <td>Author</td>
    <td>Category</td>
    <td>Description</td>
    <td>Image</td>
    <td>Actions</td>

  </tr>
<?php
foreach($obj->data as $val){
	extract($val);
	?>
  <tr>
    <td scope="row"><?php echo $id; ?></td>
    <td><?php echo $title; ?></td>
    <td><?php echo $author; ?></td>
    <td><?php echo $category; ?></td>
    <td><?php echo $description; ?></td>
    <td><?php echo $img_path; ?></td>

     <td><button><a href='form.php?id=<?php echo $id; ?>'>Update</a></button>|
     <button><a href="delete.php?id=<?php echo $id; ?>">Delete</a></button>|
     <button><a href="form_checkout.php?id=<?php echo $id; ?>">Checkout</a></button>
   </td>
  </tr>
    <?php
    }
    ?>
    <tr>
      <th scope="col" colspan="8" align="right">
        <div class="btn-group">
          <button class="btn"><a href="form.php">Insert New Product</a></button>
        </div>
      </th>    
    </tr>
</table>
</body>
</html>