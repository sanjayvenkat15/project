<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$pid=$_REQUEST['id'];
if(isset($_POST['btn']))
{
		$qry=mysql_query("update product set name='$name',price='$price',qty='$qty' where id='$pid'");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
}

}

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


<?php
$qt=mysql_query("select * from product where id='$pid'");
$rw=mysql_fetch_array($qt);


?>
 <form id="f1" name="f1" method="post" action="#" >
  <table width="34%" border="0" align="center">
		
	
	<tr>
      <td width="39%">&nbsp;</td>
      <td width="61%">&nbsp;</td>
    </tr>
	
    <tr>
      <td colspan="2"  align="center" ><div class="style5"><h3>Add New Musical Instruments</h></div></td>
    </tr>
	
	
	
	
	<tr>
     
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	 <tr>
     
      <td>Instrument Name</td>
      <td><input name="name" type="text" id="name" value="<?php echo $rw['name'];?>" ></td>
    
    </tr>
	
	<tr>
     
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
     
      <td>Price</td>
      <td><input name="price" type="text" id="price" required value=<?php echo $rw['price'];?>></td>
    
    </tr>
	
	<tr>
     
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	<tr>
     
      <td>Quantity</td>
      <td><input name="qty" type="text" id="qty" required  value=<?php echo $rw['qty'];?>></td>
    
    </tr>
	
	
	
	<tr>
     
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
     
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>


 <table width="100%" border="0">
    <tr>
       <th height="73" bgcolor="#ffff99" scope="col"><p>copyrights & designedby@Louis Music Point </p>
      </th>
    </tr>
</table>

</body>
</html>
