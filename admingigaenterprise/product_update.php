<!-- header -->
<?php 
    include('inc/header.php'); 

    if (isset($_GET['sid'])) {
       $product = mysqli_query($conn, "SELECT * FROM product WHERE sid='{$_GET['sid']}'");
       $product_inf = mysqli_fetch_array($product);
?>

<!-- update query -->
<?php 

 if (isset($_POST['update'])) {

	$name           =  $_POST['name'];
    $url            =  $_POST['url'];
    $description    =  $_POST['description'];
  

  if ($_FILES['image']['name']=='') {
	    	$image=$product_inf ['image'];
	    }else{
			$image  =  $_FILES['image']['name'];
	    }

	     $sql=" UPDATE product 
                   SET 
                   name         ='$name',
                   url          ='$url',
                   description  ='$description',
                   image        ='$image'
                   WHERE 
                   sid='" . $_GET["sid"] . "'";


			if(mysqli_query($conn, $sql)){  

         	move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $image); 
            $msg= "Your Product was update successfully.";
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
                                        <h4>Update Product</h4>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                               
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Product</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Update Product</a>
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
                                                
                                                <label>Product Name</label>
                                                <div class="input-group input-group-button">
                                                    <input type="text" class="form-control"
                                                       value="<?php echo $product_inf['name']; ?>" name="name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>url </label>
                                                  <div class="input-group input-group-button">
                                                       <input type="text" class="form-control"
                                                       value="<?php echo $product_inf['url']; ?>" name="url">
                                                </div>
                                            </div>
                                        </div>



										<div class="row">
                                            <div class="col-sm-12">
                                                <label> Description </label>
                                                  <div class="input-group input-group-button">
                                                    <textarea  name="description" id="editor1" class="form-control"><?php echo $product_inf['description']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Image Upload</label>
                                                <div class="input-group input-group-button">
                                                     <input type="file" name="image" accept="image/*" onchange="loadFile(event)" style="opacity: 0;position: absolute; width:150px; height:180px;">
                                                        <img id="output" class="border w-25 h-25" src="uploads/<?php echo $product_inf['image']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                               <button type="submit" name="update" class="btn btn-success w-100"> Update</button>
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

<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>



        ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>