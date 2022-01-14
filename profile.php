<?php
include("check.php");
?>
<?php

include("header.php");
include("connect.php");

  $sql="SELECT * from users where delete_status='0' and id='".$_SESSION['id']."'";
  $result=$conn->query($sql)->fetch_assoc();

  
?>

<head>
    <script type="application/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
    
<body>
  <form method="POST" action="profile2.php?id=<?php echo $_SESSION['id'];?>" enctype="multipart/form-data">
     <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Edit Profile</h1> 
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
                                                    <label>Name</label>
                                                    <input class="form-control"name="name" value="<?php echo $result['name']?>"  required>
                                                  </div>
                                                </div>
                                                
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input class="form-control"name="username" value="<?php echo $result['username']?>"required>
                                                  </div>  
                                                </div><br><br>
                                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Profile</label><br>
                                                    <img src="image/<?php echo $result['image']?>" width="20%"><br><br>
                                                     <input type="hidden" name="old_image" value="<?php echo $result['image']?>">


                                                    <input type="file" name="image" value="<?php echo $result['image']?>"><br>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                    
                                                     <label for="user_level">Select User Role</label>
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
                                                    <label>Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="1" <?php if($result['status']=='1'){echo "checked";}?> >Active
                                                        </label>
                                                    </div>
                                                
                                                

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="status"  value="0" <?php if($result['status']=='0'){echo "checked";}?>>Deactive
                                                        </label>
                                                    </div>
                                                </div>
                                         

                                                        <div class="form-group">
                                                           <center> <button type="submit" class="btn btn-default" name="btn"style="margin-left:90%;"> Submit</button> </center> </div>
                                                       
                                                   </div>
                                                                   
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
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
                                 
  
  

<?php
include("footer.php");
?>
 <!-- /#wrapper -->
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


