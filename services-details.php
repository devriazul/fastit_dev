<?php 
    include("inc/header.php"); 

    if (isset($_GET['sid'])) {
        $service = mysqli_query($conn, "SELECT * FROM service WHERE sid='{$_GET['sid']}'");
        $service_inf = mysqli_fetch_array($service);

?>
        
        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2><?php echo $service_inf['title']; ?> </h2>

                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Services Details Area -->
        <div class="services-details-area ptb-100">
            <div class="container">
                <div class="services-details-desc">
                    <div class="article-services-image">
                        <img src="admingigaenterprise/uploads/<?php echo $service_inf['image']; ?>" alt="image">
                    </div>
                    <div class="article-services-content">
                        <h3><?php echo $service_inf['title']; ?></h3>
                        <p><?php echo $service_inf['description']; ?></p>
                        
                        <p><?php echo $service_inf['otherdescription']; ?></p>

                       
                       
                    </div>
                  
                </div>
            </div>

            <div class="services-details-shape">
                <img src="assets/images/services-details/line-shape.png" alt="image">
            </div>
        </div>
        <!-- End Services Details Area -->
<?php }?>
        

<?php include("inc/footer.php"); ?>