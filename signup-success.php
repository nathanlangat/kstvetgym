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
			color: #000;
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
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body" style="font-size: 24px;">
					Welcome! You have succesfully registered. Proceed to login.
				</div>
				<div class="modal-footer">
					<a href="login.php" class="btn btn-success">CONTINUE</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="resources/javascript/myjquery.js"></script>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		$("#exampleModalCenter").modal("show");
		
	</script>
	<!--End of Tawk.to Script-->
</body>