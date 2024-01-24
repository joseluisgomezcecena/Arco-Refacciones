<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
	/>
	<title>Arco | Venta y distribución de refacciones para aire acondicionado</title>
	<script src="https://kit.fontawesome.com/3d3d7a4eae.js" crossorigin="anonymous"></script>
	<style>
		/* Add your custom styles here */
		.parallax-container {
			overflow: hidden;
			position: relative;
			height: 60vh;
		}

		.banner{
			/*background-image: url('https://source.unsplash.com/1600x900/?nature,water');*/
			/* background-image: url("<?php echo base_url() ?>assets/images/hero/custom-01.png"); */
			background-image: url("<?php echo base_url() ?>assets/front/img/herouniq2-01.png");
			background-size: cover;
			background-position: center;
			height: 60vh;


			/*
			background-attachment: fixed;
			transform-style: preserve-3d;
			*/

		}

		#id{
			width: 100px !important;
		}

		.bottom-shadow {
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
			border-bottom: 1px #f3f0f0 solid
		}

		@media (max-width: 768px) {


			.footer-column{
				text-align: center !important;
				margin-top: 50px;
			}

			.spacing{
				margin-top: 658px;
			}

			#searchResults{
				width: 95% !important;
			}

			.img-carousel{
				display: none !important;
			}


			.banner{
				height: 75vh;
			}



		}

		@media (min-width: 768px) {
			.spacing{
				margin-top: 300px;
			}


		}



		.img-carousel{
			width: 220px !important;
		}

		.gradient-text {
			background-image: linear-gradient(45deg, #3498db 0%, #2980b9 5%, #e74c3c 20%, #c0392b 30%, #e74c3c 100%);
			-webkit-background-clip: text;
			color: transparent;
			font-size: 36px;
			font-weight: 800;
			letter-spacing: 2px;
		}

		.hover-text {
			background-image: linear-gradient(45deg, #3498db 0%, #2980b9 5%, #067de1 20%, #031993 30%, #e74c3c 100%);
			-webkit-background-clip: text;
			color: transparent;
			font-size: 36px;
			font-weight: 800;
			letter-spacing: 2px;
			transition: color 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55); /* Use a cubic bezier curve for a smoother transition */
		}

		.hover-text:hover {
			background-image: linear-gradient(45deg, #db9334 0%, #f6bc02 5%, #ff6d2e 20%, #c20225 30%, #e74c3c 100%);
		}

		.title-custom{
			font-weight: 800;
			padding-top: 20px;
		}

		.card-img-custom{
			height: 220px !important;
			object-fit: cover;
			border-top-left-radius: 25px !important;
			border-top-right-radius: 25px !important;
			overflow: hidden;
		}

		.custom-card {
			border-radius: 25px !important;
			transition: transform 0.3s ease; /* Apply a smooth transition effect on the transform property */
		}

		.custom-card:hover {
			transform: scale(1.1); /* Increase the size on hover */
		}

		footer {
			background-color: #343a40;
			color: #ffffff;
			padding: 40px 0;
			/*margin-top: 50px;*/
		}

		.footer-column {
			margin-bottom: 20px;
		}

		.footer-column h5 {
			color: #fff;
		}

		.footer-title
		{
			font-weight: 800;
			margin-bottom: 25px;
		}


		.cta {
			background-color: #007bff;
			color: #ffffff;
			padding: 50px 0;
			text-align: center;
		}

		.cta h2 {
			margin-bottom: 20px;
		}

		.cta p {
			font-size: 18px;
			margin-bottom: 30px;
		}

		.cta a {
			color: #ffffff;
			background-color: #0056b3;
			padding: 15px 30px;
			border-radius: 5px;
			font-size: 18px;
			text-decoration: none;
			transition: background-color 0.3s ease;
		}

		.cta a:hover {
			background-color: #004080;
		}

		#searchResults {
			position: absolute;
			z-index: 999; /* Ensure the results are on top of other elements */
			max-height: 250px; /* Set a maximum height for the results container */
			overflow-y: auto; /* Add a scrollbar if the results exceed the max height */
			box-sizing: border-box; /* Avoid adding border and padding to the results */
			width: 25%;
		}


		.nav-item{
			font-weight: 600 !important;
			font-size: 18px !important;
			/*add spacing between nav items*/
			margin-left: 20px;
		}

		.nav-item:hover{
			color: #3c96ec !important;

		}

		.titles{
			color: white;
			text-shadow: 2px 2px 3px #000000;
			font-size: 38px;
			font-weight: 800;
			letter-spacing: 2px;
		}


		.subtitles{
			color: white;
			text-shadow: 2px 2px 3px #000000;
			font-size: 28px;
			font-weight: 500;
			letter-spacing: 1px;
		}



	</style>
</head>
<body>
