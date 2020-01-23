<?php

$host="localhost";

$user="root";

$password="";

$db="user";

$connection=mysqli_connect($host,$user,$password,$db);

mysqli_select_db($connection,$db);

if(isset($_POST['username']))
{
  $uname=$_POST['username'];
 
 $password=$_POST['password'];
  $sql="select * from Student where Email='".$uname."'AND Password='".$password."'
  limit 1";
  $result=mysqli_query($connection,$sql);
  if(mysqli_num_rows($result)==1)
  {
  header('location:Index.html');
  
    exit();
  }
  else{
    echo "You have entered incorrect password or username";
    exit();
  }
}
?>
<html>
<head><style> body{background-image: linear-gradient(rgb(0,0,0,0.5),rgb(0,0,0,0.5)),url('form submission.jpg');
 background-repeat: no-repeat;
      background-size: cover;

}
.textboxids{padding:10px;}
</style></head><body><div style="margin-left:200px;margin-right:200px;margin-up:200px;font-size:40px; color:white;">
<form action-"*" method="POST"><fieldset>
<legend align="center"><B>Sign In</B></legend><div style="padding:100px;font-size:30px;">
Username:<input class="textboxids" type="text" name="username" placeholder=" Email Id" required><br><br>
Password:<input class="textboxids" type="password" name="password" placeholder="Password"><br><br>
<input id="Button" type="Submit" value="Sign In"><br>
<p><center><span style="color:White;margin-top:20px;font-family:Arial;"> Create an account?<u> <a href="Create_Account.html">SignUp here.</a> </u></span></center></p></form></div></fieldset>
</form>
</div></body>
</html>
