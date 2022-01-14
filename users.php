<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql= "SELECT u.id,u.name,u.username,u.user_level,u.status,u.last_login,g.group_name 
          FROM users u
          LEFT JOIN user_groups g ON g.id=u.user_level 
          where u.delete_status='0' 
          ORDER BY u.name ASC";
$result=$conn->query($sql);

 
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
<h4>المستخدمين</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>ادارة المستخدمين</a>
</li>
<li class="breadcrumb-item"><a href="">المستخدمين</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-header">
    <div class="col-sm-10">
        <a href="adduser.php"><button class="btn btn-primary pull-right">+ اضف مستخدم جديد</button></a>
    </div>

</div>
<div class="card-block">

<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
                <tr>
                    <th>التسلسل</th>
                    <th>الاسم</th>
                    <th>اسم المستخدم</th>
                    <th>دور المستخدم</th>
                    <th>حالة حساب المستخدم</th>
                    <th>تاريخ تسجيل الدخول</th>
                    <th>الحالة</th>
                </tr>
            </thead>
            <tbody>

<?php
if(!empty($result))
{
foreach ($result as $row) 
{
     
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['group_name']; ?></td>
        <td><?php if($row['status']==1){
        echo "Active";  
        }else{ echo "Deactive"; }
        ?></td>
        <td><?php echo  $row['last_login']; ?></td>
        <td>    
            <a href="edituser.php?id=<?php echo $row['id']?>"><input id="edit" type="submit" name="edit" value="تعديل" class="btn btn-success"/></a>
          <a href="deleteuser.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="مسح" class="btn btn-danger" /></a>
        </td>
            </tr>
<?php   
}
}
?>

                                               
                                        </tbody>
</table>
</div>
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