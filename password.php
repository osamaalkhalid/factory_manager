<?php
include("connect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
  $sql="select * from users where id='".$_SESSION['id']." '";
 $result1=$conn->query($sql);
   $row1=$result1->fetch_assoc();
   


$pass2=md5($_POST['password']);
/

if($pass2==$row1['password'])
{
   if(new and confi)
   {
   $sql="UPDATE users set password='".md5($pass2)."' where id='".$_SESSION['id']."'";
   $result1=$conn->query($sql);
   print_r($sql);exit;

  ?> 
 <script>
    alert('Password Change successfully');
    window.location='changepassword.php';
  </script>
  <?php
}
  
  else
  {
  ?>
  <script>
    alert('Please Enter Correct Password');
    window.location='changepassword.php';
  </script>
  <?php
 }   
  
}
?>