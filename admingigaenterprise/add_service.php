<!-- header -->
<?php 
    include('inc/header.php'); 


//insert slider 
if (isset($_POST['submit'])) {
      $title               =$_POST['title'];
      $description         =$_POST['description'];
      $otherdescription    =$_POST['otherdescription'];
      $image               =$_FILES["image"]["name"];

      //image
      $target_dir  = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      
          
    // insert query
         $sql=" INSERT INTO service (
                 title, 
                 description,
                 otherdescription, 
                 image) 
                 VALUES(
                 '$title',
                 '$description',
                 '$otherdescription',
                 '$image')";

         if(mysqli_query($conn, $sql)){
           $msg = "Service Added Successfully !";
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
                                        <h4>Add Service</h4>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                               
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Service</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">service</a>
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
                                                
                                                <label>Service Name</label>
                                                <div class="input-group input-group-button">
                                                    <input type="text" class="form-control"
                                                        placeholder="Service Name" name="title">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Description </label>
                                                  <div class="input-group input-group-button">
                                                       <textarea  name="description" id="editor" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>



										<div class="row">
                                            <div class="col-sm-12">
                                                <label>Other Description </label>
                                                  <div class="input-group input-group-button">
                                                    <textarea  name="otherdescription" id="editor1" class="form-control"></textarea>
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


        ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>