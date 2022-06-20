<?php 
    include("inc/header.php"); 

    if (isset($_GET['sid'])) {
        $course = mysqli_query($conn, "SELECT * FROM product WHERE sid='{$_GET['sid']}'");
        $course_inf = mysqli_fetch_array($course);

?>
        
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
        
        <!-- Start course Details Area -->
        <div class="services-details-area ptb-100">
            <div class="container">
                <div class="services-details-desc">
                    <div class="article-services-image">
                        <img src="assets/images/products/<?php echo $course_inf['image']; ?>" alt="image">
                    </div>
                    <div class="article-services-content">
                        <h3><?php echo $course_inf['name']; ?></h3>
                        <p><?php echo $course_inf['description']; ?></p>
                        
                        <p><?php echo $course_inf['url']; ?></p>

                       
                       
                    </div>
                  
                </div>
            </div>

            <div class="services-details-shape">
                <!-- <img src="assets/images/courses/courses-1.jpg" alt="image"> -->
            </div>
        </div>
        <!-- End Services Details Area -->
<?php }?>
        

<?php include("inc/footer.php"); ?>