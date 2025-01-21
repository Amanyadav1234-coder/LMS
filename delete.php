<?php
$id=$_REQUEST['id'];
$connect=mysqli_connect("localhost","root","","lsm");
$query="delete from registerinfo where id=$id";
mysqli_query($connect,$query);
header("location:adminstudinfo.php");
?>