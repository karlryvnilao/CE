<?php
include './conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CEE LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
	
</head>
<body>
		
		<div class="container-login100">
		<div class="row">
			<div class="col-6">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form method="post" id="examineeLoginFrm" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="username" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
						<div class="ml-5 mt-3">
						<a href="/CEE/adminpanel/admin/index.php">Admin</a>
						</div>
					</div>
					<div class="p-3">
						<span>register?</span>
					</div>
					
				</form>
			</div>
		</div>
	</div>
		<div class="col-6">
		<div class="container">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login-ui/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Register
					</span>
				</div>

				<form method="post" id="addExamineeFrm" class="login100-form validate-form">
					<div class="wrap-input100 m-b-26" >
						<span class="label-input100">Fullname</span>
						<input class="input100" type="text" name="fullname" id="fullname" placeholder="Enter fullname">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 m-b-26">
						<span class="label-input100">Birthdate</span>
						<input class="input100" type="date" name="bdate" id="bdate" placeholder="Enter birthdate ">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 m-b-26">
						<span class="label-input100">Gender</span>
						<select class="input100" name="gender" id="gender">
						<option value="0">Select gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 m-b-26">
						<span class="label-input100">Course</span>
						<select class="input100" name="course" id="course">
						<option value="0">Select course</option>
						<?php 
							$selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
							while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
							<option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
							<?php }
						?>
						</select>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 m-b-26">
						<span class="label-input100">Year Level</span>
						<select class="input100" name="year_level" id="year_level">
						<option value="0">Select year level</option>
						<option value="first year">First Year</option>
						<option value="second year">Second Year</option>
						<option value="third year">Third Year</option>
						<option value="fourth year">Fourth Year</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 m-b-26">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" id="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 m-b-26">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<!-- Add an ID to the form for easy reference -->
						<button type="submit" class="btn btn-primary">
							Register
						</button>
					</div>
					
				</form>
			</div>
		</div>
		</div>
		</div>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
    $(".container").hide();  // Hide the elements initially
    $("span").click(function(){
        $(".container").toggle();

    });
    });

	
	</script>
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>

</body>
</html>