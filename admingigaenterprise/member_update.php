<!-- header -->
<?php 
    include('inc/header.php'); 

	if (isset($_GET['sid'])) {
	   $team = mysqli_query($conn, "SELECT * FROM team WHERE sid='{$_GET['sid']}'");
	   $team_inf = mysqli_fetch_array($team); 
?>


<!-- update query -->
<?php 

 if (isset($_POST['update'])) {

	$name            =  $_POST['name'];
    $designation      =  $_POST['designation'];
  

  if ($_FILES['image']['name']=='') {
	    	$image=$product_inf ['image'];
	    }else{
			$image  =  $_FILES['image']['name'];
	    }

	     $sql=" UPDATE team 
                   SET 
                   name             ='$name',
                   designation       ='$designation',
                   image             ='$image'
                   WHERE 
                   sid='" . $_GET["sid"] . "'";


			if(mysqli_query($conn, $sql)){  

         	move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $image); 
            $msg= "Update successfully.";
            $bg ="bg-success";
            // TimeReconect("$_SERVER[REQUEST_URI]",'1');

        } else{
            $msg= "SORRY! please Try Again.";
            $bg ="bg-danger";
        }
	}
?>

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
                                        <h4>Update Team Member</h4>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                               
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="team.php">Team</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Update Team</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
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
                               <form action="#" method="post" enctype="multipart/form-data">
                                <div class="row m-b-20">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <?php if (isset($msg)){ ?>
                                                    <div class="alert alert-success text-white <?php echo $bg; ?>" role="alart">
                                                    <strong><?php echo $msg; ?></strong>
                                                    </div>    
                                                <?php } ?>
                                                
                                                <label> Name</label>
                                                <div class="input-group input-group-button">
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $team_inf['name']; ?>" name="name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Designation </label>
                                                  <div class="input-group input-group-button">
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $team_inf['designation']; ?>" name="designation">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Image Upload</label>
                                                <div class="input-group input-group-button">
                                                     <input type="file" name="image" accept="image/*" onchange="loadFile(event)" style="opacity: 0;position: absolute; width:150px; height:180px;">
                                                        <img id="output" class="border w-25 h-25" src="uploads/<?php echo $team_inf['image']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                               <button type="submit" name="update" class="btn btn-success w-100"> Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               </form>
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


<?php }?>

<!-- footer -->
<?php include('inc/footer.php'); ?>

<script>
     var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
