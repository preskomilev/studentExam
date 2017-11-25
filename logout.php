<?php 
session_start();
if(isset($_SESSION['faculty_num'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:$ref");
?>