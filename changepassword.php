<<?php
include("check.php");
?> 
<?php
include("header.php");
include("connect.php");

?>



<head>
    <script> 
             
            function checkPassword(form) { 

                $password1=$_POST['password1'];
                $password2=$_POST['password2'];
               
                 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                
            } 
        </script>
    </head>
   
<body>

  
      <form  method="POST" onSubmit = "return checkPassword(this)"  action="pass.php">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> تغير الرقم السري</h1> 
                        </div>
                        
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                          
                                            <form role="form">

                                                
                                                    
                                                
                                                
                                                    <div class="form-group">
                                                    <label> الرقم القديم</label>
                                                    <input class="form-control"name="password" type="password"   required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <label>الرقم السري الجديد</label>
                                                    <input class="form-control"name="password1" type="password"   required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <label>تاكيد الرقم السري مرة اخرى</label>
                                                    <input class="form-control"name="password2" type="password"   required>
                                                    </div>
                                                    
                                                
                                   <center>   <div class="form-group">
                                         <button type="submit" class="btn btn-default" name="btn">تغير</button></center>
                                        </div>
                                                           
                                                    
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
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
                                 
 
<?php
include("footer.php");
?>
 <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>


