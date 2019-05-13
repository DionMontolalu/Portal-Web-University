<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ilmu Kesehatan Anak Unsrat">
    <meta name="author" content="Dion Montolalu">
	<meta http-equiv="Copyright" content="Mars Design Manado">


    <title>Bagian Ilmu Kesehatan Anak Fakultas Kedokteran Universitas Sam Ratulangi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="row">
		<?php
	include "rgx.php";
	include "pag.php";
	error_reporting(0);
		$reload = "berita.php?pagination=true";
		$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.headline, A.pengirim, A.picture ,A.tanggal FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC";
		$sql = mysql_query($query);
		$rpp = 4; // jumlah record per halaman
        $page = intval($_GET["page"]);
            if($page<=0) $page = 1;  
                $tcount = mysql_num_rows($sql);
                $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
                $count = 0;
                $i = ($page-1)*$rpp;
                $no_urut = ($page-1)*$rpp;
		
		while(($count<$rpp) && ($i<$tcount)) {
            mysql_data_seek($sql,$i);
            $hasil = mysql_fetch_array($sql);
		
		$id_berita = $hasil['id_berita'];
		$kategori = stripslashes ($hasil['nm_kategori']);
		$judul = preg_replace("/\s/","-",$hasil['judul']);
		$url_link = "Berita-".$hasil['id_berita']."-".$judul.".html";
		$headline = nl2br(stripslashes($hasil['headline']));
		$pengirim = stripslashes ($hasil['pengirim']);
		$picture = $hasil['picture'];
		$tanggal = stripslashes ($hasil['tanggal']);
                
		//tampilkan berita
		echo '<div class="col-sm-6 col-md-4" >';
		echo '	<div class="thumbnail">';
		echo "		<img src='ika_admin/kedok_ika/gambar/$picture' width='100%'> </img>";
		echo '	<div class="caption">';
		echo "		<h4><a href=\"".$url_link."\" style=\"color: #3D5AFE;\" target=\"_blank\">".$hasil['judul']."</a></h4>";
		echo "		<i>$headline</i>";
		echo '	</div>';
		echo '	</div>';
		echo '</div>';
		
		$i++; 
          $count++;
		}
		
		
?>				
		</div>
		
	</div>
		
	</div>
	<?php
		if ($i != $hasil) {
            echo paginate_one($reload, $page, $tpages); 
        }
        else {
			echo"Mohon Maaf, Data Yang Anda Cari Tidak Ditemukan";
        }
		?>
</div>
