<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['uid'];
$id=$_REQUEST['id'];
$sql1 = mysql_query("select sum(amount) from addcart where orderid='$id'");
$row2 = mysql_fetch_array($sql1);
 $k = $row2['sum(amount)'];
 if(isset($_POST['btn']))
{
?>
<script language="javascript">
	alert("Amount Transfer Successfull..");
	window.location.href="uhome.php";
	</script>
<?php
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

<form method="post" action="#">
	  <table width="45%" height="312" border="0" align="center">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td height="48">&nbsp;</td>
          <td width="61%"><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
        <tr>
          <td width="39%" height="41"><span class="style4">Amount</span> </td>
		  <td> <?php echo $k;?></td>
        </tr>
        <tr>
          <td height="48"><span class="style4">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" /></td>
        </tr>
        <tr>
          <td height="50"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" /></td>
        </tr>
        <tr>
          <td height="44"><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn" type="submit"value="Pay" /></td>
        </tr>
  </table> 
</form>
  
  
  
  
  
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
