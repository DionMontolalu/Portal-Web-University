<?php  
  session_start();//session starts here  
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator-Ilmu Kesehatan Anak</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
		 <center><img src="assets/img/unima.png" width="10%" alt=""/> </center>
     <center>      
  <div class="col-md-3"></div>
  <div class="col-md-6">
	<div class="login-panel panel panel-info">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Administrator Sign In</h3>
						<?php
						include "rgx.php";
						error_reporting(0);
						//script anti sql injection
						function anti_injection($data){
							$filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
							return $filter;
						}
						
						if(isset($_POST['login']))  {
							$user=anti_injection($_POST['Username']);  
							$pwd=anti_injection($_POST['Password']); 
							
							if(empty($_POST['Username'])){
								echo '<br><strong>Kesalahan!</strong> Username tidak boleh kosong';
							}
							elseif(empty($_POST['Password'])){
								echo '<br><strong>Kesalahan!</strong> Password tidak boleh kosong';
							}
							else if (!preg_match("/^[a-zA-Z-0-9 ]*$/",$user)) {
                                echo '<br><h4><span class="label label-danger">Kesalahan dalam memasukan username dan password</span></h4>';
							}
							else if (!preg_match("/^[a-zA-Z-0-9 ]*$/",$pwd)) {
                                echo '<br><h4><span class="label label-danger">Kesalahan dalam memasukan username dan password</span></h4>';
							}else{
									$check_user="SELECT * FROM admin WHERE username='$user'AND pass='$pwd'";  
									$run=mysql_query($check_user); 
									$data = mysql_fetch_array($run);
									
									if(mysql_num_rows($run)) {  
										echo "<script>window.open('kedok_ika/Dashboard','_self')</script>";       
											$_SESSION['username']=$user;
											$_SESSION[name_lengkap]=$data;
									}  
									else {  
										echo "<script>alert('Username or Password is incorrect!')</script>";  
									}  
								}
						}
						?>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="Username" type="text" autofocus required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="Password" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button name="login" class="btn btn-lg btn-info btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
  </div>
  <div class="col-md-3"></div>
</center>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
