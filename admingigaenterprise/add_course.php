<!-- header -->
<?php 
    include('inc/header.php'); 


//insert slider 
if (isset($_POST['submit'])) {
      $c_name               =$_POST['c_name'];
      $trainer              =$_POST['trainer'];
      $duration             =$_POST['duration'];
      $lesson               =$_POST['lesson'];
      $c_price              =$_POST['c_price'];
      $c_oprice            =$_POST['c_oprice'];
      $description          =$_POST['description'];
      $image                =$_FILES["image"]["name"];

      //image
      $target_dir  = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      
          
    // insert query
         $sql=" INSERT INTO course (
                 c_name, 
                 trainer,
                 duration,
                 lesson,
                 c_price,
                 c_oprice,
                 description, 
                 image) 
                 VALUES(
                 '$c_name',
                 '$trainer',
                 '$duration',
                 '$lesson',
                 '$c_price',
                 '$c_oprice',
                 '$description',
                 '$image')";

         if(mysqli_query($conn, $sql)){
           $msg = "Course Added Successfully !";
           $bg = "alert alert-success";

         }else{
           echo "error";
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
                                        <h4>Add Course</h4>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                               
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Course</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Course</a>
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
                                                    <div class="alert alert-success <?php echo $bg; ?>" role="alart">
                                                    <strong><?php echo $msg; ?></strong>
                                                    </div>    
                                                <?php } ?>
                                                
                                                <label>Course Name</label>
                                                <div class="input-group input-group-button">
                                                    <input type="text" class="form-control"
                                                        placeholder="Course Name" name="c_name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Trainer </label>
                                                  <div class="input-group input-group-button">
                                                    <select class="form-control" name="trainer">
                                                    	<option>Select Trainer</option>

	                                            	 <?php 
	                                                    $Select = "SELECT * FROM trainer ORDER BY sid DESC";
	                                                    $query = mysqli_query($conn,$Select); 
	                                                    $i=1;
	                                                    foreach ($query as $rows) {?> 

                                                    	<option value="<?php echo $rows['sid']; ?>"><?php echo $rows['name']; ?></option>

                                                     <?php $i++; } ?> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Duration </label>
                                                  <div class="input-group input-group-button">
                                                     <input type="text" class="form-control"
                                                        placeholder="Duration" name="duration">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Lessons </label>
                                                  <div class="input-group input-group-button">
                                                     <input type="text" class="form-control"
                                                        placeholder="Lessons" name="lesson">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Price </label>
                                                  <div class="input-group input-group-button">
                                                     <input type="text" class="form-control"
                                                        placeholder="Price" name="c_price">
                                                </div>
                                            </div>
                                        </div>


                                         <div class="row">
                                            <div class="col-sm-12">
                                                <label>Old Price </label>
                                                  <div class="input-group input-group-button">
                                                     <input type="text" class="form-control"
                                                        placeholder="Old Price" name="c_oprice">
                                                </div>
                                            </div>
                                        </div>



										<div class="row">
                                            <div class="col-sm-12">
                                                <label> Description </label>
                                                  <div class="input-group input-group-button">
                                                    <textarea  name="description" id="editor" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Image Upload</label>
                                                <div class="input-group input-group-button">
                                                     <input type="file" name="image" accept="image/*" onchange="loadFile(event)" style="opacity: 0;position: absolute; width:150px; height:180px;">
                                                        <img id="output" class="border w-25 h-25" src="../assets/images/upload-icon.png">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                               <button type="submit" name="submit" class="btn btn-success w-100"> Submit</button>
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

<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

</script>