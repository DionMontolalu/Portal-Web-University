<?php  
session_start();  
  
if(!$_SESSION['username']) {    
  header("Location: http://localhost/e-commerce/ika_admin/Admin.linux");//redirect to login page to secure the welcome page without login access.  
}else{
	include "rgx.php";
	$admin = mysql_query("SELECT name_lengkap FROM admin");
}  
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator-Berita</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
	<style>
		.peringatan {
			padding: 20px;
			background-color: #E53935;
			color: white;
			margin-bottom: 15px;
		}

		/* The close button */
		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
		}

		.closebtn:hover {
			color: black;
		}
	</style>
    <!-- Page-Level CSS -->

    <!-- plugin editor -->
    <script src="tinymce/tinymce.min.js"></script>
	<!-- Sweet Alert -->
	<link rel="stylesheet" type="text/css" href="assets/sweetalert/dist/sweetalert.css">
	<script type="text/javascript" src="assets/sweetalert/dist/sweetalert.min.js"></script>
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/admin.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="" data-toggle="modal" data-target="#myModal" onclick=""><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php echo $_SESSION['username']; ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bars fa-fw"></i> Kategori<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Kategori-tambah">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i> 
                                Tambah Kategori</a>
                            </li>
                            <li>
                                <a href="Data-kategori">
                                    <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
                                Edit Kategori</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li class="active">
                        <a href="#"><i class="fa fa-laptop fa-fw"></i> Berita<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="selected">
                                <a href="Berita-tambah">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                Tambah Berita</a>
                            </li>
                            <li>
                                <a href="Data-berita">
                                    <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
                                Edit Berita</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-text fa-fw"></i> Halaman<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Halaman-profil">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                Profil</a>
                            </li>
                            <li>
                                <a href="Halaman-PPDS">
                                    <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>
                                PPDS</a>
                            </li>
							<li>
                                <a href="Halaman-Mahasiswa">
                                    <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                                Mahasiswa</a>
                            </li>
							<li>
                                <a href="Halaman-IKA">
                                    <i class="fa fa-file fa-fw" aria-hidden="true"></i>
                                IKA</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-terminal fa-fw"></i> Halaman Utama<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Sambutan">
                                    <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                                Sambutan</a>
                            </li>
                            <li>
                                <a href="Pengumuman">
                                    <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                Pengumuman</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
		
		<!--  modal bootstrap -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Admin Profile</h4>
					</div>
					<div class="modal-body">
						Mau pakai include php untuk update data user
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--  end modal bootstrap -->	
			
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Berita</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                      <a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>-> Berita-> Tambah Berita
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

            <?php
                include "rgx.php";
				error_reporting(0);
                //proses input berita
					$judul = addslashes (strip_tags ($_POST['judul']));
                    $kategori = $_POST['kategori'];
                    $headline = addslashes (strip_tags($_POST['headline']));
                    $isi_berita = $_POST['isi'];
					$isi_berita = str_replace("<img src=","<img class=\"img-responsive\" src=",$isi_berita);
					$isi_berita = stripslashes($isi_berita);
                    $pengirim = addslashes (strip_tags ($_POST['pengirim']));
					//variabel untuk upload gambar
					$target_dir = "gambar/";
					$target_file = $target_dir . basename($_FILES["Upload"]["name"]);
					$picture   = basename($_FILES['Upload'] ['name']);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					//akhir variabel untuk upload gambar
					$hits = addslashes (strip_tags($_POST['hits']));
					$hits = 0;
				if (isset($_POST['input'])) {
					if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
					}else if($judul==""){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Judul </strong> tidak boleh kosong !!
							   </div>";
						
					}else if($headline==""){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Headline </strong> tidak boleh kosong !!
							   </div>";
					}else if($isi_berita==""){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Isi berita </strong> tidak boleh kosong !!
							   </div>";
					}					
					else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
						echo "<div class=\"peringatan\">
								<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
									<strong> Maaf </strong> , hanya boleh menginputkan gambar : JPG, JPEG, PNG & GIF !!
							   </div>";
							$uploadOk = 0;
					}
					else {
						if (move_uploaded_file($_FILES["Upload"]["tmp_name"], $target_file)) {
							$query = "INSERT INTO berita VALUES('','$kategori','$judul','$headline','$isi_berita','$pengirim','$picture',now(),'$hits')";
								$sql = mysql_query ($query); 
									if ($sql) {
										echo '<script>
												swal({
													title:"Berhasil",
													text: "Berita berhasil ditambahkan!",
													type: "success",
												},
												function(){
													window.location.href = "Data-berita";
												});
										</script>';
									}else{
										echo '<script>swal("Gagal!", "Ada kesalahan pemasukan data!", "warning")</script>';
									}
						} else {
							echo "Sorry, there was an error uploading your file.";
						}
					}
						
                }
            ?>
				
            <div class="row">
                <div class="col-lg-12">
                  <form action="" method="post" enctype="multipart/form-data">
                 <div class="row">
                        <div class="col-md-5">
                            <label for="basic-url">Judul</label><i style="color:red;"> *Harus diisi</i>
                            <div class="input-group input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="fa fa-tasks fa-fw" aria-hidden="true"></span>
                                </span>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Berita" autocomplete="off" aria-describedby="basic-addon1">
                            </div>
                                <br>
                            <label for="basic-url">Headline Berita</label><i style="color:red;"> *Harus diisi</i>
                            <div class="input-group">
                                <input type="text" class="form-control" name="headline" placeholder="Headline Berita" autocomplete="off" aria-describedby="basic-addon2">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                            <label for="basic-url">Kategori</label><i style="color:red;"> *Harus diisi</i>
                            <select name="kategori" class="form-control">
                                <?php
                                    include "rgx.php";
                                        $query = "SELECT id_kategori, nm_kategori FROM kategori ORDER BY nm_kategori";
                                    $sql = mysql_query ($query);
                                        while ($hasil = mysql_fetch_array($sql)) {
                                            echo "<option value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
                                        }
                                ?>
                            </select>

                            <br>
                            <label for="basic-url">Penulis</label>
                            <div class="input-group">
                                <input type="text" name="pengirim" class="form-control" placeholder="Penulis" 
								value="<?php
									while($data = mysql_fetch_array($admin)){
										echo "$data[name_lengkap]";
									}
								?>" aria-describedby="basic-addon2" readonly>
                                    <span class="input-group-addon" id="basic-addon2">
                                        <span class="fa fa-user" aria-hidden="true"></span>
                                    </span>
                            </div>
                        </div>
                 </div>
                    <br><br>
                     <label for="basic-url">Isi Berita</label>
                         <textarea name="isi" rows="20"></textarea>
                            <br>
					<div class="form-group">
						<label>Image</label><i style="color:red;">  *Ukuran 1280x720</i>
							<div class="col-md-4 input-group">
								<input type="file" name="Upload" class="btn btn-default" id="Upload">
							</div>	
					</div>
					<input type="hidden" name="hits">
					<br><br>
					<button type="submit" name="input" class="btn btn-info ">
						<span class="fa fa fa-floppy-o" aria-hidden="true"></span> Save</button>
					<button type="reset" class="btn btn-sm btn-danger pull-right" onclick="self.history.back()"><i class="fa fa-times"></i> Cancel</button>
                </form>
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
	<script type="text/javascript">
        tinymce.init({
		selector: "textarea",theme: "modern",width: "100%",height: "400px",
		plugins: [
			 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
			 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
			 "table directionality emoticons paste textcolor responsivefilemanager save table contextmenu"
	   ],
	   toolbar1: " save | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
	   toolbar2: "link unlink anchor | image media | forecolor backcolor  | print preview code",
	   relative_urls:false,

	   external_filemanager_path:"./filemanager/",
	   filemanager_title:"Responsive Filemanager" ,
	   external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
	});
    </script>
	<script>
		// Get all elements with class="closebtn"
		var close = document.getElementsByClassName("closebtn");
		var i;

		// Loop through all close buttons
		for (i = 0; i < close.length; i++) {
			// When someone clicks on a close button
			close[i].onclick = function(){

			// Get the parent of <span class="closebtn"> (<div class="alert">)
			var div = this.parentElement;

			// Set the opacity of div to 0 (transparent)
			div.style.opacity = "0";

			// Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
			setTimeout(function(){ div.style.display = "none"; }, 600);
			}
		}
	</script>
</body>

</html>
