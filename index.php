<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="Leppi adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Weight Product">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a class="active" href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a href="daftar_hp.php">DAFTAR SMARTPHONE</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 40px">SISTEM PENDUKUNG KEPUTUSAN MENGGUNAKAN METODE TOPSIS</h1>
					<div class="row center">
						<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 26px">PEMILIHAN SMARTPHONE</h5>
					</div>
					<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="waves-effect waves-light btn-large" style="margin-top: 40px">Pilih Rekomendasi</a>
							</div>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/pixel.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

	<!-- Info Start -->
	<div style="background-color: white">
		<div class="container">
		    <div class="section-card" style="padding: 36px 0px">
		    	<div class="row">
		    		<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO SISTEM</h5></center><br>
			    		<p style="text-align: justify; padding-right: 16px;">Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP. Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Teknik Informatika Universitas Trunojoyo. </p>
						</div>
			    	<div class="col s6">
			    		<center><h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO METODE</h5></center><br>
							<p style="text-align: justify; padding-left: 16px;">Metode yang digunakan adalah metode TOPSIS. Metode TOPSIS adalah salah satu metode penyelesaian pada sistem pendukung keputusan. Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan atribuat atau kriteria, dimana setiap atribut saling tidak bergantung satu dengan yang lainnya.
							</p>
							</div>
		    	</div>
	    	</div>
		</div>
	</div>
	<!-- Info End -->

	<div id="about" class="modal">
    <div class="modal-content">
      <h4>Tentang</h4>
      <p>Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Tugas Akhir Mata Kuliah Sistem Pendukung Keputusan Prodi Teknik Informatika Universitas Trunojoyo Madura. <br>
				<br>
				1. Zulfi Osman<br>
				2. Wahid Arinanto Nugroho <a href="https://wahidari.gitlab.io/"> (Gitlab)</a><br>
			</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
    </div>
	</div>
	
    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Smartphone 2018.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>