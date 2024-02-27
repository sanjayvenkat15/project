<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['uid'];
if(isset($btn))
{
$amount=0;
	$mq2=mysql_query("select max(orderid) from addcart");
$mr2=mysql_fetch_array($mq2);
$order=$mr2['max(orderid)']+1;
	for($i=0;$i<count($gid);$i++)
	{
	$amt=$price[$i]*$qty[$i];
	$amount+=$amt;
	mysql_query("update addcart set price=$price[$i],quantity=$qty[$i],amount=$amt,status=1,orderid=$order where id=$gid[$i]");
	}

header("location:payment.php?id=".$order);
}
if($_REQUEST['act']=="del")
{
$did=$_REQUEST['did'];
mysql_query("delete from addcart where id=$did");

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


<form name="form1" method="post" action="">
	<table width="801" border="1" align="center" cellpadding="5">
      <tr>
        <th width="81" scope="col">Image</th>
        <th width="81" scope="col">Instrument Name</th>
        <th width="128" scope="col">Price</th>
        <th width="171" scope="col">Quantity</th>
        <th width="171" scope="col">Action</th>
      </tr>
      <?php
	$q1=mysql_query("select * from addcart where uid='$uid' && status=0");
  $num=mysql_num_rows($q1);
  if($num>0)
  {  
	while($r1=mysql_fetch_array($q1))
	{
	$q3=mysql_query("select * from product where id=".$r1['pid']."");
	$r3=mysql_fetch_array($q3);

	?>
      <tr>
        <td align="left"><img src="images/<?php echo $r3['img']; ?>" width="80" height="80" /></td>
        <td align="left"><?php echo $r3['name']; ?></td>
        <td align="left"><?php echo $r3['price']; ?></td>
        <td align="left"><input type="text" name="qty[]" />
            <input type="hidden" name="gid[]" value="<?php echo $r1['id']; ?>" />
            <input type="hidden" name="bid[]" value="<?php echo $r1['pid']; ?>" />
            <input type="hidden" name="price[]" value="<?php echo $r3['price']; ?>" />
        </td>
		<td align="left"><a href="addcart.php?act=del&did=<?php echo $r1['id'];?>">Remove</a></td>
      </tr>
      <?php
	}
	?>
	<p align="center">
 <tr>
 <td colspan="6" align="center"><input type="submit" name="btn" value="Order" /></td>
 </tr>
  </p> <?php
  }
  else
  {
  echo "Order is Empty!";
  }
  ?>
  </form>
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
