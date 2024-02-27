
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
?>



<!DOCTYPE HTML>
<html>
<head>
  <title>Louis Music Point</title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
  </style>
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#ffff99" scope="col"><h1>Louis Music Point</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr>
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="viewp.php">View Products</a></th>
	   <th scope="col"><a href="viewo.php">View Orders</a></th>
	 <th scope="col"><a href="viewu.php">View Users</a></th>
	 <th scope="col"><a href="views.php">View Sales</a></th>
     <th scope="col"><a href="index.php">LogOut</a></th>
    </tr>
  </table>
  


<img src="images\3.jpg" width="1420" height="400">

<table width="102%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
	
		    <tr>
          <td width="8%">&nbsp;</td>
          <td width="9%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Instrument Name</strong> </div></td>
<td width="11%"><div align="center" class="style6"><strong>Image</strong> </div></td>
		    <td width="12%"><div align="center" class="style6"><strong>Price</strong> </div></td>
			  <td width="12%"><div align="center" class="style6"><strong>Quantity </strong> </div></td>
			 <td width="15%"><div align="center" class="style6"><strong></strong>Description </div></td>
			  <td width="16%"><div align="center" class="style6"><strong>Number Of Stock</strong> </div></td>
			   </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from product");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>
        <tr>
		 <td width="8%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
			 <td><div align="center"><?php echo $row['name'];?></div></td>
<td><div align="center"><img src="images/<?php echo $row['img'];?>" width="150px"></a</div></td>
			 <td><div align="center"><?php echo $row['price'];?></div></td>
			   <td><div align="center"><?php echo $row['qty'];?></div></td>
			    <td><div align="center"><?php echo $row['desc'];?></div></td>
			    <td width="13%"><div align="center"><a href="viewp.php?act=del&id=<?php echo $row['id'];?>">Delete Product</a> || <a href="update.php?act=add&id=<?php echo $row['id'];?>">Update Product</a></div></td>
		 
        </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="16%">&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
	if($_REQUEST["act"]==('del'))
	{
	$did=$_REQUEST['id'];
	
	$qt=mysql_query("delete from product where id='$did'");
	echo "deleted Sucessfully";
	
	
	
	}
		?>
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>



 <table width="100%" border="0">
    <tr>
       <th height="73" bgcolor="#ffff99" scope="col"><p>copyrights & designedby@Louis Music Point </p>
      </th>
    </tr>
</table>

</body>
</html>

