<?php include("conn.php");


	$category_slug = isset($_GET['category']) ? $_GET['category'] : '';

// Fetch the specific main category based on slug
$main_cat_sql = "SELECT * FROM `cat_prod` WHERE ct_pd_url = '$category_slug' AND sub_category_id = '0' AND status = '1'";
$main_cat_res = mysqli_query($conn, $main_cat_sql);
$main_category = mysqli_fetch_assoc($main_cat_res);

// If the main category exists
if ($main_category) {
    $category_name = $main_category['ct_pd_name'];
    $category_id = $main_category['id'];
    $category_url = $main_category['ct_pd_url'];
} 


?>
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

  <!-- Banner Section -->
  <section class="banner-section-two">
    <div class="banner-carousel owl-carousel owl-theme"> 
      <!-- Slide Item -->
      <div class="slide-item">
        <div class="bg-image" style="background-image: url(images/banner/banner1-1.jpg);"></div>
        <div class="shape-lines-1"></div>
        <div class="shape-lines-2"></div>
        <div class="auto-container">
          <div class="content-box">
            <h1 class="title animate-2">Barcode <br>Labels</h1>
            <div class="btn-box animate-3">
              <a href="about-us.php" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
            </div>
          </div>
        </div>
      </div>
         <div class="slide-item">
        <div class="bg-image" style="background-image: url(images/banner/banner2-1.jpg);"></div>
        <div class="shape-lines-1"></div>
        <div class="shape-lines-2"></div>
        <div class="auto-container">
          <div class="content-box">
            <h1 class="title animate-2">Product <br>Labels</h1>
            <div class="btn-box animate-3">
              <a href="about-us.php" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
            </div>
          </div>
        </div>
      </div>
         <div class="slide-item">
        <div class="bg-image" style="background-image: url(images/banner/banner3-1.jpg);"></div>
        <div class="shape-lines-1"></div>
        <div class="shape-lines-2"></div>
        <div class="auto-container">
          <div class="content-box">
            <h1 class="title animate-2">stickers <br>Labels</h1>
            <div class="btn-box animate-3">
              <a href="about-us.php" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Section -->
 
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
            <div class="row">
              <div class="col-sm-6">
                <a href="about-us.php" class="theme-btn btn-style-one mt-0"><span class="btn-title">Explore Now</span></a>
              </div>
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
  <section class="features-section-two">
    <div class="auto-container">
      <div class="sec-title light"> 
        <div class="row align-items-lg-center">
          <div class="col-lg-6">
            <span class="sub-title style-two">OUR PRODUCTS</span>
            <h2 class="scrub-each-word text-split">Explore what products we’re offering</h2>
          </div>
          <div class="col-lg-6">
            <div class="text">we’re offering There are many variations of passages of available but majority alteration in some form</div>
          </div>
        </div>
      </div>
      <div class="row"> 
      <?php
			            $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1' limit 6";
                        $res = mysqli_query($conn, $sql);
                        while($row= mysqli_fetch_assoc($res)){
                            $pro_name=$row['ct_pd_name'];
                            $pro_desc=$row['long_description'];
                               $product_images = explode(",", $row['cat_pd_image']); // Split multiple images into an array
 $productURL = htmlspecialchars($row['ct_pd_url']);
            // Ensure there's at least one image, if not, set a placeholder
            $product_image = isset($product_images[0]) && !empty($product_images[0]) ? $product_images[0] : 'placeholder.jpg';
                       
                        
			    ?>
      
        <div class="feature-block-two col-xl-4 col-sm-6 wow fadeInUp">
          <div class="inner-box">
            <a href="barcode-labels.php">
            <div class="image-box">
              <figure class="image"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_image?>" alt=""/></figure>
            </div>
            <div class="caption-box">
              <h4 class="title"><span><a href="<?= $site ?>product-details/<?= $productURL?>"><?=$pro_name?></a></span></h4>
            </div>
            </a>
          </div>
        </div>
        <?php
			    }
			    ?>
      </div>
    </div>
  </section>
  <!-- End Features Section -->
  

  <!-- Process Section -->
  <section class="process-section">
    <div class="bg bg-pattern-2"></div>
    <div class="small-container">
      <div class="sec-title text-center"> <span class="sub-title style-three">Our Working Process</span>
        <h2 class="scrub-each-word text-split">Get your it solutions in 3 easy steps</h2>
      </div>
      <div class="row"> 
        <!-- Process Block -->
        <div class="process-block col-lg-4 col-md-6 wow fadeInUp">
          <div class="inner-box">
            <div class="count">01</div>
            <div class="content">
              <h5 class="title">Assessment & <br>Planning</h5>
            </div>
          </div>
        </div>
        <!-- Process Block -->
        <div class="process-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
          <div class="inner-box">
            <div class="count">02</div>
            <div class="content">
              <h5 class="title">Implementation & <br>Deployment</h5>
            </div>
          </div>
        </div>
        <!-- Process Block -->
        <div class="process-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
          <div class="inner-box">
            <div class="count">03</div>
            <div class="content">
              <h5 class="title">Deliverd  <br>Products</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Process Section -->
  
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

 <!-- Why Choose Us Three -->
  <section class="why-choose-us-three pb-lg-0">
    <div class="bg bg-pattern-1"></div>
    <div class="auto-container">
      <div class="row">
        <!-- Content Column -->
        <div class="content-column col-lg-6">
          <div class="inner-column wow fadeInRight">
            <div class="sec-title light">
              <span class="sub-title">Why Choose Us</span>
             <p class="text-light"> BAR CODE INC. stands out as a trusted partner in delivering comprehensive and innovative barcode and labeling solutions. Here’s why choosing BAR CODE INC. is the right decision:</p>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-five">
              <div class="inner-box">
                <i class="icon flaticon-agency-digital-services"></i>
                <h5 class="title">Expertise and Experience</h5>
                <p class="text">Specializes in providing advanced barcode systems and labeling technology.</p>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-five border-bottom-0">
              <div class="inner-box">
                <i class="icon flaticon-agency-technology"></i>
                <h5 class="title">Quality Products</h5>
                <p class="text">Offers top-of-the-line barcode scanners, printers, and software solutions.</p>
              </div>
            </div>
               <div class="feature-block-five pb-30">
              <div class="inner-box">
              <i class="icon flaticon-agency-digital-services"></i>
                <h5 class="title">End-to-End Solutions</h5>
                <p class="text">Covers everything from system setup, maintenance, and upgrades to integration with existing operations.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- form Column -->
        <div class="form-column col-lg-6">
          <div class="inner-column">
            
            <div class="contact-form wow fadeInLeft">
              <!--Contact Form-->
              <form method="post" action="<?=$site?>contact-us.php" id="">
                <h3 class="text-center">Get in Touch</h3>
                <div class="row">
                  <div class="col-lg-12 form-group">
                    <input class="form-control" type="text" name="name" placeholder="Your Name" required />
                  </div>
                  <div class="col-lg-12 form-group">
                    <input class="form-control" type="email" name="email" placeholder="Your Email" required />
                  </div>
                  <div class="col-lg-6 form-group">
                    <input class="form-control" type="text" name="phone" placeholder="Phone No" required />
                  </div>
                  <div class="col-lg-6 form-group">
                    <input class="form-control" type="text" name="subject" placeholder="Subject" required />
                  </div>
                  <div class="col-lg-12 form-group">
                    <textarea name="message" class="form-control required" rows="4" placeholder="Enter Message"></textarea>
                  </div>
                  <div class="col-sm-12 form-group">
                    <button class="theme-btn btn-style-one" type="submit" name="submit"><span class="btn-title">Send a Message</span></button>
                  </div>
                </div>
              </form>
            </div>
            <!--End Contact Form -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Why Choose Us -->

  <!-- Testimonials Section -->
  <section class="testimonial-section">
    <div class="auto-container">
      <div class="row"> 
        <div class="content-column col-lg-5">
          <div class="inner-column">
            <div class="sec-title pe-xl-5">
              <span class="sub-title">OUR CLIENTS</span>
              <h2 class="scrub-each-word text-split">Our Trusted Customers</h2>
            </div>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <div class="text">Trust score 4.5 (Based on 1,500 reviews)</div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="outer-box">
            <div class="testimonial-carousel-two owl-carousel owl-theme">
                
                  <?php
					    $sql = "SELECT * FROM `daysdata` WHERE `status`='1'";
					    $res = mysqli_query($conn,$sql);
					    while($row = mysqli_fetch_assoc($res)){
					        $image  = explode(",", $row['image']);
					        $name =$row['name'];
					        $desc = $row['description'];
					        $post = $row['designation'];
					        $date = $row['date'];
					        $date2 = date($date);
					    ?>
              <!-- Testimonial Block -->
              <div class="testimonial-block">
                <div class="inner-box">
                  <div class="text">"<?=$desc?>"</div>
                </div>
                <div class="author-box"> <img src="images/user (1).png" alt="Image">
                  <div class="author-info">
                  
                    <h4 class="name"><?=$name?></h4>
                    <span class="designation"><?=$post?></span>
                  </div>
                </div>
              </div>
              <!-- Testimonial Block -->
              <?php
					    }
					    ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonials Section -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php include("footer.php")?>
    </div>
</body>

</html>