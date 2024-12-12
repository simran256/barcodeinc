 <?php  
include("conn.php");
$url = mysqli_real_escape_string($conn, $_GET['alias']);
$query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    $subcategory_id = $header1['id']; // Get the subcategory ID
    $subcategory_name = $header1['ct_pd_name']; // Get the subcategory name
    $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames
    $price = $header1['cat_pd_price'];
    $mrp =$header1['cat_pd_mrp'];
    $long_desc = $header1['long_description'];
} 
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='home'";
$headerResult = mysqli_query($conn, $headerQuery);
?>
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
				<h1 class="title"><?= $subcategory_name  ?></h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=$site?>index.php">Home</a></li>
					<li><?= $subcategory_name  ?></li>
				</ul>
			</div>
		</div>
	</section>


	<!--Start Services Details-->
	<section class="services-details pt-5 pb-5">
		<div class="auto-container">
			<div class="row">
				<!--Start Services Details Sidebar-->
				<div class="col-xl-4 col-lg-4">
					<div class="service-sidebar">
						<!--Start Services Details Sidebar Single-->
						<div class="sidebar-widget service-sidebar-single">

							<div class="sidebar-service-list">
								<ul>
								    <?php
								    $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1' LIMIT 5";
                                    $res = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_assoc($res)){
                                        $cat_pd = $row['ct_pd_name'];
                                        $sub_cat_url = $row['ct_pd_url'];
                                        
                                    
								    ?>
									<li><a href="<?=$site?>product-details/<?=$sub_cat_url?>" class="current"><i class="fas fa-angle-right"></i><span><?=$cat_pd?></span></a></li>
									
							        <?php
							        }
							        ?>
								</ul>
							</div>

							<div class="service-details-help">
								<div class="help-shape-1"></div>
								<div class="help-shape-2"></div>
								<h2 class="help-title">Contact with <br> us for any <br> advice</h2>
								<div class="help-icon">
									<span class=" lnr-icon-phone-handset"></span>
								</div>
								<div class="help-contact">
									<p>Need help? Talk to an expert</p>
									<a href="tel:+91-9810783220">+91-9810783220</a>
								</div>
							</div>
                        </div>
							    
					</div>
				</div>

				<!--Start Services Details Content-->
				<div class="col-xl-8 col-lg-8">
					<div class="services-details__content">
					<img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=htmlspecialchars($product_images[0])?>" >
						<h3 class="mt-4"><?= $subcategory_name  ?></h3>
						<p> <?=$long_desc?></p>
                     
					</div>
				</div>
				<!--End Services Details Content-->
			</div>
		</div>
	</section>
	<!--End Services Details-->
  
    </div>
    <?php include('footer.php')?>
</body>
</html>