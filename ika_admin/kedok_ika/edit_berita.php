<?php  
session_start();  
  
if(!$_SESSION['username']) {    
 header("Location: http://localhost/e-commerce/ika_admin/Admin.linux");//redirect to login page to secure the welcome page without login access.  
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
                        <a href="Dashboard"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
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
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit Kategori</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li class="active">
                        <a href="#"><i class="fa fa-laptop fa-fw"></i> Berita<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Berita-tambah">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                Tambah Berita</a>
                            </li>
                            <li class="selected">
                                <a href="Data-berita">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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
                                    <i class="fa fa-file-text" aria-hidden="true"></i>
                                PPDS</a>
                            </li>
							<li>
                                <a href="Halaman-Mahasiswa">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                Mahasiswa</a>
                            </li>
							<li>
                                <a href="Halaman-IKA">
                                    <i class="fa fa-file" aria-hidden="true"></i>
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
                        <a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>-> Berita-> Edit Berita
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
			<?php
				include('rgx.php');
				$id_berita = $_GET['id_berita'];
				$show = mysql_query("SELECT * FROM berita WHERE id_berita='$id_berita'");
				if(mysql_num_rows($show) == 0){
					echo '<script>window.history.back()</script>';
				}else{
					$data = mysql_fetch_assoc($show);
				}
			?>
            <?php
                include "rgx.php";
				error_reporting(0);
				if (isset($_POST['input'])) {
					$id_berita= $_POST['id_berita'];
					$judul = addslashes (strip_tags ($_POST['judul']));
                    $kategori = $_POST['kategori'];
                    $headline = addslashes (strip_tags($_POST['headline']));
                    $isi_berita = $_POST['isi'];
					$isi_berita = str_replace("<img src=","<img class=\"img-responsive\" src=",$isi_berita);
                    $pengirim = addslashes (strip_tags ($_POST['pengirim']));
					if($judul==""){
                        echo '<script>swal("Kesalahan!", "Form Judul tidak boleh kosong!", "warning")</script>';
                    }elseif ($isi_berita=="") {
                        echo '<script>swal("Kesalahan!", "Form Isi tidak boleh kosong!", "warning")</script>';
                    }elseif ($headline=="") {
                        echo '<script>swal("Kesalahan!", "Form Headline tidak boleh kosong!", "warning")</script>';
                    }elseif ($pengirim=="") {
                        echo '<script>swal("Kesalahan!", "Form Pengirim tidak boleh kosong!", "warning")</script>';
                    }
					else {		
							$update = mysql_query("UPDATE berita SET id_kategori='$kategori', judul='$judul', headline='$headline', isi='$isi_berita',pengirim='$pengirim'
									WHERE id_berita='$id_berita'") or die(mysql_error());
							if ($update) {
								echo '<script>
										swal({
											title: "Berhasil !",
											text: "Berita berhasil di update!",
											type: "success",
										},
											function(){
												window.location.href = "Data-berita";
										});
								</script>';
							}else{
								echo '<script>swal("Gagal!", "Ada kesalahan pengantian data!", "warning")</script>';
							}
					}		
                }
            ?>
				
            <div class="row">
                <div class="col-lg-12">
                  <form action="" method="post" enctype="multipart/form-data">
				  <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>">
                 <div class="row">
                        <div class="col-md-5">
                            <label for="basic-url">Judul</label><i style="color:red;"> *Harus dipilih</i>
                            <div class="input-group input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="fa fa-tasks fa-fw" aria-hidden="true"></span>
                                </span>
                                <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>" placeholder="Judul Berita" autocomplete="off" aria-describedby="basic-addon1">
                            </div>
                                <br>
                            <label for="basic-url">Headline Berita</label><i style="color:red;"> *Harus diisi</i>
                            <div class="input-group">
                                <input type="text" class="form-control" name="headline" value="<?php echo $data['headline']; ?>" placeholder="Headline Berita" aria-describedby="basic-addon2">
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
                                <input type="text" name="pengirim" value="<?php echo $data['pengirim']; ?>" class="form-control" readonly placeholder="Penulis" aria-describedby="basic-addon2">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <span class="fa fa-user" aria-hidden="true"></span>
                                    </span>
                            </div>
                        </div>
                 </div>
                    <br><br>
                     <label for="basic-url">Isi Berita</label>
                         <textarea name="isi" rows="20"><?php echo $data['isi']; ?></textarea>
					<br><br>
					<button type="submit" name="input" class="btn btn-info ">
						<span class="fa fa-floppy-o" aria-hidden="true"></span> Simpan</button>
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
</body>

</html>
