<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="assest/css/gridSystem.css">
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
            <!-- header information and user's image and role -->
            <?php include "template/header.php"; ?>

            <!-- statistics section -->
            <?php include "template/content/statistics.php"; ?>

	  <body>

      <!-- List of all modules included -->
        <?php include "template/content/moduleList.php"; ?>

        <!-- footer -->
        <?php include "template/footer.php"; ?>

 	  </body>
</html>
