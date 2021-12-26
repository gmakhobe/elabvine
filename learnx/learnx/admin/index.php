<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin</title>

        <!-- Headers -->
        <?php include("includes/header.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="js/jquery.min.js"></script>
        <!-- End Script -->

        <style>


        </style>

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!--Navbar-->
        <?php include("includes/navigation.php"); ?>
        <!--Navbar end-->

        <!-- End Jumbtron -->
        <div class="jumbotron text-center" id="home">
            <h1><kbd>Admin Dashboard</kbd></h1>
        </div>
        <!-- End Jumbotron -->
        <!-- Content -->
        <!-- About Section -->
        <div class="container" id="login">
            <h3 class="text-center">Admin Login</h3>
            <p class="text-center">This section is for only LearnX Admin Members!</p>

           <br>

		   <div class="row">
				<div class="col-sm-4"></div>	
				<div class="col-sm-4">
					<label for="admin-id">Admin ID</label>
				   <input id="admin-id" class="form-control" type="email" placeholder="Admin ID" required>
				   <label for="admin-password">Password</label>
				   <input id="admin-password" class="form-control" type="password" placeholder="******" required><br>
				   <input id="admin-login" class="btn btn-primary" value="Login" type="button">
				</div>	
				<div class="col-sm-4"></div>	
		   </div>

        </div>
        <!-- End About Section -->
        <br>
		<!-- Footer -->
        <?php include("includes/footer.php"); ?>
        <!-- End Footer -->
        
    </body>

</html>