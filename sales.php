<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

$sql= "SELECT * from  sales where delete_status='0'
ORDER BY id DESC";
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
<h4>جميع المبيعات</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>المبيعات</a>
</li>
<li class="breadcrumb-item"><a href=""> جميع المبيعات</a>
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
        <a href="addsales.php"><button class="btn btn-primary pull-right">+ اضف جديد</button></a>
    </div>

</div>
<div class="card-block">

<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
                <tr>
                    <th>التسلسل</th>
                    <th>اسم العميل</th>
                    <th>تاريخ الشراء</th>
                    <th>المجموع</th>
                    <th>الملاحظات</th>
                    
                    <th>الحالة</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($result))
                {
foreach ($result as $rows) {
    ?>
                <tr class="odd gradeX">
                   <td><?php echo $rows['id']; ?></td>                  
        <td><?php echo $rows['customer_name']; ?></td>
         <td><?php echo $rows['build_date']; ?></td>
          <td><?php echo $rows['total']; ?></td>
        <td><?php echo $rows['remark']; ?></td>
        
        <td>    
            <a href="editsales.php?id=<?php echo $rows['id']?>"><input id="edit" type="submit" name="edit" value="تعديل" class="btn btn-success"/></a>
          <a href="deletsales.php?id=<?php echo $rows['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="حذف" class="btn btn-danger" /></a>
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