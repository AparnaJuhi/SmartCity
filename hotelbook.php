<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Mob=$_POST['Mob'];
$CheckIn=$_POST['CheckIn'];
$CheckOut=$_POST['CheckOut'];
if(!empty($Name)||!empty($Mob)||!empty($Email)||!empty($CheckIn)||!empty($Checkout))
{$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="hotel";
$test=mysqli_connect($host, $dbUsername, $dbPassword,$dbname);
if($test)
{$SELECT= "SELECT Email From hotel Where Email=? Limit 1";
$INSERT= "INSERT Into hotel(Name,Email,Mob,CheckIn,CheckOut) values(?,?,?,?,?)";
$stmt=$test->prepare($SELECT);
$stmt->bind_param("s",$Email);
$stmt->execute();
$stmt->bind_result($Email);
$stmt->store_result();
$rnum=$stmt->num_rows;
if($rnum==0)
{

$ismt=$test->prepare($INSERT);
$ismt->bind_param("sssss",$Name,$Email,$Mob,$CheckIn,$CheckOut);
$ismt->execute();
echo "Your booking is successfull";
}
else
{echo "Booking unsuccessfull";}
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