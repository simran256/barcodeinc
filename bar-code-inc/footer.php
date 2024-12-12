<?php

include("conn.php");

$sql = "SELECT * FROM `users` WHERE `status` = '1'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$phone = $row['mobile'];
$whatsapp = $row['whatsapp_number'];
$email = $row['email'];
$email2 = $row['enquiry_email'];
$address = $row['address'];
$fb = $row['facebook_link'];
$link = $row['linkedin_link'];
$tw = $row['twittter_link'];
$insta = $row['instagram_link'];

?>
 <!-- Main Footer -->
  <footer class="main-footer footer-style-one">
    <div class="bg bg-image" style="background-image: url(images/background/bg-footer1.png);"></div>
    <!-- Footer Uppper -->
    <div class="footer-upper">
      <div class="auto-container">
        <div class="row">
          <!-- Contact info Block -->
          <div class="contact-info-block-two col-lg-4 col-md-6">
            <div class="inner">
              <i class="icon fa fa-phone-square"></i>
              <span class="sub-title">Call Anytime</span>
              <div class="text"><a href="tel:<?=$phone?>">+91-<?=$phone?></a></div>
            </div>
          </div>
          <!-- Contact info Block -->
          <div class="contact-info-block-two col-lg-4 col-md-6">
            <div class="inner">
              <i class="icon fa fa-envelope"></i>
              <span class="sub-title">Send Email</span>
              <div class="text"><a href=" <?=$email?>"> <?=$email?></a></div>
            </div>
          </div>
          <!-- Contact info Block -->
          <div class="contact-info-block-two col-lg-4 col-md-6">
            <div class="inner">
              <i class="icon fas fa-map-marker-alt"></i>
              <span class="sub-title">Addres</span>
             <div class="text"><?=$address?></div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Widgets Section -->
    <div class="widgets-section">
      <div class="auto-container">
        <div class="row"> 
          <!-- Footer COlumn -->
          <div class="footer-column col-xl-4 col-lg-6 col-sm-6">
            <div class="footer-widget about-widget">
              <div class="widget-content">
                <div class="logo"><a href="<?=$site?>index.php"> <img src="<?=$site?>images/logo.jpg" alt="Logo"></a></div>
                <div class="text">BAR CODE INC could be a company specializing in barcode solutions, such as barcode printers, scanners, and software for inventory management, retail, and logistics.</div>
                <ul class="social-icon-two light">
                  <li><a href="<?=$tw?>"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="<?=$fb?>"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="<?=$insta?>"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Footer COlumn -->
          <div class="footer-column col-xl-4 col-lg-6 col-sm-6">
            <div class="footer-widget links-widget">
              <h4 class="widget-title">Useful Links</h4>
              <div class="widget-content">
                <ul class="user-links two-column">
                    <li><a href="<?=$site?>about-us.php">about us</a></li>
                    <li><a href="<?=$site?>contact-us.php">contact us</a></li>
                    <li><a href="<?=$site?>gallery.php">gallery</a></li>
                    <?php
                    $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1' LIMIT 7";
                         $res = mysqli_query($conn, $sql);
                         while ($row = mysqli_fetch_assoc($res)) {
                             $category_name = $row['ct_pd_name'];
                             $category_id = $row['id'];
                             $category_url = $row['ct_pd_url'];
                      
                    ?>
                        <li><a href="<?=$site?>products.php?category=<?=$category_url?>"><?php echo $category_name; ?></a></li>
                     
                      <?php
                         }
                      ?>
                      
                </ul>
              </div>
            </div>
          </div>
          <!-- Footer COlumn -->
          <div class="footer-column col-xl-4 col-lg-6 col-sm-6">
            <div class="footer-widget newsletter-widget">
              <h4 class="widget-title">Newsletter</h4>
              <div class="widget-content">
                <p class="text">Subsrcibe for our latest resources</p>
                <div class="newsletter-form">
                  <form method="post" action="#">
                    <div class="form-group">
                      <input type="email" name="email" class="email" value="" placeholder="Your email" required>
                      <button type="button" class="theme-btn"><i class="fa fa-paper-plane"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Footer Bottom -->
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="inner-container">
          <div class="copyright-text">© 2024 Copyright  Bar Code INC, All Rights Reserved! by <a href="https://www.web2techsolutions.com/" target="_blank">WEB2TECH SOLUTIONS</a></div>
        </div>
      </div>
    </div>
  </footer>
  <!--End Main Footer --> 

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="<?=$site?>js/jquery.js"></script> 
<script src="<?=$site?>js/popper.min.js"></script>
<script src="<?=$site?>js/bootstrap.min.js"></script>
<script src="<?=$site?>js/jquery.fancybox.js"></script>
<script src="<?=$site?>js/wow.js"></script>
<script src="<?=$site?>js/gsap.min.js"></script>
<script src="<?=$site?>js/ScrollTrigger.min.js"></script>
<script src="<?=$site?>js/splitType.js"></script>
<script src="<?=$site?>js/appear.js"></script>
<script src="<?=$site?>js/owl.js"></script>
<script src="<?=$site?>js/script.js"></script>
<script src="<?=$site?>js/jquery.validate.min.js"></script>
<script src="<?=$site?>js/jquery.form.min.js"></script>
