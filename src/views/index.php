<?php 

if ($_POST['submit']) {

	if (!$_POST['name']){
		$error= "<br/>-Please enter your name.";
	}
	if (!$_POST['email']){
		$error.= "<br/>-Please enter your email.";
	}
	if (!$_POST['dateOfBirth']){
		$error.= "<br/>-Please enter your date of birth.";
	}
	if (!$_POST['telNumber']){
		$error.= "<br/>-Please enter your mobile number.";
	}
	if (!$_POST['checkbox']){
		$error.= "<br/>-Please  you are a female or male.";
	}

	if ($error){

		$result= '<div class="alert alert-danger" role="alert"><strong>...Whoops there is an error.</strong><br/> Please correct the following: '.$error.'</div>';
	}
	 else {
		
		$result= '<div class="alert alert-success" role="alert">
Succesfully filled in information, continue to begin</div>';
		
	}


}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/style.css">

  </head>
  <body>
  

  <section id="contact">
  	<div class="container">
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Contact Information</h1>
				<p>We don't save your info, this is solely for on your certificate!</p>
				<?php  echo $result; ?>
				<form method="post" role="form">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>"></input>
					</div><!--form-group-->

					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>" ></input>
					</div><!--form-group-->

					<div class="form-group">
						<input type="date" name="dateOfBirth" class="form-control" placeholder="Your date of birth" value="<?php echo $_POST['dateOfBirth']; ?>"></input>
					</div><!--form-group-->

					<div class="form-group">
						<input type="tel" name="telNumber" class="form-control" placeholder="Your mobile number" value="<?php echo $_POST['telNumber']; ?>"></input>
					</div><!--form-group-->

					<div class="row">
					  <div class="col-md-6">
					    <div class="input-group">
					      <span class="input-group-addon">
					        <input type="checkbox" class="radio" value="1" name="checkbox">
					      </span>
					      <input type="text" class="form-control" placeholder="Male" readonly="">
					    </div><!-- /input-group -->
					  </div><!-- /.col-md-6 -->

					  <div class="col-md-6">
					    <div class="input-group">
					      <span class="input-group-addon">
					        <input type="checkbox" class="radio" value="1" name="checkbox">
					      </span>
					      <input type="text" class="form-control" placeholder="Female" readonly="">
					    </div><!-- /.input-group -->
					  </div><!-- /.col-md-6 -->
					</div><!-- /.row -->


					<div align="center">
						<input type="submit" name="submit" class="btn btn-secondary" value="Next"></input>
					</div><!--/align-->

					


				</form>

			</div><!-- /.col-md-6 -->

		</div><!-- /.row -->

  	</div><!-- /.container -->






    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

  </body>
</html>