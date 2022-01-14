<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");


if(isset($_POST['btn']))
{
  //echo "j";
    $sql="insert into categories(name)values('".$_POST['name']."')";
  if($conn->query($sql)==TRUE)
  {
    echo"Record Inserted Sucessfully ";?>
    <script>window.location='categories.php';</script>
  <?php }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}
?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>اضافة تصنيف</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>التصنيفات </a>
</li>
<li class="breadcrumb-item"><a href="">اضافة تصنيف</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form role="form" method="post">
    <div class="form-group">
        <label>التصنيف</label>
        <input class="form-control col-lg-6"name="name" placeholder="اضف اسم التصنيف الجديد">
        <br>
        <div class="col-lg-12">
       <button type="submit" class="btn btn-success" name="btn">انشاء </button>
    </div>
</form>
</div>
</div>


</div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php"); ?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->