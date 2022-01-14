<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");



if(isset($_POST['submit']))
{
  $path ="image/";
 
  $image=basename($_FILES['file_upload']['name']);
  $image_name=$path.$image;
  
  if(move_uploaded_file($_FILES['file_upload']['tmp_name'],$image_name))
  {
   // echo '<br>Upload Successfully';

  }else
  {
    echo '<br>Not Uploaded';
  }
}

if(isset($_POST['submit']))
{
  $sql="insert into media(file_name,file_type) values ('".$image."','".$_FILES['file_upload']['type']."')";
//print_r( $sql);exit;
  if($conn->query($sql)==TRUE)
  {
    //echo"Record Inserted Sucessfully ";?>
    
    
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }

}
$sql3= "SELECT * from media where delete_status='0'";
$result3=$conn->query($sql3);



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
<h4>قم بتحميل صور المنتجات </h4>


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
<li class="breadcrumb-item"><a href="">صور المنتجات</a>
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
        <form method="POST" enctype="multipart/form-data">
          <input type="file" name="file_upload" multiple="multiple"/><br>
          <button type="submit" name="submit" class="btn btn-default">تحميل</button></form>
    </div>
</div>
<div class="card-block">
<hr>
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
                <tr>
                    <th>التسلسل</th>
                    <th>الصورة</th>
                    <th>اسم الصورة</th>
                    <th>نوع الصورة</th>
                    <th>حالة الصورة</th>
                    
                </tr>
            </thead>
            <tbody>

<?php
foreach ($result3 as $row3) {
  
  ?>
  <tr>
    <td><?php echo $row3['id']; ?></td>
    <td>
   <img src="image/<?php echo $row3['file_name'];?>" style="width:125px;height:125px;"class="img-thumbnail" />
                  </td>
    <td><?php echo $row3['file_name']; ?></td>
    <td><?php echo $row3['file_type']; ?></td>
    
    <td>  
            
          <a href="deletemedia.php?id=<?php echo $row3['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="مسح الصورة" class="btn btn-danger" /></a>
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