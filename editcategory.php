<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");


$sql="SELECT * from categories where delete_status='0' and id='".$_GET['id']." '";
  $result=$conn->query($sql)->fetch_assoc();
  
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
<h4>التصنيفات</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>التصنيفات</a>
</li>
<li class="breadcrumb-item"><a href="">تعديل تصنيف</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form role="form" action="editcategory2.php?id=<?php echo $_GET['id'];?>">
    <div class="form-group">
        <label>تغير اسم التصنيف</label>
        <input class="form-control col-lg-6" name="name" value="<?php echo $result['name']?>">
        <br>
        <div class="col-lg-12">
       <button type="submit" class="btn btn-success" name="btn" >تحديث</button>
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