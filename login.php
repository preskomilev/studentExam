<?php
session_start();
if(isset($_SESSION["faculty_num"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$faculty_num = $_POST['faculty_num'];
$password = $_POST['password'];

$faculty_num = stripslashes($faculty_num);
$faculty_num = addslashes($faculty_num);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$result = mysqli_query($con,"SELECT name FROM user WHERE faculty_num = '$faculty_num' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["faculty_num"] = $faculty_num;
header("location:account.php?q=1");
}
else
header("location:$ref?w=Wrong Username or Password");


?>