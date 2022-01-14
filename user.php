<?php 
session_start();
include("connect.php");
extract($_POST);
if(isset($_POST['btn']))
{ 
	//print_r($_POST['password']);print_r($_POST['username']);exit;
    $pass=md5($_POST['password']);
   // print_r(md5($pass));exit;

   $sql="SELECT u.*,g.group_level FROM users u inner join user_groups g on g.id = u.user_level WHERE  u.password='".$pass."' and u.username='".$_POST['username']."'";

    $result=$conn->query($sql);
   //print_r($sql);exit;
   //$_SESSION['role']='users';
		//header("location:home.php");
if($result && mysqli_num_rows($result) == 1)
{
	
  
  $row = $result->fetch_assoc();
  //echo"<pre>";print_r( $row);exit;
  //echo"<pre>";print_r($row['last_login']);exit;
  $_SESSION['last_login'] = $row['last_login'];
  $_SESSION['id']= $row['id']; 
  $_SESSION['level']= $row['group_level']; 
		$_SESSION['username']=$row['username']; 
		
		 $_SESSION['password']=$row['password'];
		 $today = date("Y-m-d h:i:sa");
//echo "Current date and time is ".$today;exit;
  $sql1="UPDATE users set last_login='$today' where id='".$_SESSION['id']."'";
 $result=$conn->query($sql1);
   //print_r($result);exit;
  // $result = $conn->query($sql1);
  # continue with normal processing for valid login
}
else
{
  # whatever you do for invalid logins
}
header("location:home.php");


	
	?>	
	
	<script>
		alert('Invalid User And Password...');
		window.location='index.php';
	</script>
	<?php
   
}
?>