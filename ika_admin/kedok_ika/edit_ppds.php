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
    <title>Administrator-Halaman</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
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
                                    <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
                                Edit Kategori</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-laptop fa-fw"></i> Berita<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
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
                    <li class="active">
                        <a href="#"><i class="fa fa-file-text fa-fw"></i> Halaman<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Halaman-profil">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                Profil</a>
                            </li>
                            <li class="selected">
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
                    <h1 class="page-header">Edit Pendaftaran PPDS</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>-> Halaman-> PPDS
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
            <div class="row">
                <div class="col-lg-8">
                <?php
					include('rgx.php');
					$id_pds = $_GET['id_pds'];
					$show = mysql_query("SELECT * FROM ppds WHERE id_pds='$id_pds'");
					if(mysql_num_rows($show) == 0){
						echo '<script>window.history.back()</script>';
					}else{
						$data = mysql_fetch_assoc($show);
					}
				?>
					
					
					<?php
                        include "rgx.php";
                        //proses input berita
                        if (isset($_POST['input'])) {
                            $id_pds =$_POST['id_pds'];
							$judul = addslashes (strip_tags ($_POST['judul']));
                            $isi = $_POST['isi'];
							$isi = str_replace("<img src=","<img class=\"img-responsive\" src=",$isi);
							$isi = stripslashes($isi);
        
                            if($judul==""){
                                echo '<script>swal("Kesalahan!", "Form Judul tidak boleh kosong!", "warning")</script>';
                            }elseif ($isi=="") {
                                echo '<script>swal("Kesalahan!", "Form Isi tidak boleh kosong!", "warning")</script>';
                            }
                            else {
                                    //update data tabel
                                    
									$update = mysql_query("UPDATE ppds SET judul='$judul', isi='$isi' 
									WHERE id_pds='$id_pds'") or die(mysql_error());
                       
									
									if ($update){
                                        echo '<script>
												swal({
													title: "Berhasil",
													text: "PPDS berhasil diupdate!",
													type: "success",
													},
												function(){
													window.location.href = "Halaman-PPDS";
												});
										</script>';
                                    }elseif (!$update){
                                        echo '<script>swal("Kesalahan!", "Terjadi Kesalahan pada pengisian data , coba lagi!", "warning")</script>';
                                    }
                            }
                        }
                    ?>
					
				
                <form action="" method="post" name="input">
				<input type="hidden" name="id_pds" value="<?php echo $id_pds; ?>">
                    <label for="basic-url">Judul</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </span>
                                <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>" placeholder="Nama Kategori" readonly aria-describedby="basic-addon1">
                        </div><br>

                     <label for="basic-url">Isi</label>
                            <textarea name="isi" rows="20"><?php echo $data['isi']; ?></textarea>
							<br><button type="submit" name="input" class="btn btn-warning ">
                                <span class="fa fa-random" aria-hidden="true"></span>
                            Update</button>
                </form>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>
								<?php
									$sql = "SELECT SUM(hits) AS jmlh FROM berita";
									$a = mysql_query($sql);
									$jumlah = mysql_fetch_array($a);
										echo $jumlah['jmlh'];
								?>
							</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">View Berita
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-bookmark-o fa-3x"></i>
                            <h3>
								<?php
									$sql = "SELECT COUNT(*) AS jmlh FROM kategori";
									$a = mysql_query($sql);
									$jumlah = mysql_fetch_array($a);
										echo $jumlah['jmlh'];
								?>
							</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Kategori
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa-book fa-3x"></i>
                            <h3>
								<?php
									$sql = "SELECT COUNT(*) AS jmlh FROM berita";
									$a = mysql_query($sql);
									$jumlah = mysql_fetch_array($a);
										echo $jumlah['jmlh'];
								?>
							</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Post Berita
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-info-circle fa-3x"></i>
                            <h3>
								<?php
									$sql = "SELECT COUNT(*) AS jmlh FROM pengumuman";
									$a = mysql_query($sql);
									$jumlah = mysql_fetch_array($a);
										echo $jumlah['jmlh'];
								?>
							</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Pengumuman
                            </span>
                        </div>
                    </div>
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
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
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
