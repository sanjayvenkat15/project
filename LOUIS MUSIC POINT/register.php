<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

$qry=mysql_query("insert into register(name,gender,age,email,phone,location,address,uname,psw) values('$name','$gender','$age','$email','$phone','$loc','$address','$uname','$psw')");
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
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
	 <th scope="col"><a href="user.php">User Login</a></th>
	 <th scope="col"><a href="register.php">User Registration</a></th>
     <th scope="col"><a href="#">About Us </a></th>
    </tr>
  </table>

<img src="images\2.jpg" width="1420" height="400">

 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="39%" border="0" align="center">
	
    <tr>
    
      <td colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h></div></td>
    
    </tr>
	
    <tr>
    
      <td>Name</td>
      <td><label>
        <input name="name" type="text" id="name" onChange="return name ()"/>
      </label></td>
     
    </tr>

    <tr>
      
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	

    <tr>
     
      <td>Age</td>
      <td><label>
        <input name="age" type="text" id="age" onChange="return age ()" />
      </label></td>
    
    </tr>
	
    <tr>
       <td>Email Id</td>
      <td><input name="email" type="text" id="email" onChange="return email()" /></td>
      
    </tr>
	
	  <tr>
       <td>Phone Number</td>
      <td><input name="phone" type="text" id="phone" onChange="return phone()" /></td>
     
    </tr>
	
<tr>
      <td>Location</td>
      <td><input type="text" name="loc" id="loc"></td>
     
    </tr>
	
	   <tr>
       <td>Address</td>
      <td><textarea name="address" id="address"></textarea></td>
     
    </tr>
	
    <tr>
   
      <td>User Name</td>
      <td><input name="uname" type="text" id="uname" /></td>
      
    </tr>
	
    <tr>
      <td>Password</td>
      <td><input name="psw" type="password" id="psw" /></td>
   
    </tr>

	<tr>
       <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>


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
