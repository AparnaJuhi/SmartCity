 <?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Password=$_POST['Password'];
$Email=$_POST['Email'];
echo nl2br("The Username you have registered is ".$FirstName." ".$LastName." \r\n");
echo nl2br("The EmailId you have registered is ".$Email." \r\n");
if(!empty($FirstName)||!empty($LastName)||!empty($Email)||!empty($Password))
{$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="User";
$test=mysqli_connect($host, $dbUsername, $dbPassword,$dbname);
if($test)
{$SELECT= "SELECT Email From Student Where Email=? Limit 1";
$INSERT= "INSERT Into Student(FirstName,LastName,Email,Password) values(?,?,?,?)";
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
$stmt->bind_param("ssss",$FirstName,$LastName,$Email,$Password);
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