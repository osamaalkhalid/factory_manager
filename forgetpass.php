<?php
include("connect.php");

extract($_POST);

if(isset($_POST['btn']))
{
    $sql="select * from users where username='".$_POST['username']."'";
 $result1=$conn->query($sql);
   $row1=$result1->fetch_assoc();
if($_POST['username']==$row1['username'])
{
    
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $password = $randomString;
 /
  $sql="UPDATE users set `password`='$password' where username='".$_POST['username']."'";
  $result1=$conn->query($sql);
  

?>
<script type="text/javascript">
    alert('Password Updated Successfully');
    window.location='login.php';
</script>
<?php


}else
{
?>
<script type="text/javascript">
    alert('Username is not available');
</script>
<?php
}
    ?>

    <script>
        window.location='forgot.php';
  </script>
  <?php


 
}
?>