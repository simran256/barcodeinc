<?php
include("conn.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if 'alias' exists in GET parameters
$url = isset($_GET['alias']) ? $_GET['alias'] : '';

// Fetch header information only if alias is provided
if ($url) {
    $headerQuery = mysqli_query($conn, "SELECT * FROM cat_prod WHERE ct_pd_url='$url'");
    if ($headerQuery && mysqli_num_rows($headerQuery) > 0) {
        $header = mysqli_fetch_assoc($headerQuery);
        $product_url = $header['ct_pd_url'];
    } else {
        $product_url = ''; // Handle case where no product is found
    }
} else {
    $product_url = ''; // Handle missing alias parameter
}
?>
 <header class="main-header header-style-six">
    <!-- Header Top -->
    <div class="header-top">
      <div class="auto-container">
           <?php
				    $sql = "SELECT * FROM `users` WHERE `status` = '1'";
				    $res = mysqli_query($conn,$sql);
				    $row = mysqli_fetch_assoc($res);
				    $email = $row['email'];
				    $mobile = $row['mobile'];
				    $whatsapp = $row['whatsapp_number'];
				    $address = $row['address'];
				    $fb = $row['facebook_link'];
				    $tw = $row['twittter_link'];
				    $linkedin = $row['linkedin_link'];
				    $instagram = $row['instagram_link'];
				    
				    
				    ?>
        <div class="inner-container">
          <div class="top-left"> 
            <ul class="social-icon-one">
              <li><a href="<?=$tw?>"><i class="icon fab fa-twitter"></i></a></li>
              <li><a href="<?=$fb?>"><i class="icon fab fa-facebook-f"></i></a></li>
              <li><a href="<?=$linkedin?>"><i class="icon fab fa-linkedin-in"></i></a></li>
              <li><a href="<?=$instagram?>"><i class="icon fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="top-right">
            <!-- Info List -->
            <ul class="list-style-one">
              <li><i class="fas fa-map-marker-alt"></i> +91-<?=$mobile?></li>
              <li><i class="fas fa-envelope"></i> <a href="#" class=""> <?=$email?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Top -->
    
    <div class="header-lower">
      <div class="auto-container">
        <!-- Main box -->
        <div class="main-box">
          <div class="logo-box">
            <div class="logo"><a href="<?=$site?>index.php"><img src="<?=$site?>images/logo.jpg" alt="Logo" title=""></a></div>
          </div>
          
          <!--Nav Box-->
          <div class="nav-outer">
            <nav class="nav main-menu">
              <ul class="navigation">
                <li><a href="<?=$site?>index.php">Home</a>  </li>
               <li><a href="<?=$site?>about-us.php">About us</a></li>
                <li class="dropdown"><a href="#">Products</a>
                  <ul> 
                  <?php
    $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $pro_name = htmlspecialchars($row['ct_pd_name']);
        $productURL = htmlspecialchars($row['ct_pd_url']);
    ?>
                      <li><a href="<?= $site ?>product-details/<?= $productURL ?>"><?= $pro_name ?></a></li>
                      
                     <?php 
                         }
                         ?>
                  </ul>
                </li>
                <li><a href="<?=$site?>gallery.php">Gallery</a></li>
                <li><a href="<?=$site?>contact-us.php">Contact us</a></li>
              </ul>
            </nav>
          </div>
          <div class="outer-box">
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      
      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="upper-box">
          <div class="nav-logo"><a href="<?=$site?>index.php"><img src="<?=$site?>images/logo.jpg" alt="" title=""></a></div>
          <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>
        <ul class="navigation clearfix">
          <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
        <ul class="contact-list-one">
          <li> <i class="icon lnr-icon-phone-handset"></i> <span class="title">Call Now</span>
            <div class="text"><a href="tel:+91-9810783220">+91-<?=$mobile?></a></div>
          </li>
          <li> <i class="icon lnr-icon-envelope1"></i> <span class="title">Send Email</span>
            <div class="text"><a href="tel:nitesh112003@rediffmail.com"><?=$email?></a></div>
          </li>
          <li> <i class="icon lnr-icon-map-marker"></i> <span class="title">Address</span>
            <div class="text"><?=$address?>
</div>
          </li>
        </ul>
        <ul class="social-links">
          <li><a href="<?=$tw?>"><i class="fab fa-twitter"></i></a></li>
          <li><a href="<?=$fb?>"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="<?=$instagram?>"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </nav>
    </div>
    <!-- End Mobile Menu --> 
    
  
    
    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container">
        <div class="inner-container"> 
          <!--Logo-->
          <div class="logo"> <a href="<?=$site?>index.php" title=""><img src="<?=$site?>images/logo.jpg" alt="" title=""></a> </div>
          
          <!--Right Col-->
          <div class="nav-outer"> 
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-collapse show collapse clearfix">
                <ul class="navigation clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
              </div>
            </nav>
            <!-- Main Menu End--> 
            
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sticky Menu --> 
  </header>
