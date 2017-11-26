<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$faculty_num = $_POST['uname'];
$password = $_POST['password'];

$faculty_num = stripslashes($faculty_num);
$faculty_num = addslashes($faculty_num);
$password = stripslashes($password); 
$password = addslashes($password);
$result = mysqli_query($con,"SELECT faculty_num FROM admin WHERE faculty_num = '$faculty_num' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
session_start();
if(isset($_SESSION['faculty_num'])){
session_unset();}
$_SESSION["name"] = 'Admin';
$_SESSION["key"] ='sunny7785068889';
$_SESSION["faculty_num"] = $faculty_num;
header("location:dash.php?q=0");
}
else header("location:$ref?w=Warning : Access denied");
?>