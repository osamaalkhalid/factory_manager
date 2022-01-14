<?php
include("check.php");
?>
<?php

include("header.php");
include("connect.php");

  $sql="SELECT * from users where delete_status='0' and id='".$_GET['id']." '";
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
<h4> ادارة المستخدم</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>ادارة المستخدم</a>
</li>
<li class="breadcrumb-item"><a href="">تعديل </a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form method="POST" action="edituser2.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">
     <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> تعديل بيانات المستخدم</h1> 
                        </div>
                         
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>الاسم</label>
                                                    <input class="form-control"name="name" value="<?php echo $result['name']?>"  required>
                                                  </div>
                                                </div>
                                                
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>اسم المستخدم</label>
                                                    <input class="form-control"name="username" value="<?php echo $result['username']?>"required>
                                                  </div>  
                                                </div><br><br>
                                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>صورة المستخدم</label><br>
                                                    <!-- <img src="image/<?php echo $result['image']?>" width="20%"><br><br> -->
                                                     <input type="hidden" name="old_image" value="<?php echo $result['image']?>">


                                                    <input type="file" name="image" value="<?php echo $result['image']?>"><br>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                    
                                                     <label for="user_level">اختر دور المستخدم</label>
    <select   name="user_level" required class="form-control">
<?php
     $sql1 = ("SELECT * FROM user_groups where delete_status=0 ");
     $result1 =$conn->query($sql1);
     
 while ($row1 =$result1->fetch_assoc()){ ?>
     <option value="<?php echo $row1['id']; ?>"  <?php if($result['user_level']==$row1['id']){echo "selected";}?>><?php echo $row1['group_name']; ?></option>";
 <?php   }                    
?></select></div></div>
                                                    
                                                       
                                                      
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                                <div class="col-lg-6">

                                                <div class="form-group">
                                                    <label>حالة حساب المستخدم</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="1" <?php if($result['status']=='1'){echo "checked";}?> >نشط
                                                        </label>
                                                    </div>
                                                
                                                

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="0" <?php if($result['status']=='0'){echo "checked";}?>>تعطيل
                                                        </label>
                                                    </div>
                                                </div>
                                               

                                                        <div class="form-group">
                                                           <center>     <button type="submit" class="btn btn-success" name="btn" style="margin-left:80%;"> تحديث</button> </center> </div>
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