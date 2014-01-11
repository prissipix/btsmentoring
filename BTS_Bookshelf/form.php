<?php 
    include_once('Crud_class.php');
    $obj = new Crud("loocalhost","root","Keeptry1ng","mydb");
    $id = $_GET['id'];

    if (isset($_GET['id']) && $_GET['id'] > 0) {
    echo "Update for record id#:" . $_GET['id'];
   }

    if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $result=$obj->mysqli->query("SELECT * FROM books WHERE id='$id'");

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
<form method="post" action="actions.php">
<ul class="form">

  <li><label for"title">Title:</label>
    <input type="text" name="title" value="<?php echo $title; ?>"/></li>
  
   <li><label for="author">Author:</label>
   <input type="text" name="author" value="<?php echo $author; ?>"/></li>

    <li><label for="category">Category:</label>
    <select name="category" value="<?php echo $category; ?>">
      <option value="General">General</option>
      <option value="HTML/CSS">HTML/CSS</option>
      <option value="Javascript">Javascript</option>
      <option value="PHP">PHP</option>
      <option value="Other">Other</option>
    </select></li>

  <li><label for"description">Description:</label>
  <textarea name="description"><?php echo $description; ?></textarea></li>

  <li><label for="img_path">Image Path:</label>
   <input type="text" name="img_path" value="<?php echo $img_path; ?>"/></li>

    <input type="hidden" name="id" value="<?php if ($id > 0) { echo $id;} else {echo 0;} ?>"/>
    <li><input class="submit" type="submit" name="submit" value="Submit"/></li>
</ul>
</form>

</body>
</html>