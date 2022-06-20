    <?php include("inc/header.php"); ?>

        
        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>Products </h2>

                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Services Area -->
        <div class="services-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Products</span>
                    <h2>We Provide the Best Quality <b>Products</b> <span class="overlay"></span></h2>
                </div>

                <div class="row justify-content-center">

             <?php 
                $Select = "SELECT * FROM product ORDER BY sid ASC";
                $query = mysqli_query($conn,$Select); 
                $i=1;
                foreach ($query as $rows) {?>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-image">
                                <a href="products_details.php?sid=<?php echo $rows['sid']; ?>"><img src="assets/images/products/<?php echo $rows['image']; ?>" alt="image"></a>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="products_details.php?sid=<?php echo $rows['sid']; ?>"><?php echo $rows['name']; ?></a>
                                </h3>
                                <p><?php echo $rows['description']; ?></p>
                            </div>
                        </div>
                    </div>

                <?php }?>

                   <!--  <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>

        
        </div>
        <!-- End Services Area -->

     

<?php include("inc/footer.php"); ?>
