<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql= "SELECT * from  user_groups where delete_status='0'";
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
<li class="breadcrumb-item"><a>ادراة المستخدمين</a>
</li>
<li class="breadcrumb-item"><a href="">المجموعات</a>
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
        <a href="addgroup.php"><button class="btn btn-primary pull-right">+ اضف مجموعة</button></a>
    </div>

</div>
<div class="card-block">

<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
                <tr>
                    <th>التسلسل</th>
                    <th>اسم المجموعة</th>
                    <th>مستوى المجموعة</th>
                    <th>حالة المجموعة</th>
                    <th>الحالة</th>
                    
                </tr>
            </thead>
            <tbody>

<?php
foreach ($result as $row) {
     
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['group_name']; ?></td>
        <td><?php echo $row['group_level']; ?></td>
        <td><?php if($row['group_status']==1){
        echo "Active";  
        }else{ echo "Deactive"; }
        ?></td>
        
        <td>    
            <a href="editgroup.php?id=<?php echo $row['id']?>"><input id="edit" type="submit" name="edit"value="Edit" class="btn btn-info"/></a>
          <a href="deletegroup.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="Delete" class="btn btn-danger" /></a>
        </td>
            </tr>
<?php   
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