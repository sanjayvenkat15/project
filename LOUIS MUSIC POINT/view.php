<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['uid'];
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

<table width="100%" align="center">
	
	<tr>
		<td colspan="10" align="center"><strong>Ordering  Details</strong></td>
	  </tr>
	
	<tr>
		<td colspan="10">&nbsp;</td>
	  </tr>
	
		    <tr>
          <td width="5%">&nbsp;</td>
          <td width="14%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		  <td width="10%"><div align="center" class="style6"><strong>Instrument Image</strong> </div></td>
		   <td width="12%"><div align="center" class="style6"><strong>Instrument Name</strong> </div></td>
		   <td width="12%"><div align="center" class="style6"><strong>Price</strong> </div></td>
		    <td width="13%"><div align="center" class="style6"><strong>Quantity</strong> </div></td>
			<td width="17%"><div align="center" class="style6"><strong>Amount</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from addcart where uid='$uid' && status='1'|| status='2'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$pid=$row['pid'];
		$qry1=mysql_query("select * from product where id='$pid'");
		$row1=mysql_fetch_assoc($qry1);
		?>
        <tr>
		 <td width="5%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
			  <td><div align="center"><img src="images\<?php echo $row1['img'];?>"  width="100" height="100"/></div></td>
		   <td><div align="center"><?php echo $row1['name'];?></div></td>
			  <td><div align="center"><?php echo $row['price'];?></div></td>
			 <td><div align="center"><?php echo $row['quantity'];?></div></td>
			   <td><div align="center"><?php echo $row['amount'];?></div></td>		 
        </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="17%">&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
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
