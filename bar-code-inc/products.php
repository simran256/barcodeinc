<?php
include("conn.php");
// Get category slug from URL if set

	$category_slug = isset($_GET['category']) ? $_GET['category'] : '';

// Fetch the specific main category based on slug
$main_cat_sql = "SELECT * FROM `cat_prod` WHERE ct_pd_url = '$category_slug' AND sub_category_id = '0' AND status = '1'";
$main_cat_res = mysqli_query($conn, $main_cat_sql);
$main_category = mysqli_fetch_assoc($main_cat_res);



?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Bar Code Inc</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
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
				<h1 class="title">Products</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=$site?>index.php">Home</a></li>
					<li><?=$main_category['ct_pd_name']?></li>
				</ul>
			</div>
		</div>
	</section>


	   
  <!-- Features Section -->
  <section class="Product_contant pt-5 pb-5">
    <div class="auto-container">
     
      <div class="row"> 
      <?php
      $id=$main_category['id'];
			    // Fetch subcategories (second level) of the specific main category
			    $sub_cat_sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '$id' AND status = '1'";
			    $sub_cat_res = mysqli_query($conn, $sub_cat_sql);
			    while ($sub_cat_row = mysqli_fetch_assoc($sub_cat_res)) {
			        $sub_cat_name = $sub_cat_row['ct_pd_name'];
			        $sub_category_id1 = $sub_cat_row['id'];
			        $sub_cat_url = $sub_cat_row['ct_pd_url'];
			        $sub_cat_desc = $sub_cat_row['long_description'];
			        $product_images = explode(",", $sub_cat_row['cat_pd_image']); // Split image filenames
			    ?>
      
        <div class="feature-block-two col-xl-4 col-sm-6 wow fadeInUp">
          <div class="inner-box">
            <a href="<?=$site?>product-details/<?=$sub_cat_url?>">
            <div class="image-box">
              <figure class="image"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>" ></figure>
            </div>
            <div class="caption-box">
              <h4 class="title"><span><a href="<?=$site?>product-details/<?=$sub_cat_url?>"><?= $sub_cat_name?></a></span></h4>
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
  
  
    </div>
    <?php include('footer.php')?>
</body>
</html>