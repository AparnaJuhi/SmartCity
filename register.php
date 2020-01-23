 <?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$DOB=$_POST['DOB'];
$Adhaar=$_POST['Adhaar'];
echo nl2br("The Username you have registered is ".$FirstName." ".$LastName." \r\n");
echo nl2br("The EmailId you have registered is ".$Email." \r\n");
echo nl2br("The Aadhaar number is ".$Adhaar." \r\n");
if(!empty($FirstName)||!empty($LastName)||!empty($Email)||!empty($DOB)||!empty($Adhaar))
{$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="contact";
$test=mysqli_connect($host, $dbUsername, $dbPassword,$dbname);
if($test)
{$SELECT= "SELECT Adhaar From Register Where Adhaar=? Limit 1";
$INSERT= "INSERT Into Register(FirstName,LastName,Email,DOB,Adhaar) values(?,?,?,?,?)";
$stmt=$test->prepare($SELECT);
$stmt->bind_param("s",$Adhaar);
$stmt->execute();
$stmt->bind_result($Adhaar);
$stmt->store_result();
$rnum=$stmt->num_rows;
if($rnum==0)
{
$stmt=$test->prepare($INSERT);
$stmt->bind_param("sssss",$FirstName,$LastName,$Email,$DOB,$Adhaar);
$stmt->execute();
echo "New record submitted successfully";
}
else
{echo "This Adhaar is already registered";}
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