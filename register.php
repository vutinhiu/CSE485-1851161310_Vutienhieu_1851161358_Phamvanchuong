<?php include("includes/header.php"); ?>
<?php require_once("includes/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template for an interactive web page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
  crossorigin="anonymous">
   <script src="verify.js"></script> 
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
 require_once('process-register.php');
} // End of the main Submit conditional.
?>
<div class="col-sm-8">
<h2 class="h2 text-center">Register</h2>
<form action="register.php" method="post" onsubmit="return checked();"
name="regform" id="regform">
  <div class="form-group row">
    <label for="first_name" class="col-sm-4 col-form-label">User name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="first_name" name="username" 
	  placeholder="username" maxlength="30" required
	  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" >
    </div>
  </div>
<div class="form-group row">
    <label for="password1" class="col-sm-4 col-form-label">Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password1" name="password1" 
	  placeholder="Password" minlength="8" maxlength="12" required
	  value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
	  <span id='message'>Between 8 and 12 characters.</span>
    </div>
  </div>
<div class="form-group row">
    <label for="password2" class="col-sm-4 col-form-label">Confirm Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password2" name="password2" 
	  placeholder="Confirm Password" minlength="8" maxlength="12" required
	  value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_name" class="col-sm-4 col-form-label">Display name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="last_name" name="displayname" 
	  placeholder="displayname" maxlength="40" required
	  value="<?php if (isset($_POST['displayname'])) echo $_POST['displayname']; ?>">
    </div>
  </div>
<div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">E-mail Address:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" 
	  placeholder="E-mail" maxlength="60" required
	  value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
    </div>
  </div>
<div class="form-group row" style="display:flex;">
    <div class="col-sm-12">
	<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Register">
	
	<a href="index.php" style="margin-top: 20px;">
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </a>
    </div>
	</div>
	
	</form>
</div>
<!-- Right-side Column Content Section -->
<?php include ("includes/footer.php" );?>
</footer>
</div>
</body>
</html>

