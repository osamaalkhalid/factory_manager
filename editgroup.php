<?php
include("check.php");
?>
<?php

include("header.php");
include("connect.php");

  $sql="SELECT * from user_groups where delete_status='0' and id='".$_GET['id']." '";
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
<h4>المجموعات</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>المجموعات</a>
</li>
<li class="breadcrumb-item"><a href="">تعديل</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form role="form" action="editgroup2.php?id=<?php echo $_GET['id'];?>">
                                                <div class="row">
                                                     <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>اسم المجموعة</label>
                                                    
                                                    <input class="form-control"name="group_name" placeholder="Enter Groupname" value="<?php echo $result['group_name']?>" required>
                                                    </div>
                                                
                                                <div class="form-group">
                                                        <label for="group_level">اختر مستوى المجموعة</label>
                                                     <input type="number" class="form-control" value="<?php echo $result['group_level']; ?>" name="group_level">
                                                </div>

                                                <div class="form-group">
                                                    <label>حالة المجموعة</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="group_status"  value="1" <?php if($result['group_status']=='1'){echo "checked";}?> >نشط
                                                        </label>
                                                    </div>
                                                
                                                

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="group_status"  value="0" <?php if($result['group_status']=='0'){echo "checked";}?>>معطل
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-lg-12">

                                                        <div class="form-group">
                                                           <center>     <button type="submit" class="btn btn-success" name="btn"> تحديث</button> </center> </div>
                                                       </div>
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
<?php
include("footer.php");
?>
 
