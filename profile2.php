<?php
include("connect.php");

if(isset($_POST['btn']))
{
  if($_FILES['image']['tmp_name'] != '')
  {
    $path ="image/";
    $image=basename($_FILES['image']['name']);
    $image_name=$path.$image;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$image_name))
    {
      $image=basename($_FILES['image']['name']);
    }
  }else{
    $image = $_POST['old_image'];
  }
}


$sql="UPDATE users set name='".$_POST['name']."',username='".$_POST['username']."',image='$image',status='".$_POST['status']."',user_level='".$_POST['user_level']."' where id='".$_GET['id']."'";
$result=$conn->query($sql);
header('location:profile.php');
?>
