<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid= $_SESSION['uid'];
	
	if($_REQUEST['act']=="add")
{
$pid=$_REQUEST['id'];
$amnt=$_REQUEST['price'];
$mq=mysql_query("select max(id) from addcart");
$mr=mysql_fetch_array($mq);
$id=$mr['max(id)']+1;
$ins=mysql_query("insert into addcart(id,uid,orderid,pid,price,quantity,amount,status)
values($id,'$uid','0','$pid','0','0','0','0')");
header("location:uhome.php");
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
      <th scope="col"><a href="uhome.php">User Home</a></th>
      <th scope="col"><a href="addcart.php">Add Cart</a></th>
	 <th scope="col"><a href="view.php">Order Details</a></th>
	 <th scope="col"><a href="index.php">LogOut </a></th>
    </tr>
  </table>

<img src="images\2.jpg" width="1420" height="400">

<br />
<br />
<br />
<br /><br />


<table width="58%" height="159" border="0">
  
  
  
  <?php 
  $qry=mysql_query("select * from product");
  while($row=mysql_fetch_array($qry))
  {
  
  ?>
  
    <tr>
     <td width="21%" rowspan="2" scope="col"><img src="images\<?php echo $row['img'];?>" width="100" height="100"></td>
     <td width="23%" height="57" scope="col">Instrument Name</td>
     <td width="21%" scope="col"><?php echo $row['name'];?></td>
	<td width="20%"><strong>Usage</strong></td>
     <td width="15%"><?php echo $row['usage'];?></td>
     
   
   </tr>
   
   
    <tr>
	   <td height="41"><strong>Description</strong></td>
     <td><?php echo $row['desc'];?></td>
		<td><strong>Price</strong></td>
     <td><?php echo $row['price'];?></td>
	
	
   </tr>
   
   
   
    <tr>
	<td>&nbsp;</td>
	   <td><strong>Warranty</strong></td>
     <td><?php echo $row['wty'];?></td>
	 <td colspan="2" align="center"><strong><a href="uhome.php?act=add&id=<?php echo $row['id'];?>">Order</a></strong></td>
	
   </tr>
   
	 
	 <?php
	 
	 
	 }
	 
	 ?>
	 
</table>


<marquee scrollamount="10"><h1><font color="yellow">Louis Music Point</h1></marquee>
<br>
<br>
 <table width="100%" border="0">
    <tr>
       <th height="73" bgcolor="#ffff99" scope="col"><p>copyrights & designedby@Louis Music Point </p>
      </th>
    </tr>
</table>

</body>
</html>
