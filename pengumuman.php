<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Universitas Negeri Manado">
    <meta name="author" content="Dion Montolalu">

    <title>Pengumuman</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">

.button
{
padding: 5px 15px;
text-decoration: none;
background-color: white;
color: #3D5AFE;
font-size: 13PX;
border-radius: 2PX;
border: 2px solid #3D5AFE;
margin: 0 4PX;
display: block;
float: left;
}
.button:hover {
    background-color: #3D5AFE;
    color: white;
	border: 2px solid white;
}
</style>
<style type="text/css">
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3D5AFE;
  width: 110px;
  height: 110px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>


</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php
			error_reporting(0);
			include "rgx.php";

			$start=0;
			$limit=1;

				if(isset($_GET['id_peng']))
				{
					$id=$_GET['id_peng'];
					$start=($id-1)*$limit;
				}

			$query=mysql_query("select * from pengumuman  ORDER BY id_peng DESC LIMIT $start, $limit");

			while($query2=mysql_fetch_array($query))
			{
				echo "<h4>".$query2['judul']."</h4>";
				echo "<i class='fa fa-calendar'> <b>".$query2['date']. "</b>  Pukul:<b>".$query2['time']."</b></i>";
				echo "<br><br>".$query2['isi']."</br>";
			}
			echo '<div class="pull-right">';
			$rows=mysql_num_rows(mysql_query("select * from pengumuman"));
			$total=ceil($rows/$limit);

				if($id>1)
				{
					echo "<a href='?id_peng=".($id-1)."' class='button' data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pengumuman Baru\">PREVIOUS</a>";
				}
				
				if($id!=$total)
				{
					echo "<a href='?id_peng=".($id+1)."' class='button' data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pengumuman Sebelumnya\">NEXT</a>";
				}
			echo '</div>';

		?>
		</div>
	</div>
</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>