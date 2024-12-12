<?php include("conn.php");?>
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
				<h1 class="title">Gallery</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=$site?>index.php">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="about-section-two ">
    <div class="auto-container">
      <div class="row"> 
      <?php
						
						$sql = "SELECT * FROM `gallery` WHERE `status` = '1' limit 8";
						$res = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($res)){
						    $image = $row['image'];
						    
						
						
						?>
				<div class="col-md-4">
                 <div class="gallery-image">
                     <img src="<?=$site?>admin/uploads/gallery/<?=$image?>">
                    </div>
                </div>
         
         <?php
						}
						?>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

    </div>
 <?php include('footer.php')?>
</body>
</html>