<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/signupstyle.css">
    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
  </head>
  <body style="background-color: cornflowerblue; background-image: url('images/bg2.jpg');;">
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container" >
	      <a class="navbar-brand" href="index.html">Interactive<span>Game</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="Play.html" class="nav-link">Play</a></li>
				<li class="nav-item"><a href="Rules.html" class="nav-link">Rules</a></li>
				<li class="nav-item"><a href="Trending.html" class="nav-link">Trending</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item active"><a href="regestration.php" class="nav-link">Sign Up</a></li>
				<li class="nav-item"><a href="login.php" class="nav-link">Sign In</a></li>
				<li class="nav-item"><a href="logout.php" class="nav-link">Sign Out</a></li>
				
				<li class="nav-item" style="margin-top:16px;"><a class="my-5" style="color:orange;margin-top:30px;"><b>
				<?php
						if(isset($_SESSION["username"])==true)
						{
							echo htmlspecialchars($_SESSION["username"]);
							 }
						else{}
				?>
				</b></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
     
 
</head>
<body>
    <div class="wrapper">
       
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label  style="margin-left:500px;margin-top:40px; font-family:Florence,cursive; font-size:15px;color :white;">Username</label>
                <input type="text" name="username"  style="margin-left:500px;" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback" style="margin-left:500px;" ><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label  style="margin-left:500px; font-family:Florence,cursive; font-size:15px;color :white;">Password</label>
                <input type="password" name="password" style="margin-left:500px;"  class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback" style="margin-left:500px;" ><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label  style="margin-left:500px; font-family:Florence,cursive; font-size:15px;color :white;">Confirm Password</label>
                <input type="password" name="confirm_password" style="margin-left:500px;"  class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback" style="margin-left:500px;" ><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn btn-primary" value="Submit"  style="margin-left:500px;font-family:Florence,cursive; font-size:15px;color :orange;">
            </div>
            <div class="form-group">
                <input type="reset" class="btn  btn btn-primary" value="Reset"  style="margin-left:500px;font-family:Florence,cursive; font-size:15px;color :white;">
            </div>
            <div class="form-group">
                <p value="Submit"  style="margin-left:500px; font-family:Florence,cursive,bold; font-size:25px;color :white;"><a href="Login.php">Login here</a></p>    
            </div>
            
        </form>
    </div>    
</body>
</html>