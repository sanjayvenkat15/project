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










<table width="98%" align="center">
<tr>
		<td colspan="13" align="center"><strong>Sales  Details</strong></td>
  </tr>
  <tr>
  <td colspan="8">&nbsp;</td>
  </tr>
  
  
	    <tr>
          <td width="26" height="21">&nbsp;</td>
          <td width="84"><div align="center" class="style6"><strong>Id</strong> </div></td>
	      <td width="179"><div align="center" class="style6"><strong>Instrument Name</strong> </div></td>
	    <td width="147"><div align="center" class="style6"><strong>Quantity</strong> </div></td>
		  <td width="128"><div align="center" class="style6"><strong>Price</strong> </div></td>
		   <td width="128"><div align="center" class="style6"><strong>Amount</strong> </div></td>
		  	 <td width="148"><div align="center" class="style6"><strong>Customer Name</strong> </div></td>
		  <td width="129"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
			 		
            
	    </tr>
		<tr>
		<td height="21" colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from addcart where  status='2'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$pid=$row['pid'];
		$uid=$row['uid'];
		$qry1=mysql_query("select * from product where id='$pid'");
		$row1=mysql_fetch_assoc($qry1);
		
		$qry2=mysql_query("select * from register where id='$uid'");
		$row2=mysql_fetch_assoc($qry2);
		
		
		?>
        <tr>
		 <td width="26">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
			  <td><div align="center"><?php echo $row1['name'];?></div></td>
			  <td><div align="center"><?php echo $row['price'];?></div></td>
			 <td><div align="center"><?php echo $row['quantity'];?></div></td>
			   <td><div align="center"><?php echo $row['amount'];?></div></td>
			    <td><div align="center"><?php echo $row2['name'];?></div></td>
	      <td ><div align="center"><?php echo $row2['phone'];?></div></td>
			  		 
        </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
	}
		?>
</table>





 <table width="100%" border="0">
    <tr>
       <th height="73" bgcolor="#ffff99" scope="col"><p>copyrights & designedby@Louis Music Point </p>
      </th>
    </tr>
</table>

</body>
</html>

