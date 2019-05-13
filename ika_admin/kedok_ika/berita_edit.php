<?php include "rgx.php"; ?>
<?php  
session_start();  
  
if(!$_SESSION['username']) {    
  header("Location: http://localhost/e-commerce/ika_admin/login.php");//redirect to login page to secure the welcome page without login access.  
}else{
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
    
    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	
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
            <div class="row">
                <div class="col-lg-12">
                    
                    <?php
                        if(isset($_GET['hapus'])){
                            $id_berita = $_GET['id_berita'];
                            $cek = mysql_query("SELECT * FROM berita WHERE id_berita='$id_berita'");
                        
                            if(mysql_num_rows($cek) == 0){
                                echo "<script>
										swal({
											title: 'Gagal Disimpan',
											text: 'Data tidak ditemukan!',
											type: 'warning',
										},
											function(){
												window.location.href = 'Data-berita';
										});
								</script>";
                            }else{
                                $delete = mysql_query("DELETE FROM berita WHERE id_berita='$id_berita'");
                    
                                if($delete){
                                    mysql_query("ALTER TABLE berita DROP id_berita");
                                    mysql_query("ALTER TABLE berita ADD  id_berita INT( 11 ) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY (id_berita)");
                                    echo "<script>swal('Terhapus!', 'Berita berhasil dihapus!', 'success')</script>";
                                }else{
                                    echo "<script>swal('Tidak Terhapus!', 'Berita gagal dihapus!', 'warning')</script>";
                                }
                            }
                        }
                    ?>

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tables News
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th>headline</th>
                                            <th>pengirim</th>
                                            <th>tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = mysql_query("SELECT * FROM berita");
                                        
                                        while ($data = mysql_fetch_array($query)) {
                                         $judul = preg_replace("/\s/","-",$data['judul']);
										 $url_link = "Berita-".$data['id_berita']."-".$judul.".html";
										 
										 echo '<tr class="odd gradeX">';
                                         echo "<td>".$data['id_berita']."</td>";
                                         echo "<td>".$data['judul']."</td>";
                                         echo "<td>".$data['headline']."</td>";
                                         echo "<td>".$data['pengirim']."</td>";
                                         echo "<td>".$data['tanggal']."</td>";
                                         echo "<td><a href = \"".$url_link."\"><span class='label label-warning'>Edit</span> </a>";
										 ?>
										<a href ="berita_edit.php?hapus&id_berita=<?php echo $data['id_berita']; ?>" class="delete-link" ><span class="label label-danger">Hapus</span> </a> </td></center>	
                                    <?php   } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->

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
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
	<script>
		jQuery(document).ready(function($){
			$('.delete-link').on('click',function(){
		var getLink = $(this).attr('href');
			swal({
				title: 'Hapus data ini ?',
				text: 'Cek kembali , sebelum menghapus berita',
				type: 'warning',
				html: true,
			confirmButtonColor: '#d9534f',
			showCancelButton: true,
            },function(){
				window.location.href = getLink
			});
			return false;
			});
		});	
	</script>

</body>

</html>
