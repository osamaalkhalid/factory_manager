<?php
include("connect.php");

$sql="UPDATE categories  set name='".$_POST['name']."' where id = '".$_GET['id']."'";
$result=$conn->query($sql);

header('location:categories.php');
?>