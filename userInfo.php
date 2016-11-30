<?php
echo "<title>User Infomation</title>";
require_once("oracle-functions.php");
$conn = connectDB();

$gender=$_POST['gender'];
$name=$_POST['name'];

$sql = "insert into student values ('$id', '$name')";

?>