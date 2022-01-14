<?php
include("check.php");
?>
<?php
include("header.php");
include("connect.php");


?>


   
    	<form method="POST" action="sale_report_process.php">
  
    <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Add Category</h1> 
                        </div>

                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form">
                                                 
                                                <div class="form-group">
                                                    <label>Start date</label>
                                                    <input class="form-control"name="start_date" type="date" placeholder="Enter Date" required>
                                                    
                                                </div>
                                                   
                                                <div class="form-group">
                                                    <label>End Date</label>
                                                    <input class="form-control"name="end_date " type="date" placeholder="Enter Date" required>
                                                    
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                <button type="submit" class="btn btn-default" name="submit" style="margin-top: 25px;">Submit</button></div></div>
                                            </form>
                                     </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>


<?php
include("footer.php");
?>