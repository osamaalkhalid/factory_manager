<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");
$where='';
if(isset($_GET['start_date']) && isset($_GET['end_date'])){
  $where = " and ( date(build_date) BETWEEN  '{$_GET['start_date']}' and '{$_GET['end_date']}' ) ";
}
$sql= "SELECT * from  sales where delete_status='0' $where
ORDER BY id DESC";
$result=$conn->query($sql);
// echo $sql
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
<h4>المبيعات حسب التاريخ</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>تقرير المبيعات</a>
</li>
<li class="breadcrumb-item"><a href="">المبيعات حسب التاريخ</a>
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
        <form role="form">
            <div class="row">
                <div class="col-lg-4">
            <div class="form-group">
                <label>من تاريخ</label>
                <input class="form-control"name="start_date" type="date" placeholder="Enter Date" value="<?php echo isset($_GET['start_date']) ? $_GET['start_date'] : '' ?>" required>
                
            </div>
        </div>
            <div class="col-lg-4">
            <div class="form-group">
                <label>الى تاريخ</label>
                <input class="form-control"name="end_date"  value="<?php echo isset($_GET['end_date']) ? $_GET['start_date'] : '' ?>" type="date" placeholder="Enter Date" required>
                
            </div>
            </div>
            <div class="col-lg-4">
<div class="form-group">
     <button type="submit" class="btn btn-success" name="btn" style="margin-top: 30px;" >بحث</button></div></div>
 </div> 
   </form> 
    </div>  

</div>
<div class="card-block">

<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
                <tr>
                    <th>التسلسل</th>
                    <th>اسم العميل</th>
                    <th>تاريخ البيع</th>
                    <th>المجموع</th>
                    <th>الملاحظات</th>
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