<?php include('inc/header.php'); ?>

<div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                  <!-- Page-header start -->
                  <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-10">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <a  href="add_course.php" class="btn btn-success">+ Add Course</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <div class="page-body">
                        <div class="row">
                           <!-- content -->
                           <div class="col-sm-12">
                       
                                        <div class="card">
                                          
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>SN</th>
                                                                <th>Courses Name</th>
                                                                <th>Trainer</th>
                                                                 <th>Courses Banner</th>
                                                                <th>Duration</th>
                                                                <th>Lessons</th>
                                                                <th>Price</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                        <?php 
                                                            $Select = "SELECT * FROM course ORDER BY sid DESC";
                                                            $query = mysqli_query($conn,$Select); 
                                                            $i=1;
                                                            foreach ($query as $rows) {?>  
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $rows['c_name']; ?></td>
                                                                <td><?php echo $rows['trainer']; ?></td>
                                                                   <td>
                                                                    <img src="uploads/<?php echo $rows['image']; ?>" width="80px;">
                                                                </td>

                                                                 <td><?php echo $rows['duration']; ?> weeks</td>
                                                                <td><?php echo $rows['lesson']; ?></td>
                                                                <td>Tk. <?php echo $rows['c_price']; ?><p><del><?php echo $rows['c_price']; ?></del></p></td>
                                                             
                                                                <td>
                                                                  <a href="" class="btn btn-info">Edit</a> / 
                                                                  <a href="course.php?sid=<?php echo $rows['sid']; ?>"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a>  
                                                                </td>
                                                            </tr>
                                                          <?php $i++; } ?> 

                                                            
                                                        </tbody>
                                                       
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Zero config.table end -->
                                     
                                       
                                    </div>
                                </div>
                            </div>
                                 
                           <!-- content -->
                        </div>
                    </div>
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>


<?php

if (isset($_GET["sid"])) {

        $sql = "DELETE FROM course WHERE sid='" . $_GET["sid"] . "'";

        if (mysqli_query($conn, $sql)) {
          $msg = "Deleted successfully";
          $bg = "alert alert-danger";

          echo "<script>window.location.href='".$_SERVER['PHP_SELF']."';</script>";

        } else {
            echo "Error deleting record:" ;
        }

    }
?>


<?php include('inc/footer.php'); ?>
