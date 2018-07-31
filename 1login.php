<?php
session_start();
require 'dbconfig/config.php';
?>
<html>
<title>
Log In</title>
<head>
<style>
#exit{
background-color:#3498db;  
padding:5px;
color:white;
width:120px;
font-size:15px;
font-weight:bold;
}

.div1{
   padding:50px;
background-color:black;
opacity:0.7;
margin:50px auto;
width:350px;
height:300px;
border-radius:10px;
border:3px solid white;
        }
</style>
</head>
<body background="images/x11.jpg">
<div class="div1">
<font color="white">
<p align="center">
  <form  action="1login.php" method="post">
<fieldset>
<center><legend><h1><u>Log In</u></h1></legend>  
<h3>User_Id:   <br>          <input type="text" name="name" ><br><br>
Password:        <br><input type="password" name="pass" ><br><br>
</h3>
<a href="NEWHOME.php">
<input id="exit" name= "login"  type="submit" value="Log In"></a>
<a href="11page.php">
<input id="exit" type="button" value="Exit">
</a>
</font>
</form>
<?php
if(isset($_POST['login']))
 {
 $name=$_POST['name'];
$pass=$_POST['pass'];
 $query="select * from signup where User_Id='$name' AND Password='$pass'";
$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)
{
$_SESSION['name']=$name;
header('location:NEWHOME.php');
}
else
{
echo'<script type="text/javascript">alert("Invalid User")</script>';
}
} 
?>
</fieldset>
</p>
</div>
</body>
</html>