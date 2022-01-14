<?php
include("check.php");
?>
<?php
include("connect.php");
include("header.php");

if(isset($_POST['btn_save'])){
  //echo "<pre>"; print_r($_POST); exit;
  date_default_timezone_set('Asia/Kolkata');
 
 extract($_POST);
 $build_date=date('Y-m-d',strtotime($build_date)); 
 $sql_insert ="INSERT INTO `sales`(`build_date`, `customer_name`, `total`, `remark`) VALUES ('$build_date','$customer_name','$subtotal','$remark')"; 
$res_insert = $conn->query($sql_insert);
 $last_billing_id =  mysqli_insert_id($conn);
$billingid = $last_billing_id;

$service = count($_POST['select_services']);
 for($i=0;$i<$service;$i++){   
  $sql_service = "insert into sales_product(sales_id,product_id, quantity, unit_price, total)values('$billingid','$select_services[$i]','$quantity[$i]','$unit_price[$i]','$total[$i]')"; 
 
 $conn->query($sql_service);
}
?>
<script type="text/javascript">
  window.location="sales.php";
</script>
<?php
}
?>


?>
<style>
  .hide
  {
    display: none;
  }
</style>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>اضافة بيع جديد</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>ادارة المبيعات</a>
</li>
<li class="breadcrumb-item"><a href="">اضافة بيع جديد</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form class="form-valide" method="POST" name="userform" enctype="multipart/form-data">

                                        <div class="row">
                                        <div class="form-group row col-md-6">
                                                <label class="col-sm-3 control-label">تاريخ البيع:</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="build_date" class="form-control datepicker" value="<?=date('m/d/Y')?>" data-provide="datepicker">
                                                  <!--<input type="text" name="build_date" class="form-control" data-provide="" value="<?=date('m/d/Y')?>" readonly>-->
                                                </div>
                                        </div>

                                      
                                        <div class="form-group row col-md-6">
                                                <label class="col-sm-3 control-label">اسم العميل</label>
                                                <div class="col-sm-9">
                                                   <input type="text" name="customer_name" class="form-control">
                                                </div>
                                        </div>
                                    </div>
                                        
                                          <div class="form-group row">

                                           <div class="col-sm-3">
                                                <div class="col-sm-12">
                                                 المنتج 
                                                </div>
                                        </div>

                                            <div class="col-sm-2">
                                            الكمية
                                            </div>

                                            <div class="col-sm-2">
                                           سعر البيع 
                                            </div>

                                            <div class="col-sm-2">
                                              المجموع
                                            </div>
                                         </div>
                                         <div class="mydiv">
                                        <div class="form-group row control-group after-add-more subdiv">

                                           <div class="col-sm-3">
                                                <div class="col-sm-12">
                                                   <select name="select_services[]" class="form-control select_services">
                                     <option value="">--اختر مننج--</option>
                                    <?php
                                    $sql= "SELECT * from  products where delete_status='0' ORDER BY id DESC";
                                      $result=$conn->query($sql);
                                   foreach ($result as $r_service) { ?>  
                                        <option value="<?php echo $r_service['id'];?>"><?php echo $r_service['name'];?></option>
                                   <?php } ?>
                                   </select>
                                                </div>
                                        </div>

                                            <div class="col-sm-2">
                                            <input type="text" class="form-control" id="quantity" name="quantity[]" placeholder="الكمية" required>
                                            </div>

                                            <div class="col-sm-2">
                                           <input type="text" class="form-control" id="unit_price" name="unit_price[]" placeholder="سعر البيع" required>
                                            </div>

                                            <div class="col-sm-2">
                                           <input type="text" class="form-control total" id="total" name="total[]" placeholder="المجموع" readonly="" >
                                            </div>

                                            <div class="col-sm-2">
                                            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> اضافة</button>
                                            </div>
                                         </div>
                                  
                                      </div>

                              <div class="form-group row">
                                  <label class="col-sm-6 control-label">المجموع النهائي</label>
                                  <div class="col-sm-3">
                                      <input type="text" name="subtotal" id="subtotal" class="form-control" placeholder="المجموع النهائي" readonly="">
                                  </div>
                             </div> 
                             <div class="form-group row">
                                  <label class="col-sm-6 control-label">الملاحظات</label>
                                  <div class="col-sm-3">
                                      <input type="text" name="remark" id="remark" class="form-control" placeholder="اكتب ملاحظة حول عملية البيع">
                                  </div>
                             </div>
                             <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">اضافة</button>
            </form>
            <div class="copy hide">
                         <div class="form-group control-group row subdiv">

                             <div class="col-sm-3">
                                <div class="col-sm-12">
                                   <select name="select_services[]" class="form-control select_services">
                                     <option value="">--اختر المنتج--</option>
                                    <?php
                                    $sql= "SELECT * from  products where delete_status='0' ORDER BY id DESC";
                                      $result=$conn->query($sql);
                                   foreach ($result as $r_service) { ?>  
                                        <option value="<?php echo $r_service['id'];?>"><?php echo $r_service['name'];?></option>
                                   <?php } ?>
                                   </select>
                                </div>
                        </div>

                       <div class="col-sm-2">
                      <input type="text" class="form-control" id="quantity" name="quantity[]" placeholder="اختر الكمية">
                      </div>

                      <div class="col-sm-2">
                     <input type="text" class="form-control" id="unit_price" name="unit_price[]" placeholder="سعر البيع">
                      </div>

                      <div class="col-sm-2">
                     <input type="text" class="form-control total" id="total" name="total[]" placeholder="المجموع" readonly="">
                      </div>
                      <div class="col-sm-2">
                     <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> مسح</button>
                      </div>
                    </div>
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
<script type="text/javascript">
  $(".add-more").on('click',function(){ 

          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });  

      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });   
</script>
<script type="text/javascript">

$(document).ready(function() {
$('div.mydiv').on("keyup",'input[name^="unit_price"]',function(event){
          var currentRow=$(this).closest('.subdiv');
          var quantity =currentRow.find('input[name^="quantity"]').val();
          //alert(quantity);
          var unitprice=currentRow.find('input[name^="unit_price"]').val();
         //alert(unitprice);
        
          var total = Number(quantity) * Number(unitprice);
          var total=+currentRow.find('input[name^="total"]').val(total);
         // $('#subtotal').val(total);
    var sum = 0;
    $('.total').each(function() {
        sum += Number($(this).val());
    });
 $('#subtotal').val(sum);
$('#final_total').val(sum);
var sub_text = $('#subtotal').val();
var disc=$("#view_discount").val();
var sub_total = Number(sub_text)- Number(disc) ; 
$("#final_total").val(sub_total);
     });
     
     $('div.mydiv').on("keyup",'input[name^="quantity"]',function(event){
          var currentRow=$(this).closest('.subdiv');
          var quantity =currentRow.find('input[name^="quantity"]').val();
          //alert(quantity);
          var unitprice=currentRow.find('input[name^="unit_price"]').val();
         //alert(unitprice);
        
          var total = Number(quantity) * Number(unitprice);
          var total=+currentRow.find('input[name^="total"]').val(total);
         // $('#subtotal').val(total);
    var sum = 0;
    $('.total').each(function() {
        sum += Number($(this).val());
    });
 $('#subtotal').val(sum);
$('#final_total').val(sum);

var sub_text = $('#subtotal').val();
var disc=$("#view_discount").val();
var sub_total = Number(sub_text)- Number(disc) ; 
$("#final_total").val(sub_total);

var tot_commi = 0;
});

$('form').on("keyup",'input[name="advanced_amount"]',function(argument) {
var final_total = $('#final_total').val();
//alert(final_total);
var advanced_amount = $(this).val();
//alert(advanced_amount);
if(Number(advanced_amount) >  Number(final_total)){
alert('Your Amount is greater than:'+final_total);
$("#advanced_amount").val("");
}
else {
var cust_amt = Number(final_total)  -  Number(advanced_amount);
//alert(cust_amt);
var cust_pending = $("#pending_amount").val(cust_amt);
}

  });
});



 $('div.mydiv').on("change",'select[name^="select_services"]',function(event){
            var currentRow=$(this).closest('.subdiv');
            var drop_services= $(this).val();
            $.ajax({
                type : "POST",
                url  : 'ajax_service.php',
                data : {drop_services:drop_services },
                success: function(data){
                    currentRow.find('input[name^="quantity"]').val(1);
                    currentRow.find('input[name^="unit_price"]').val(data);
                    var quantity =currentRow.find('input[name^="quantity"]').val();
                  var unitprice=currentRow.find('input[name^="unit_price"]').val();
                  var total = parseInt(quantity) * parseInt(unitprice);
                  currentRow.find('input[name^="total"]').val(total);
                   //var total=+currentRow.find('input[name^="total"]').val(total);
         // $('#subtotal').val(total);
    var sum = 0;
    $('.total').each(function() {
        if($(this).val()!='')
        {
            sum += parseInt($(this).val());
        }
        
    });
    
var sub = $('#subtotal').val(sum);
var fsub = $('#final_total').val(sum);

var tot_commi = 0;
                }
            });
            
        });
        
</script>