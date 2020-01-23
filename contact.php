 <?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
echo nl2br("Your message is received by us,dear ".$Name." \r\n");
echo nl2br("We will definitely write to you as soon as possible \r\n");
if(!empty($FirstName)||!empty($Email)||!empty($Message))
{$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="contact";
$test=mysqli_connect($host, $dbUsername, $dbPassword,$dbname);
if($test)
{$SELECT= "SELECT Email From person Where Email=? Limit 1";
$INSERT= "INSERT Into person(Name,Email,Message) values(?,?,?)";
$stmt=$test->prepare($SELECT);
$stmt->bind_param("s",$Email);
$stmt->execute();
$stmt->bind_result($Email);
$stmt->store_result();
$rnum=$stmt->num_rows;
if($rnum==0)
{
$stmt->close();
$stmt=$test->prepare($INSERT);
$stmt->bind_param("sss",$Name,$Email,$Message);
$stmt->execute();
echo "New record submitted successfully";
}
else
{echo "This Email is already registered";}
$stmt->close();
$test->close();
}
else
{echo "Connection failed";
die();
}
}
else
{echo "All fields are required";
die();
}
?>