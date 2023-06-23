
<?php 

		include('HEADER_1/header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="slide/style.css">
	<link rel="stylesheet" type="text/css" href="HEADER_1/style.css">
	<link rel="stylesheet" type="text/css" href="FOOTER_1/style.css">
	<title></title>
</head>
<body>

<section class="slider-wrapper">
	<div class="slider-track">
		 
			<div class="slidee">
				<img src="imagess/images-1.jpg" alt="1">
			</div>

			<div class="slidee">
				<img src="imagess/images-2.jpg" alt="8">
			</div>

			<div class="slidee">
				<img src="imagess/images-3.jpg" alt="1">
			</div>

			<div class="slidee">
				<img src="imagess/images-4.jpg" alt="2">
			</div>

			<div class="slidee">
				<img src="imagess/images-5.jpg" alt="3">
			</div>

			<div class="slidee">
				<img src="imagess/images-6.jpg" alt="4">
			</div>

			<div class="slidee">
				<img src="imagess/images-7.jpg" alt="5">
			</div>

			<div class="slide">
				<img src="imagess/images-8.jpg" alt="6">
			</div>

			<div class="slidee">
				<img src="imagess/images-9.jpg" alt="7">
			</div>
			
	</div>
	
</section>


 
<h2>E-SOCIAL en images</h2>
<div class="trait"></div>

<!-- slides images avec js -->

 <div class="slider-container">

    <div class="slides fade">
        <div class="slider-numbers">1/4</div>
        <div class="slider-image"><img src="images/notre_image_1.jpg" alt="background_1"></div>
        <div class="slider-caption">Don d'alimentaire</div>
    </div> <!-- slider -->

    <div class="slides fade">
        <div class="slider-numbers">2/4</div>
        <div class="slider-image"><img src="images/notre_image_2.jpg" alt="background_2"></div>
        <div class="slider-caption">Don de matériel</div>
    </div> <!-- slider -->

    <div class="slides fade">
        <div class="slider-numbers">3/4</div>
        <div class="slider-image"><img src="images/notre_image_3.jpg" alt="background_3"></div>
        <div class="slider-caption">Chaussure</div>
    </div> <!-- slider -->

    <div class="slides fade">
        <div class="slider-numbers">4/4</div>
        <div class="slider-image"><img src="images/notre_image_4.jpg" alt="background_4"></div>
        <div class="slider-caption">Vêtements</div>
    </div> <!-- slider -->

    <!-- Slider Next and Previous buttons -->
    <a class="prev" onclick="plusIndex(-1)">❮</a>
    <a class="next" onclick="plusIndex(+1)">❯</a>

    <!-- Slider Selection Bullets -->
   <!--  <div class="slider-bullets" id="slider-bullets">
        <span class="dots" onclick="currentSlide(1)"></span>
        <span class="dots" onclick="currentSlide(2)"></span>
        <span class="dots" onclick="currentSlide(3)"></span>
        <span class="dots" onclick="currentSlide(4)"></span>
    </div> <! Slider Bullets --> 

</div>

<script src="slide/script.js"></script>



</body>                                                                                                                                                                                                                                                                                                                                                                                                               

                                                             


<?php 

		include('FOOTER_1/footer.php');

?>


</html>