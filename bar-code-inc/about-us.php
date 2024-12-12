<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Bar Code Inc</title>
<link href="<?=$site?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$site?>css/style.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
<div class="page-wrapper"> 
 <?php include("header.php")?>
	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->
 <!-- About Section -->
  <section class="about-section-two ">
    <div class="auto-container">
      <div class="row"> 
        <!-- Content Column -->
        <div class="content-column col-lg-6 order-lg-2 wow fadeInRight">
          <div class="inner-column">
            <div class="sec-title"> <span class="sub-title">Get To Know</span>
                <h3 class="scrub-each-word text-split">Welcome to BAR CODE INC</h3>
            </div>
            <div class="text mb-20">BAR CODE INC could be a company specializing in barcode solutions, such as barcode printers, scanners, and software for inventory management, retail, and logistics. Let me know if you'd like a more detailed description or specific content!</div>
         <div class="text mb-20">
              With expertise in barcode printers, scanners, and label creation software, BAR CODE INC delivers innovative tools for seamless inventory management, point-of-sale systems, and supply chain tracking. Their solutions are tailored to meet the unique needs of each client, ensuring reliable and scalable systems that integrate effortlessly with existing workflows.
              </div>
           
          </div>
        </div>
        <!-- Image Column -->
        <div class="image-column col-lg-6 wow fadeInRight">
          <div class="inner-column">
            <div class="image-box">
              <figure class="image overlay-anim reveal"><img src="images/about.webp" alt=""></figure>
              <figure class="image-2 overlay-anim reveal"><img src="images/about2.jpg" alt=""></figure>
              <div class="info-box bounce-x">
                <div class="inner"> <i class="icon flaticon-business-016-social-campaign"></i>
                  <div class="content">
                    <h3 class="count">10+</h3>
                    <h5 class="text-two">Years of <br> experience</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->
      
   <!-- Features Section -->
  <section class="features-section p-0">
    <div class="auto-container">
      <div class="row"> 
        <!-- Content Column -->
        <div class="content-column col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
          <div class="inner-column">
            <div class="sec-title pe-0"> <span class="sub-title">FEATURES</span>
              <h2 class="wow fadeInUp mb-30">Key Features of BAR CODE INC.</h2>
            </div>
            <div class="row"> 
              <!-- Feature Block -->
              <div class="feature-block col-sm-6">
                <div class="inner-box"> <i class="icon flaticon-agency-graphic-design"></i>
                  <h5 class="title">Wide Range of Products</h5>
                </div>
                <div class="content">High-quality barcode scanners, printers, and consumables.</div>
              </div>
              <!-- Feature Block -->
              <div class="feature-block col-sm-6">
                <div class="inner-box"> <i class="icon flaticon-agency-technology"></i>
                  <h5 class="title">Advanced Technology</h5>
                </div>
                <div class="content">Cutting-edge barcode systems designed for efficiency and accuracy.</div>
              </div>
              <!-- Feature Block -->
              <div class="feature-block col-sm-6">
                <div class="inner-box"> <i class="icon flaticon-agency-graphic-design"></i>
                  <h5 class="title">Customizable Solutions</h5>
                </div>
                <div class="content">Tailored barcode and labeling systems to suit unique business needs.</div>
              </div>
              <!-- Feature Block -->
              <div class="feature-block col-sm-6">
                <div class="inner-box"> <i class="icon flaticon-agency-technology"></i>
                  <h5 class="title">Reliable and Durable Products</h5>
                </div>
                <div class="content">Long-lasting equipment designed for heavy-duty industrial use.</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Image Column -->
        <div class="image-column col-lg-6">
          <div class="inner-column">
            <div class="image-box">
              <figure class="image"><img src="images/fea.jpg" alt="Image"></figure>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Features Section -->

    </div>
  <?php include("footer.php")?>
</body>
</html>