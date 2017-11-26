<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$faculty_num = $_POST['faculty_num'];
$password = $_POST['password'];

$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));

$faculty_num = stripslashes($faculty_num);
$faculty_num = addslashes($faculty_num);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name', '$password', '$faculty_num')");
if($q3)
{
session_start();
$_SESSION["faculty_num"] = $faculty_num;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Faculty number is already registered !");
}
ob_end_flush();
?>