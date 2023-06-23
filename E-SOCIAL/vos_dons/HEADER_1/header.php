<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- style css -->

	<title>HEADER_PHD</title>
</head>
<body>

	<!-- les icons et les link -->

	 <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- les icons et les link -->

	 <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Pikine-Saint-Louis-Sénégal</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+221 33 881 66 44</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>e-social@gmail.com</small>
                </div>
            </div>
            
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


		<nav>
			<label><img class="logo" src="../../imagess/E-SOCIAL.png"></label>
			<ul>
				<li><a class="active" href="../index.php">Accueil</a></li>
				<li><a href="../don.php">faire un don</a></li>
				<li><a href="../index1.php">images</a></li>
				<li><a href="../donner.php">campagne</a></li>
				<li><a href="../contact.php">contact</a></li>
				<li><a href="../connexion.php">s'inscrire</a></li>
			</ul>

			<label id="icon">
				<i class="fas fa-bars"></i>
		    </label>

		</nav>

		 

		





		 
<!-- font awesome -->
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- font awesome -->

<!-- jquery code cdn-->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <!-- jquery code -->

<script>
	$(document).ready(function () {
	$('#icon').click(function(){
		$('ul').toggleClass('show');
	});
});
</script>

  
		
</body>
</html>