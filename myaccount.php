<?php 
include 'dbc.php';
page_protect();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Account</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li>
                <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li>
                <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li>
                <li><a href="portfolio-4-col.html">4 Column Portfolio</a></li>
                <li><a href="portfolio-item.html">Single Portfolio Item</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog-home-1.html">Blog Home 1</a></li>
                <li><a href="blog-home-2.html">Blog Home 2</a></li>
                <li><a href="blog-post.html">Blog Post</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="full-width.html">Full Width Page</a></li>
                <li><a href="sidebar.html">Sidebar Page</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="pricing.html">Pricing Table</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Welcome <?php echo $_SESSION['user_name'];?> </h1>
          

      </div>

      <div class="row">

        <div class="col-lg-12">
          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top">
<?php 
/*********************** MYACCOUNT MENU ****************************
This code shows my account menu only to logged in users. 
Copy this code till END and place it in a new html or php where
you want to show myaccount options. This is only visible to logged in users
*******************************************************************/
if (isset($_SESSION['user_id'])) {?>
<div class="myaccount">
  <p><strong>My Account</strong></p>
  <a href="myaccount.php">My Account</a><br>
  <a href="mysettings.php">Settings</a><br>
    <a href="logout.php">Logout </a>
	</div>
<?php }
if (checkAdmin()) {
/*******************************END**************************/
?>
      <p> <a href="admin.php">Admin CP </a></p>
	  <?php } ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>&nbsp;</p>
      <p>This is the my account page</p>

	 
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
        </div>

      </div>

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p align="center">Jake O'Donohoe C3295319</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
  </body>
</html>