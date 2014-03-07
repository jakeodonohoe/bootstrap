<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet" type="text/css" media="screen" />
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
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
           <ul class="nav navbar-nav navbar-right">
           <li><a href="index.html">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="newsfeed.html">News</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li><a href="JSON_multi_album_gallery.html">Images</a></li>
             <li><a href="characters.html">Characters</a></li>
              </ul>
            </li>
           
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact Us</h1>
        </div>
        
        <div class="col-lg-12">
          <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps/ms?msa=0&amp;msid=210898998056342093442.0004e851a45ca0c403531&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=45.429299,1.669922&amp;spn=14.804186,28.125&amp;z=5&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.co.uk/maps/ms?msa=0&amp;msid=210898998056342093442.0004e851a45ca0c403531&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=45.429299,1.669922&amp;spn=14.804186,28.125&amp;z=5&amp;source=embed" style="color:#0000FF;text-align:left">Sharpe</a> in a larger map</small>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
             <form method="post" action="send.php">
        
    <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>
    
    <label>*What is 2+2? (Anti-spam)</label>
<input name="human" placeholder="Type Here">

 <input id="submit" name="submit" type="submit" class="btn btn-primary" value="Submit">
        
</form>                         
        </div>

        

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

        <p align="center">Jake O'Donohoe C3295319</p>

    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    
  </body>
</html>