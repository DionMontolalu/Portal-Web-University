<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Universitas Negeri Manado">
	<meta name="keywords" content="Universitas Negeri Manado">
    <meta name="author" content="Dion Montolalu">
	<meta http-equiv="Copyright" content="Mars Design Manado">

    <title>Universitas Negeri Manado</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
	<link href="css/image.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="img/logo.png">
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
</head>

<body>
	<!-- Navbar Aplication -->
	<?php
		include_once "navbar.php"
	?>
	<!-- End Navbar -->

    <!-- Page Content -->
    <div class="container">
		
        <!-- Marketing Icons Section -->
        <div class="row">
			<center><br>	
				<img src="ika_admin/assets/img/unima.png" class="img-thumbnail" width="10%"></img>
            </center>
			
			<div class="col-lg-12">
					
                <h3 class="page-header">
                    <div class="panel-heading" style="background: white; color: blue; border: 2px solid #3D5AFE;">
                        <marquee>Universitas Negeri Manado</marquee>
                    </div>
                </h3>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/keg/11.png" alt="Chania" width="460px" height="345px">
        <div class="carousel-caption">
          <h3>Gerbang UNIMA</h3>
          <p>Gerbang Utama Universitas Negeri Manado</p>
        </div>
      </div>

      <div class="item">
        <img src="img/keg/12.png" alt="Chania" width="500px" height="345px">
        <div class="carousel-caption">
          <h3>Kantor Pusat</h3>
          <p>Kantor Utama Universitas Negeri Manado</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/keg/13.png" alt="Flower" width="460px" height="345px">
        <div class="carousel-caption">
          <h3>Auditorium</h3>
          <p>Gedung kebanggan Universitas Negeri Manado</p>
        </div>
      </div>

      <div class="item">
        <img src="img/keg/14.png" alt="Flower" width="460px" height="345px">
        <div class="carousel-caption">
          <h3>Tarian</h3>
          <p>Acara Tarian Katrili</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br><br>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: white; color: blue; border: 2px solid #3D5AFE;">
						SAMBUTAN REKTOR
					</div>
                    <div class="panel-body">
						<div class="col-md-2">
							<img class="img-responsive" src="img/rektor.png" width="100px" height="100px" alt="">
						</div>							
						<div class="col-md-10">
							<?php 
								include "rgx.php";
								$query = "SELECT * FROM sambutan";
								$sql = mysql_query($query);
								$hasil = mysql_fetch_array($sql);
								$oleh = $hasil['oleh'];
								$isi = nl2br(stripslashes($hasil['isi']));
								echo "<i> $oleh </i>";
								echo "<br>";
								echo "<p> $isi </p>" ;
							?>
						</div>
                    </div>
                </div>			
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: white; color: blue; border: 2px solid #3D5AFE;">
						PENGUMUMAN
					</div>
                    <div class="panel-body">
						<iframe src="pengumuman.php" width="100%" height="170px" style="border:none"></iframe>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: white; color: blue; border: 2px solid #3D5AFE;">
						BERITA - BERITA
					</div>
                    <br>
						<iframe src="berita.php" width="100%" height="700px" style="border:none"></iframe>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default text-center">
                    <div class="panel-heading" style="background: #3D5AFE; color: white">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-child fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
						<h4>Universitas Negeri Manado</h4>
						<a href="struktur-organisasi" class="btn btn-info">Struktur Organisasi</a>
                    </div>
                </div>
            </div>
			
            <div class="col-md-3">
                <div class="panel panel-default text-center">
                    <div class="panel-heading" style="background: #3D5AFE; color: white">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>FAKULTAS</h4>
                        <p>Fakultas-fakultas UNIMA</p>
						<ul>
							<li align="left"><a href="#">Fakultas Teknik</a></li>
							<li align="left"><a href="#">Fakultas Ekonomi</a></li>
							<li align="left"><a href="#">Fakultas Ilmu Sosial</a></li>
							<li align="left"><a href="#">Fakultas Bahasa dan Seni</a></li>
							<li align="left"><a href="#">Fakultas Matematika dan Ilmu Pengetahuan Alam</a></li>
							<li align="left"><a href="#">Fakultas Ilmu Keolahragaan</a></li>
							<li align="left"> <a href="#">Fakultas Pendidikan</a></li>
						</ul>
					</div>
                </div>
            </div>
			<div class="col-md-3">
                <div class="panel panel-default text-center">
                    <div class="panel-heading" style="background: #3D5AFE; color: white">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="panel-body">
					
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row" style="background: white; color: green; border: 2px solid #3D5AFE;">
            <div class="col-lg-12" style="background: #3D5AFE; color: white">
                <h3>Gallery</h3>
            </div>
            <div class="column">
				<img src="img/keg/11.png" style="width:100%; height:200px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
				<img src="img/keg/12.png" style="width:100%; height:200px;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
				<img src="img/keg/13.png" style="width:100%; height:200px;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
			 <div class="column">
				<img src="img/keg/14.png" style="width:100%; height:200px;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
            </div>
			<br>
			
			<!-- The Modal -->
			<div id="myModal" class="modal">
			
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/keg/11.png" style="width:804px; height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/keg/12.png" style="width:804px; height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/keg/13.png" style="width:804px; height:350px;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/keg/14.png" style="width:804px; height:350px;">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img/keg/11.png" style="width:180px; height:110px;" onclick="currentSlide(1)" alt="Gerbang UNIMA">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/keg/12.png" style="width:180px; height:110px;" onclick="currentSlide(2)" alt="Kantor Pusat">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/keg/13.png" style="width:180px; height:110px;" onclick="currentSlide(3)" alt="Dies Natalis di Kecamatan Kakas">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/keg/14.png" style="width:180px; height:110px;" onclick="currentSlide(4)" alt="Natal Bersama">
    </div>
  </div>
</div>
		<!-- End Modal -->	
		</div>
        <!-- /.row -->

        <!-- Features Section -->
        <br><br>
		<div class="row" style="background: white; color: black; border: 2px solid #3D5AFE;">
            <div class="col-lg-12" style="background: #3D5AFE; color: white">
                <h3>Berita Terpopuler</h3>
				<?php 
					include "rgx.php";
					$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.pengirim, A.picture, A.tanggal,MAX(A.hits) AS viewer FROM berita A, kategori B WHERE A.id_kategori = B.id_kategori GROUP BY A.id_berita ORDER BY hits DESC LIMIT 1";
					
					$sql = mysql_query($query);
					$hasil = mysql_fetch_array($sql);
					$id_berita = $hasil['id_berita'];
					$kategori = stripslashes ($hasil['nm_kategori']);
					$judul = stripslashes ($hasil['judul']);
					$judul = preg_replace("/\s/","-",$hasil['judul']);
					$url_link = "Berita-".$hasil['id_berita']."-".$judul.".html";
					$isi = nl2br(stripslashes ($hasil['isi']));
					$isi = substr($isi,0,200);
					$pengirim = stripslashes ($hasil['pengirim']);
					$picture = $hasil['picture'];
					$tanggal = stripslashes ($hasil['tanggal']);
					$viewer = $hasil['viewer'];
				?>
            </div>
            <div class="col-md-6"><br>
                <h4><?php echo $judul; ?></h4>
					<div class="row">
						<div class="col-xs-6 col-sm-3" >
							<span class="fa fa-bookmark"> <?php echo $kategori ?> </span>
						</div>
						<div class="col-xs-6 col-sm-3">
							<span class="fa fa-calendar"> <?php echo $tanggal ?> </span>
						</div>
						<div class="col-xs-6 col-sm-3">
							<span class="fa fa-eye"> <?php echo $viewer ?> view</span>
						</div>  
					</div>
					<br>
                   <p>
					<?php echo $isi; ?><i>....</i>
					</p>
					<p><i><?php echo "<a href=\"".$url_link."\" class=\"btn btn-info\" target=\"_blank\"> Lanjutkan Baca</a>" ?></i></p>
            </div>
            <div class="col-md-6"><br>
                <?php 
					echo "<img class='media-object' src='ika_admin/kedok_ika/gambar/$picture' width='100%'><br>"; ?>
            </div>
        </div>
        <!-- /.row -->
    </div><br><br>
    <!-- /.container -->
	
	<!-- Footer -->
    <div class="row" style="background: #3D5AFE; color: white">
	  <div class="container">
		<div class="col-lg-12">
			<br>Copyright &copy; UNIMA</p>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-1"></div> 
			</div>
		</div>
	  </div>
	</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
		function openModal() {
			document.getElementById('myModal').style.display = "block";
		}

		function closeModal() {
			document.getElementById('myModal').style.display = "none";
		}

			var slideIndex = 1;
				showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			var captionText = document.getElementById("caption");
				if (n > slides.length) {slideIndex = 1}
					if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
		}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
		}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>
</body>

</html>
