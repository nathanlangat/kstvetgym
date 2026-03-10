<?php
require 'classes/db.php'
?>
<!DOCTYPE html>
<html lang = "en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php require "includes/header.php";?>

<head>
	<style type="text/css">
		/* start of side bar*/
		body {
			overflow-x: hidden;
		}

		/* start of side bar*/

		#carouselExampleControls .row, #why-us-car .row{
			height: 450px;
			padding-top: 150px;
		}
		#carouselExampleControls .row{
			background-size: 100%;
		}

		#carouselExampleControls h1, #why-us-car h1{
			font-weight: bold;
			font-size: 48px;
		}

		.section-services{
			padding: 50px;
			background: #edeeef;
		}


		/* Mobile Phones and tablets */
		@media only screen and (min-width: 320px) and (max-width: 767px) {
			#carouselExampleControls .row{
				height: 500px;
				padding-top: 90px;
				background-size: 100% 500px;
			}
			#why-us-car .row{
				height: 500px;
				padding-top: 70px;
			}
			#carouselExampleControls h1{
				margin-left:20px;
				font-size: 42px;
			}
			
			.section-services .col-sm-3{
				margin-bottom: 20px;
			}
			.section-services{
				padding: 10px;
			}
			

		}

		.section-title{
			margin-bottom: 10px;
		}
		.col-sm-3, .col-sm-4{
			margin-bottom: 20px;
		}
		/* header css */
		.header-section{
			min-height: 400px;
			color: #fff;
		}
		.header-text-div{
			background-color: orange;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.header-text-div h1{
			margin-top: 100px;
		}
		.header-text-div h3{
			margin-top: 50px;
		}

		.header-image-div{
			padding-right: 0px;
		}
		@media only screen and (max-width: 768px){
			.header-image-div{
				margin-top: 20px;
				padding: 0px;
			}	
		}

		/*patners section css */
		.patners-section{
			min-height: 150px;
			margin-top: 20px;
		}
		@media only screen and (max-width: 768px){
			.image-holder{
				margin-top: 20px;
				padding: 0px;
				text-align: center;
			}	
		}

		/*benefits section */
		.benefits-section{
			margin-top:20px;
			background-color: orange;
			min-height: 150px;
			padding-top: 20px;
			color: #fff;
		}
		.card{
			color: #000;
			height: 100%
		}
		@media only screen and (max-width: 768px){
			.content-panel{
				margin-bottom: 20px;
				padding: 30px;
			}	
		}

		/*services section */
		.services-section{
			margin-top:20px;
			background-color: #ff5e14;
			min-height: 150px;
			padding-top: 30px;
			padding-bottom: 30px;
			color: #fff;
		}
		.content-panel{
			padding:10px;
			background-color: white;
			color:#000;
			
			min-height: 200px;
			height: 100%;
			
		}
		.content-panel:hover{
			box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.5);
			
		}

		.testimony-section{
			margin-top:20px;
			background-color: #006699;
			min-height: 150px;
			padding-top: 30px;
			padding-bottom: 30px;
			color: #000;
		}
		.footer{
			background: #000;
			color: #fff;
		}
		.footer h1{
			font-size: 20px;
			margin: 25px 0px;
		}
		.footer p{
			font-size: 15px;
		}
		.copyright{
			font-size: 20px;
			margin-bottom: -80px;
			padding-bottom: 20px; 
		}
		.footer hr {
			margin-top: 10px;
			background-color: #ccc;	
		}
		.footer .row .fa{
			padding-right: 20px;
			font-size: 15px;
		}

		/*for jquery*/
		.fadein {
			opacity:0.2;
		}
		.slideinleft {
			margin-left:-300px;
			max-width:100%;
		}
		.slideintop {
			margin-top:200px;
			max-width:100%;
		}

		.patners-section .col-sm-2{
			border: 1px solid #edeeef;
			
			text-align: center;
		}
		.image-holder{
			border: 1px solid #edeeef;
			text-align: center;
			padding: 30px;
		}
	</style>
</head>
<body>
	<?php require "includes/deftopnav.php";?>
	<section class="header-section">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row" style="background-image: url('resources/images/caro1.jpg'); background-repeat: no-repeat;background-size:  100% 600px;">
						<div class="col-sm-6 offset-sm-1" >
							<div style="background-color: blue;padding: 10px;">
								<h1>Kenyan Leading Home Workout Management System</h1>
							</div>
							
							<a href="#serviceSection" class="btn" style="background: #ff5e14;padding: 10px;border-radius: none;width: 160px;color: #fff;font-weight: bold;margin-top: 15px; margin-left: 5px;">Join Now</a>

						</div>
						
					</div>
					
				</div>
				<div class="carousel-item">
					<div class="row" style="background-image: url('resources/images/sl2.jpg'); background-repeat: no-repeat;">
						<div class="col-sm-6 offset-sm-1" >
							<div style="background-color: blue;padding: 10px;">
								<h1>The Leading Home Workout Management System</h1>
							</div>
							
							<a href="#serviceSection" class="btn" style="background: #ff5e14;padding: 10px;border-radius: none;width: 160px;color: #fff;font-weight: bold;margin-top: 15px; margin-left: 5px;">Join Now</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row" style="background-image: url('resources/images/caro3w.jpg'); background-repeat: no-repeat;">
						<div class="col-sm-6 offset-sm-1" >
							<div style="background-color: blue;padding: 10px;">
								<h1>Global Leading Home Fitness Excercise System</h1>
							</div>
							<a href="index.php#serviceSection" class="btn" style="background: #ff5e14;padding: 10px;border-radius: none;width: 160px;color: #fff;font-weight: bold;margin-top: 15px; margin-left: 5px;">Join Now</a>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<section class="featured-books" style="margin-top: 20px;" id="serviceSection">
		<div class="container">
			<h2>Select Package</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php 
				$conn = Db::get()->conn;
				$sql = "SELECT * FROM `packages` WHERE `status` = 1 ORDER BY `id` DESC LIMIT 0 , 8";
				$stmt = $conn->prepare($sql);
				$stmt->execute();
				$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
				?>
				<?php foreach ($rows as $row) {?>
					<div class="col-sm-3">
						<div class="content-panel">
							<div style="text-align: center;">
								<p style="font-size: 14px;font-weight: bold;" id="name_<?php echo $row->id; ?>"><?php echo $row->name; ?></p>
							</div>
							<div class="row justify-content-center">
								<a href="signup.php?package=<?php echo $row->id; ?>">
									<img src="resources/images/packages/<?php echo $row->picture; ?>" height="180" width="180" id="picture_<?php echo $row->id; ?>">
								</a>
							</div>
							<div class="highlight-details" style="margin-top:10px;">
								<div class="row">
									<div class="col-sm-12" style="">
										<div style="text-align:center;">
											<p style="margin-bottom: 3px;font-weight: bold;">KES <strong id="price_<?php echo $row->id; ?>"><?php echo $row->price; ?></strong></p>
										</div>	
									</div>
									
								</div>
								<div style="text-align:center;">
									<p style="font-size: 12px;font-style: italic;margin-bottom: 0px;margin-top: 0px;" onload="" id="cart_count_<?php echo $row->id; ?>" name="cart_count_<?php echo $row->id; ?>">
										<?php echo $row->description?>
									</p>
								</div>
								<div style="text-align:center;margin-top: 10px;">
									<a href="signup.php?package=<?php echo $row->id?>" class="btn btn-primary" style="font-weight: bold;">Select</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>	
			</div>
			
		</div>
	</section>

	<?php //require "includes/deffooter.php";?>

	<script type="text/javascript" src="resources/javascript/myjquery.js"></script>
</body>