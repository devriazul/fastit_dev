<?php include("inc/header.php"); ?>
        
        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>Team</h2>

                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Team Area -->
        <div class="team-area pt-100 pb-75">
            <div class="container">
                <div class="section-title section-style-two">
                    <span>TEAM MEMBER</span>
                    <h2>Our Expert IT Consultants <span class="overlay"></span></h2>
                  <!--   <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p> -->
                </div>

                <div class="row justify-content-center">


            <?php 
                $Select = "SELECT * FROM team ORDER BY sid ASC";
                $query = mysqli_query($conn,$Select); 
                $i=1;
                foreach ($query as $rows) {?>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-team-card">
                            <div class="team-image" data-tilt>
                                <img src="admingigaenterprise/uploads/<?php echo $rows['image']; ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <div class="team-content">
                                <h3> <?php echo $rows['name']; ?></h3>
                                <span><?php echo $rows['designation']; ?></span>
                            </div>
                            </div>
                        </div>
                    </div>

                <?php } ?> 
                 


                </div>
            </div>

            <div class="team-shape">
                <img src="assets/images/team/line-shape.png" alt="image">
            </div>
        </div>
        <!-- End Team Area -->

        
        <!-- End Overview Area -->
        
        <!-- End Footer Area -->
     <?php include("inc/footer.php"); ?>
