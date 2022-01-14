<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
	$newpass=md5($_POST['password1']);//confirm password
	$conpass=md5($_POST['password2']);
	$oldpass=md5($_POST['password']);
	$dbpass=md5($_POST['password']);
	 $sql="SELECT * FROM users where id='".$_SESSION['id']."'";
	$result1=$conn->query($sql);
	$row1=$result1->fetch_assoc();


	
	
	if($oldpass==$dbpass)
	{ 
		 $sql1="UPDATE users set password='".$conpass."' where id='".$_SESSION['id']."'";
		if($conn->query($sql1)==TRUE)
		{
		
		
		?>
		<script>
			alert("Password Change Successfully");
			window.location='changepassword.php';
		</script>
	<?php
}else{?>
	<script>
			alert("Please Enter Correct password");
			window.location='changepassword.php';
		</script>
		<?php
	}
}
}?>
