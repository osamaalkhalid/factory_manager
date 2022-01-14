<?php 
include("check.php");
?>
<?php
include("header.php");
include("connect.php");

$sql="select count(id) as id1 from users where delete_status='0' and status='1'";
$result=$conn->query($sql);
   $row=$result->fetch_assoc();

   
   $sql1="SELECT  count(id) as id2 FROM categories WHERE delete_status='0'";
$result1=$conn->query($sql1);
$row1=$result1->fetch_assoc();
   

   $sql2="SELECT  count(id) as id3 FROM products WHERE delete_status='0'";
$result2=$conn->query($sql2);
   $row2=$result2->fetch_assoc();

$sql3="select count(id) as id4 from sales1 where delete_status='0' ";
$result3=$conn->query($sql3);
   $row3=$result3->fetch_assoc();

    $sql4="select count(id) as id5 from media where delete_status='0' ";
$result4=$conn->query($sql4);
   $row4=$result4->fetch_assoc();

$sql5="SELECT p.name, COUNT(s.product_id) AS totalSold, SUM(s.qty) AS totalQty
                   FROM sales1 s
                   LEFT JOIN products p ON p.id = s.product_id 
                   where s.delete_status=0 
                   GROUP BY s.product_id";
                    $result5=$conn->query($sql5);

$sql6="SELECT s.id,s.qty,s.price,s.date,p.name
       FROM sales1 s
    LEFT JOIN products p ON s.product_id = p.id
    where s.delete_status=0
    GROUP BY s.product_id
    ORDER BY SUM(s.qty) DESC LIMIT 5 ";
     $result6=$conn->query($sql6);



 $sql7="SELECT p.id,p.name,p.sale_price,p.media_id,c.name AS categorie,m.file_name AS image
       FROM products p
   LEFT JOIN categories c ON c.id = p.categorie_id
   LEFT JOIN media m ON m.id = p.media_id
    where p.delete_status=0
    ORDER BY c.id DESC LIMIT 3";
     $result7=$conn->query($sql7); 
     //print_r($sql7);exit;  
                  
                    
   
?>

<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper full-calender">
<div class="page-body">
<div class="row">
 <?php if($_SESSION['username']=='ndbhalerao91@gmail.com'){ ?>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row['id1'];?></h4>
<h6 class="text-white m-b-0">المستخدمين</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-2" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>
 

<div class="col-xl-3 col-md-6">
<div class="card bg-c-pink update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row1['id2'];?></h4>
<h6 class="text-white m-b-0">التصنيفات</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-3" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>
 



<div class="col-xl-3 col-md-6">
<div class="card bg-c-lite-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row2['id3'];?></h4>
<h6 class="text-white m-b-0">المنتجات</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-4" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>



<div class="col-xl-3 col-md-6">
<div class="card bg-c-yellow update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row3['id4'];?></h4>
<h6 class="text-white m-b-0">المبيعات</h6>
 </div>
<div class="col-4 text-right">
<canvas id="update-chart-1" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
<?php if($_SESSION['username']=='ndbhalerao91@gmail.com'){ ?>
<div class="row">     
              <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>المنتجات الأعلى مبيعًا</span>
         </strong>
       </div>
       <div class="table-responsive dt-responsive">
        <table class="table table-striped table-bordered nowrap">
          <thead>
           <tr>
             <th>اسم المنتج</th>
             <th>اجمالي المبيعات</th>
             <th>الكمية الاجمالية </th>
           </tr>
          </thead>
          <tbody>
            <?php 
           foreach ($result5 as $row5) {
         
                   //$row5=$result5;
               // print_r( $result5);exit;

            ?>
              <tr>
                <td><?php echo $row5['name']; ?></td>
                <td><?php echo $row5['totalQty']; ?></td>
                <td><?php echo $row5['totalSold']; ?></td>
              </tr>
           <?php }?>
          </tbody>
         </table>
       </div>
     </div>
</div>
 <div class="col-md-12">
     <div class="panel panel-default" >
       <div class="panel-heading">
         <strong>
           <span class="glyphicon glyphicon-th"></span>
           <span>أحدث المبيعات</span>
         </strong>
       </div>
       <div class="table-responsive dt-responsive">
        <table class="table table-striped table-bordered nowrap">
          <thead>
            <tr>
           <th>#</th>
           <th>اسم المنتج</th>
           <th>التاريخ</th>
           <th>اجمالي البيع</th>
         </tr>
          </thead>
          <tbody>
            <?php 
           foreach ($result6 as $row6) {

            ?>
              <tr>
                <td><?php echo $row6['id']; ?></td>
                <td>
            <a href="editsales.php?id=<?php echo $row6['id']; ?>">
             <?php echo $row6['name']; ?>
           </a>
           </td>
                <td><?php echo $row6['date']; ?></td>
                <td><?php echo $row6['price']; ?></td>
              </tr>
           <?php }?>
          </tbody>
         </table>
       </div>
     </div>
     </div>

      <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>المنتجات التي تم بيعها  حديثًا</span>
        </strong>
      </div>
      <div class="panel-body">

        <div class="list-group">
        <?php foreach ($result7 as  $row7): ?>
            <a class="list-group-item clearfix" href="editproduct.php?id=<?php echo $row7['id'];?>">
                <h4 class="list-group-item-heading">
                 <?php if($row7['media_id'] === '0'): ?>
                    <img class="img-avatar img-circle"  style="width:50px;height: 50px;border-radius:50%; src='image/no_image.jpg'" alt="">
                  <?php else: ?>
                  <img class="img-avatar img-circle"  style="width:50px;height: 50px;border-radius:50%;"src="image/<?php echo $row7['image'];?>" alt="" />
                <?php endif;?>
                <?php echo $row7['name'];?>
                  <span class="label label-warning pull-right">
                 $<?php echo $row7['sale_price']; ?>
                  </span>
                </h4>
                <span class="list-group-item-text pull-right">
                <?php echo $row7['categorie']; ?>
              </span>
          </a>
      <?php endforeach; ?>
    </div>
  </div>
 </div>
</div>
 </div>
 <?php }else{
  echo "<h2>Sorry, the user functionalities/Features is still Under Construction.</h2>";
 } ?>
</div>
</div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
