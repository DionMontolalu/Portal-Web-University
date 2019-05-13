<?php error_reporting(0); ?>
<?php
    include "rgx.php";
    
    if (isset($_GET['id'])) {
        $id_berita = htmlspecialchars($_GET['id']);
		$sql = mysql_query("SELECT hits FROM berita WHERE id_berita='$id_berita'");
		$d = mysql_fetch_array($sql);
		mysql_query("UPDATE berita SET hits = $d[hits]+1 WHERE id_berita='$id_berita'");		
    }else {
        die("Error. No Id Selected! ");
    }
?>

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

    <title>Berita</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
	<link href="css/image.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="img/logo.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Navbar Aplication -->
	<?php
		include_once "navbar.php"
	?>
	<!-- End Navbar -->
    <!-- Page Content -->
    <div class="container">
		<?php 
			include "rgx.php";
				$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.pengirim, A.picture, A.tanggal,MAX(A.hits) AS viewer FROM berita A, kategori B WHERE A.id_kategori = B.id_kategori && A.id_berita='$id_berita'";
				$sql = mysql_query($query);
				$hasil = mysql_fetch_array($sql);
				$id_berita = $hasil['id_berita'];
				$kategori = stripslashes ($hasil['nm_kategori']);
				$judul = stripslashes ($hasil['judul']);
				$isi = nl2br(stripslashes($hasil['isi']));
				$pengirim = stripslashes ($hasil['pengirim']);
				$picture = $hasil['picture'];
				$tanggal = stripslashes ($hasil['tanggal']);
				$viewer = $hasil['viewer'];
		?>
        <!-- Marketing Icons Section -->
        <div class="row"><br><br>
			<div class="col-md-8">
                <div class="garis">
					<h3>
						<?php echo $judul ?>
					</h3>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-2" style="border-right-style: solid; border-width: 2px; border-color: #3D5AFE;">
							<span class="fa fa-user"> <?php echo $pengirim ?> </span>
						</div>
						<div class="col-md-2" style="border-right-style: solid; border-width: 2px; border-color: #3D5AFE;">
							<span class="fa fa-calendar"> <?php echo $tanggal ?> </span>
						</div>
						<div class="col-md-2" style="border-right-style: solid; border-width: 2px; border-color: #3D5AFE;">
							<span class="fa fa-bookmark"> <?php echo $kategori ?> </span>
						</div>
						<div class="col-md-2" style="border-right-style: solid; border-width: 2px; border-color: #3D5AFE;">
							<span class="fa fa-eye"> <?php echo $viewer ?> view</span>
						</div>
					</div>
				</div>
				<div class="garis"></div>
                <hr>
				<?php 
					echo "<img class='media-object' src='ika_admin/kedok_ika/gambar/$picture' width='100%'>"; ?>
				<br><br>
				<?php 
					echo $isi ;
				?>
			</div>
			
            <div class="col-md-4">
                <div class="panel panel-success" style="background: #3D5AFE; color: white">
					<div class="panel-body">
						BERITA TERBARU
					</div>
						<div class="panel-footer" style="color: black">
							<?php
								include "rgx.php";
								$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.headline, A.pengirim, A.picture ,A.tanggal FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC LIMIT 0,4";
								$sql = mysql_query($query);
									while ($hasil = mysql_fetch_array ($sql)) {
								$id_berita = $hasil['id_berita'];
								$kategori = stripslashes ($hasil['nm_kategori']);
								$judul = stripslashes ($hasil['judul']);
								$judul = preg_replace("/\s/","-",$hasil['judul']);
								$url_link = "Berita-".$hasil['id_berita']."-".$judul.".html";
								$headline = nl2br(stripslashes($hasil['headline']));
								$pengirim = stripslashes ($hasil['pengirim']);
								$picture = $hasil['picture'];
								$tanggal = stripslashes ($hasil['tanggal']);
                
								//tampilkan berita
								echo '	<div class="media">';
								echo '		<div class="media-left">';
								echo "			<a href=\"".$url_link."\">";
								echo "				<img class='media-object' src='ika_admin/kedok_ika/gambar/$picture' width='90px' height='60px'>";
								echo '			</a>';
								echo '		</div>';
								echo '		<div class="media-body">';
								echo "		  <a href=\"".$url_link."\" style='color: #3D5AFE;'>";
								echo "			<h4 class='media-heading'>$judul</h4>";
								echo '		  </a>';
								echo "			$headline";
								echo '		</div>';
								echo '	</div>';
								echo '<hr>';
								
								}
							?>
						</div>
				</div>
				
				
				<div class="panel panel-default text-center">
                    <div class="panel-heading" style="background: #3D5AFE; color: white">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-pencil-square-o "></i>
                        </span>
                    </div>
                    <div class="panel-body">
						<h4>PENGUMUMAN</h4>
						<iframe src="pengumuman.php" width="100%" height="170px" style="border:none"></iframe>
                    </div>
                </div> 
				
				<div class="panel panel-default text-center">
                    <div class="panel-heading" style="background: #3D5AFE; color: white">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-user fa-fw"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <center><img class="img-responsive" src="img/rektor.png" width="100px" height="100px" alt=""></center>
                        <?php 
								include "rgx.php";
								$query = "SELECT * FROM sambutan";
								$sql = mysql_query($query);
								$hasil = mysql_fetch_array($sql);
								$oleh = $hasil['oleh'];
								$isi = $hasil['isi'];
								echo "<i> $oleh </i>";
								echo "<br>";
								echo "<p> $isi </p>" ;
							?>
                    </div>
                </div>
				
            </div>
        </div><br>
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
		</div><br>
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
					<?php echo $isi; ?>
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
