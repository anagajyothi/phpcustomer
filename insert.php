<?php
$con = mysqli_connect('localhost','root','mysql');
if(!$con)
{
echo "not connected to server";
}

$CustomerId = $_POST['cid'];
$Name = $_POST['ccfname'];
$lName = $_POST['cclname'];
$Mobile = $_POST['ccmobile'];
$Email = $_POST['ccemail'];
$Address = $_POST['ccaddress'];
$sql = "INSERT INTO data (cfname, clname, cmobile, cemail, caddress) VALUES ('$cfname', '$clname', '$cmobile', '$cemail', '$caddress')";
if($con->query($sql) === TRUE)
{
echo "Not Inserted";
}
else
{
echo "Inserted";
}
      ?>
