<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


    <div class="row">
        <style>.text-center a {
            border: #003478 solid 1px;
            font-size: 16px;
            font-weight: 700;
        }

        .text-center a:hover {
            color: #fff;
            background: #003478;
        }

        .form-groupa input {
            background-color: #003478;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
        }

        .form-groupa p {
            text-align: center;
            color: black;
            font-size: 16px;
            font-weight: 700;
        }

        .form-groupa input:hover {
            background-color: #003478;
            color: #ff7800;
        }

        .form-group {
            color: black;
            font-size: 16px;
            font-weight: 700;
        }
</style>
    	  <?php
session_start();

?>

<?php include("includes\header.php" );?>
            <div class=" col-md-6">
                <form name="myForm" action="axti.php" method="POST" onsubmit="return validateForm()" required>
                    <div class="form-group">
                        <label for="txtEmail">Email:</label>
                        <input type="email" class="form-control" name="txtEmail" id="txtEmail">
                    </div>
                    <div class="form-group">
                        <label for="txtPassword">Password:</label>
                        <input type="password" class="form-control" name="txtPassword" id="txtPassword">
                    </div>
                    <div class="form-groupa">
                        <input type="submit" class="form-control " name="sbmLogin" href="axti.php" id="sbmLogin" value="Login">
                         <p>
                            <a href="admin/admin1.php">Or</a>
                        </p>
                        
                    </div>
                    
                        
                    <div class="text-center">
                        <a name="" id="" class="btn btn-default col-md-5 " href="register.php" role="button">Register</a>
                        <a name="" id="" class="btn btn-default col-md-5 " href="" role="button">Reset Password </a>

                    </div>
                    <br>

                </form>
            </div>
        </div>

<?php include("includes/footer.php" );?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>