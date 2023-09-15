<?php
  session_start();
  ob_start();
  include('check/dashboard/includes/db.php');


  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $role = 'admin';
    $pasLen = strlen($password);

    if (empty($username) or empty($password)) {
      $msg =  "Both fields are compulsory fields";
  }elseif ($pasLen < 6) {
     $msg = "Password length is too weak";
  }
  else {
    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 1) {
      $arr = mysqli_fetch_array($result);
      $username_db = $arr['username'];
      $password_db = $arr['password'];
      $role_db = $arr['role'];
      $branch = $arr['branch'];

      if ($role_db == 'admin') {
       $_SESSION['username'] = $username_db;
       $_SESSION['branch'] = $branch;
      // $_SESSION['role'] = $role_db;
      header("Location: dist/dashboard");
      }else{
         $_SESSION['username'] = $username_db;
         $_SESSION['branch'] = $branch;
        header("Location: check/dashboard");
      }

      
    }else{
       $msg = "Invalid Login Details";
    }
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

	</head>
	<body style="background-color: teal;">
		<div style="margin-top: 10px;">
			<center>
				<p style="color: white; font-weight: bolder; font-size: 35px;">
					SIWES E-LOGBOOK
				</p>
			</center>			
		</div>
	<section class="ftco-sectionv">
		<div class="container">
		<!-- 	<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/user.jpg);"></div>

		      		<?php echo "<div style=' text-align: center;'><span style='color: red; font-weight: bolder;'>" .@$msg. "</span></div>"; ?>



		     <!-- <div class="card" style="text-align: center; padding: 10px;"> -->
		      		
		
		      	<h3 class="text-center mb-0">Welcome</h3>
		      	<p class="text-center">Sign in by entering the information below</p>
						<form action="index.php" class="login-form" method="post">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" name="password" class="form-control" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="btn form-control btn-primary rounded submit px-3">Login</button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<!-- <p class="mb-0">Don't have an account?</p> -->
		          <!-- <a href="#">Sign Up</a> -->
	          </div>
	        </div>
	     </div>
				<!-- </div> -->
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

