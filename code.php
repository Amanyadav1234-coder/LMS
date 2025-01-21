<?php
$name=$_POST['name'];

$fname=$_POST['fname'];
$course=$_POST['course'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$usertype=$_POST['usertype'];
$userid=$_POST['userid'];
$password=$_POST['password'];  
$markname=$_FILES['marks_name']['name'];
$markssize=$_FILES['marks_name']['size'];
$markstype=$_FILES['marks_name']['type'];
$markstmp=$_FILES['marks_name']['tmp_name'];
$location="upload/";
// echo"$name $fname $course $phone $email $usertype $userid $password $marks_name";
if($usertype=="admin")
{
    $connect=mysqli_connect("localhost","root","","lsm");
$query="insert into registerinfo(name,fname,course,phone,email,usertype,userid,password,date,marks_name)values('$name','$fname','$course','$phone','$email','$usertype','$userid','$password','NOW()','$markname')";
move_uploaded_file($markstmp,$location.$markname);
mysqli_query($connect,$query);
if(mysqli_affected_rows($connect)>0)
{
    echo "<script>alert('Register successfully');window.location.href='login.php';</script>";
    // header("location:login.php");
     
    
}
else    
{
    echo "<script>alert('Not Register Please Try Again');window.location.href='register.php';</script>";
}  
} 
else
{
    $connect=mysqli_connect("localhost","root","","lsm");
    $query="insert into student(name,fname,course,phone,email,usertype,userid,password,date,marks_name)values('$name','$fname','$course','$phone','$email','$usertype','$userid','$password','now()','$markname')";
    move_uploaded_file($markstmp,$location.$markname);
    mysqli_query($connect,$query);
    if(mysqli_affected_rows($connect)>0)
    {
        echo "<script>alert('Register successfully');window.location.href='login.php';</script>";
        // header("location:login.php");
         
        
    }
    else    
    {
        echo "<script>alert('Not Register Please Try Again');window.location.href='register.php';</script>";
    } 
}
?>