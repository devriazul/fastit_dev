<!-- header -->
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
                                        <h4>All Products</h4>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                               
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">All Products</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 p-0">
                             <a href="add_products.php" class=".btn-round btn btn-success"><i class="feather icon-plus"></i> Create Product</a>
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
                                                                <th>Product Name</th>
                                                                <th>Product Category</th>
                                                                <th>Product Image</th>
                                                                <th>Product Current Price</th>
                                                                <th>Product Previous Price</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>System Architect</td>
                                                                <td>Edinburgh</td>
                                                                <td>image</td>
                                                                <td>300</td>
                                                                <td>350</td>
                                                                <td>
                                                                  <a href="" class="btn btn-info"><i class="feather icon-edit"></i>Edit</a>
                                                                  <a href="" class="btn btn-danger"><i class="feather icon-trash"></i>Delete</a>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>1</td>
                                                                <td>System Architect</td>
                                                                <td>Bargar</td>
                                                                <td>image</td>
                                                                <td>300</td>
                                                                <td>350</td>
                                                                <td>
                                                                  <a href="" class="btn btn-info"><i class="feather icon-edit"></i>Edit</a>
                                                                  <a href="" class="btn btn-danger"><i class="feather icon-trash"></i>Delete</a>
                                                                </td>
                                                            </tr>
                                                            
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




<!-- footer -->
<?php include('inc/footer.php'); ?>


