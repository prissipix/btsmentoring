<?php
include 'connection.php';
$sql="select product_name, color, description, used_for from makeup";
$show=mysqli_query($conn,$sql) or die($sql.">>".mysqli_error($conn));

?>
<h1> Makeup Products</h2>
<table border='1'>
<tr>
<th>Product Name</th>
<th>Color</th>
<th>Description</th>
<th>Used For:</th>
<th>Edit</th>


</tr>
<?php
while($row=mysqli_fetch_array($show)){
extract($row);
?>
<tr>
<td><?php echo $product_name; ?></td>
<td><?php echo $color; ?></td>
<td><?php echo $description; ?></td>
<td><?php echo $used_for; ?></td>
<td><button class="btn"><a href="#">Update</a></button>&nbsp;&nbsp;
    <button class="btn"><a href="#">Delete</a></button>
</td>
</tr>
<?php
}
?>
<tr class="success">
      <th scope="col" colspan="5" align="right">
        <div class="btn-group">
          <button class="btn"><a href="#">Insert New Product</a></button>
        </div>
      </th>
     
    </tr>
  </table>
</table>














