<?php
$conn=mysqli_connect("localhost","root","","student");
if($conn==true)
{
	echo"well done";
}
else
{
	echo "not well done";
}
?>