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
				<h1 class="title">Contact Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?=$site?>index.php">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Send us email</span>
						<h2>Feel free to write</h2>
					</div>
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="name" class="form-control" type="text" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input  class="form-control required" type="text" placeholder="Enter Subject" name="subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="phone" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-5">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..." name="submit"><span class="btn-title">Send message</span></button>
							
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Need any help?</span>
							<h2>Get in touch with us</h2>
						
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6>Have any question?</h6>
									<a href="tel:+91-9810783220"><span>Free</span> +91-9810783220</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6>Write email</h6>
									<a href="mailto:nitesh112003@rediffmail.com"> nitesh112003@rediffmail.com</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6>Visit anytime</h6>
									<span>Plot no 382 UDYOG KENDRA II ECOTECH III GREATER Noida near police line surajpur Uttar Pradesh India201306</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638520.6089486713!2d75.8465871534619!3d27.054083530034333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39994e9f7b4a09d3%3A0xf6a5476d3617249d!2sUttar%20Pradesh!5e0!3m2!1sen!2sin!4v1733383449821!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <?php include('footer.php')?>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert into the database
    $sql = "INSERT INTO tbl_contact(name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $res = mysqli_query($conn, $sql);
    
      if ($email === false) {
           echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Invalid email address",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
 
        exit;
    }
    
      ob_start(); 
    include 'emailTemplate.php'; 
     $message2 = ob_get_clean(); 
     
       $to = "developer.web2techsolutions@gmail.com";
    $subject = $subject;
    // $body = "<html><body>";
    // $body .= "<h2>Enquiry From: " . $name . "</h2>";
    // $body .= "<p><strong>Name:</strong> " . $name . "</p>";
    // $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    // $body .= "<p><strong>Number:</strong> " . $phone . "</p>";
    // $body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
    // $body .= "<p><strong>Message:</strong> " . $message . "</p>";
    $body .= $message2; // This will append the content of emailTemplate.php
    $body .= "</body></html>";
    
    
    
     $headers = "From: no-reply@barcodeinc.com\r\n" .
                       "Reply-To: no-reply@barcodeinc.com\r\n" .
                       "MIME-Version: 1.0\r\n" .
                       "Content-Type: text/html; charset=UTF-8\r\n";
                       
                         if (mail($to, $subject, $body, $headers)) {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Data Sent Successfully",
                      
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location.href = "index.php";
                    });
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Email Error!",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
            }
}
?>

