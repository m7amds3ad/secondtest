<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="assest/css/gridSystem.css">
        <link rel="stylesheet" type="text/css" href="assest/css/style.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assest/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="assest/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="assest/js/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="assest/js/bootstrap.min.js"></script>

        <title>Welcome</title>
    </head>
	  <body>
      <div class="login-form">
          <form action="/examples/actions/confirmation.php" method="post">
              <h2 class="text-center">Sign In</h2>
              <div class="form-group">
              	<div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Username" required="required">
                  </div>
              </div>
      		<div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="Password" required="required">
                  </div>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Log in</button>
              </div>
              <div class="clearfix">
                  <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                  <a href="#" class="pull-right">Forgot Password?</a>
              </div>
          </form>
          <p class="text-center small">Don't have an account! <a href="#">Sign up here</a>.</p>
      </div>
 	  </body>
</html>
