<?php
	//starting the session
	session_start();
	
	if(!isset($_SESSION['user'])){
		header('location: ../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dm Gebäudereinigung</title>
  <meta content="Home and Office Cleaning Services" name="description">
  <meta content="Home and Office Cleaning Services" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex flex-wrap gap-2 align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:dmgebaudereinigung1@gmail.com">dmgebaudereinigung1@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center"><a href="tel:+49 1708 990200">+49 1708 990200</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </section>
	<!-- As a heading -->
	<nav class="navbar navbar-light bg-light py-2 px-1">
		<div class="container">
			<a href="../index.html">
				<img src="../assets/img/logo.png" alt="logo" width="60" height="48">
			</a>
			<span class="navbar-brand mb-0 h1">DM Building Cleaning Reviews Admin</span>
		</div>
	</nav>
	<div style="height: 55vh">
		<div class="container mt-3 card">
			<div class="card-header">
				List of all Reviews
			</div>
			<div class="card-body">
				<h5 class="card-title">
					<a href="add.php">Add</a>
				</h5>
				<table class="table table-striped">
					<thead>
						<th>ID</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Location</th>
						<th>Review Message</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							//include our connection
							include 'dbconfig.php';

							//query from the table that we create
							$sql = "SELECT review_id, * FROM reviews";
							$query = $db->query($sql);

							while($row = $query->fetchArray()){
								echo "
									<tr>
										<td>".$row['review_id']."</td>
										<td>".$row['firstname']."</td>
										<td>".$row['lastname']."</td>
										<td>".$row['location']."</td>
										<td>".$row['review_message']."</td>
										<td>
											<a href='edit.php?id=".$row['review_id']."'>Edit</a>
											<a href='delete.php?id=".$row['review_id']."'>Delete</a>
										</td>
									</tr>
								";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<hr>
	
	<!-- ======= Footer ======= -->
	<footer id="footer">
		
		<div class="footer-top">
		<div class="container">
			<div class="row">

			<div class="col-lg-3 col-md-6 footer-contact">
				<h3>Dm Gebäudereinigung<span>.</span></h3>
				<p>
				Germany <br>
				Hanhover<br>
				Kassel <br><br>
				<strong>Phone:</strong> <a href="tel:+49 1708 990200">+49 1708 990200</a><br>
				<strong>Email:</strong>dmgebaudereinigung1@gmail.com<br>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 footer-links">
				<h4>Useful Links</h4>
				<ul>
				<li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#hero">Heim</a></li>
				<li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#about">Über uns</a></li>
				<li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#services">Dienstleistungen</a></li>
				<li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#">Nutzungsbedingungen</a></li>
				<!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
				</ul>
			</div>

			<div class="col-lg-3 col-md-6 footer-links">
				<h4>Unsere Dienstleistungen</h4>
				<ul>
				<li><i class="bx bx-chevron-right"></i> <a href="#">Wohnungsreinigung</a></li>
				<li><i class="bx bx-chevron-right"></i> <a href="#">Gewerbliche Reinigung</a></li>
				<li><i class="bx bx-chevron-right"></i> <a href="#">Spezialisierte Dienstleistungen</a></li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-6 footer-links">
				<h4>Unsere sozialen Netzwerke</h4>
				<p>Kontaktieren Sie uns gerne unter Unsere sozialen Netzwerke</p>
				<div class="social-links mt-3">
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
				<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
			</div>

			</div>
		</div>
		</div>

		<div class="container py-4">
		<div class="copyright">
			&copy; Urheberrechte <strong><span>Dm Gebäudereinigung</span></strong>. Alle Rechte vorbehalten
		</div>
		<div class="credits">
			Entworfen von <a href="https://bootstrapmade.com/">Dev Kim</a>
		</div>
		</div>
	</footer><!-- End Footer -->
	
		
	<!-- Vendor JS Files -->
	<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="../assets/vendor/aos/aos.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="../assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>
</body>
</html>