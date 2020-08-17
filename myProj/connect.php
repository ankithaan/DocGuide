<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"dg");
if($db)
{
echo "Connected Succesfully!";
}
else{
echo "Not Connected";
}
?>