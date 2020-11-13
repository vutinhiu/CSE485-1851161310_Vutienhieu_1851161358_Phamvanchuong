<?php   
    
    require_once('includes/connect.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM fem where id=$id";
    $result = mysqli_query($dbcon, $sql);
    $row=mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php include("app/include/header.php");?>
    <div class="col-sm-8">
       <h2 class="h2 text-center"> Edit Register</h2>
        <form action='process-edit.php?id=<?php echo $row['id']?>' method="POST" onsubmit="return checked();"name="regform" id="regform">
            <div class="form-group row">
                <label for="first_name" class="col-sm-4 col-form-label">User name:</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="first_name" name="username" 
	            placeholder="username" maxlength="30" required
	            value="<?php  echo $row['username']; ?>" >
    </div>
  </div>
    <div class="form-group row">
        <label for="last_name" class="col-sm-4 col-form-label">Display name:</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="last_name" name="displayname" 
	      placeholder="displayname" maxlength="40" required
	      value="<?php echo $row['displayname']; ?>">
        </div>
    </div>
<div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" 
	  placeholder="E-mail" maxlength="60" required
	  value="<?php  echo $row['email']; ?>">
    </div>
  </div>
<div class="form-group row">
    <label for="password1" class="col-sm-4 col-form-label">Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password1" name="password1" 
	  placeholder="Password" minlength="8" maxlength="12" required
	  value="">
	  <span id='message'>Between 8 and 12 characters.</span>
    </div>
  </div>
<div class="form-group row">
    <label for="password2" class="col-sm-4 col-form-label">Confirm Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password2" name="password2" 
	  placeholder="Confirm Password" minlength="8" maxlength="12" required
	  value="">
    </div>
  </div>
    <div class="form-group row">
        <div class="col-sm-12">
	        <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Edit">
        </div>
	    </div>
	</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
