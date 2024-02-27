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
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
	 <th scope="col"><a href="user.php">User Login</a></th>
	 <th scope="col"><a href="register.php">User Registration</a></th>
     <th scope="col"><a href="#">About Us </a></th>
    </tr>
  </table>
  


<img src="images\2.jpg" width="1500" height="400">




<br/>
<br/><br/>

<table width="58%" border="1" height="159" border="0">
  
  
  
  <?php 
  $qry=mysql_query("select * from product");
  while($row=mysql_fetch_array($qry))
  {
  
  ?>
  
    <tr>
     <td width="21%" rowspan="3" scope="col"><img src="images\<?php echo $row['img'];?>" width="200" height="200"></td>
     <td width="23%" height="57" scope="col"><strong>Instrument Name</strong></td>
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
	   <td><strong>Waranty</strong></td>
     <td><?php echo $row['wty'];?></td>
	 <td colspan="2" align="center"><strong><a href="log.php?id=<?php echo $row['id'];?>">Order</a></strong></td>
	
   </tr>
   
	 
	 <?php
	 
	 
	 }
	 
	 
	 
	 
	 ?>
	 
</table>













<marquee scrollamount="10"><h1><font color="yellow">Louis Music Point</h1></marquee>
<br>
<br>
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
