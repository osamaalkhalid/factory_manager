<?php
include("connect.php");
$sql="UPDATE users set delete_status='1' where id='".$_GET['id']."'";
header('location:users.php');
echo 'Deleted successfully.';
if($conn->query($sql))
{
	echo "Record Deleted";
}else
{
	echo "Not Deleted";
}

?>