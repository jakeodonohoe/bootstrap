<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Services - Modern Business - Start Bootstrap Template</title>

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
             <li><a href="index.html">Home</a></li>
            <li class="active"><a href="about.html">About</a></li>
            <li><a href="newsfeed.html">News</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="JSON_multi_album_gallery.html">Images</a></li>
             <li><a href="characters.html">Characters</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">About Sharpe</h1>
         
        </div>

      </div><!-- /.row -->

      <div class="row">
      
        <div class="col-lg-12">
          <img class="img-responsive" alt="picture" src="images/about.jpg" width="750" height="500">
        </div>

      </div><!-- /.row -->

      <!-- Service Paragraphs -->

      <div class="row">    

      </div><!-- /.row -->

      <!-- Service Tabs -->

      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-header">Tabbed Services</h2>
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#service-one" data-toggle="tab">The Books</a></li>
            <li><a href="#service-two" data-toggle="tab">The Series</a></li>
            <li><a href="#service-three" data-toggle="tab">The Author</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="service-one">
              
              <p>The non-fiction books were written by Bernard Cornwell. The books  follow Richard Sharpe in the British army from 1799-1821. Starting as a Private  soldier in India, Sharpe exceeds himself to rise to Sargent and further still. As  the books continue Sharpe&rsquo;s career continues in the battle for Europe under the  command Sir Arthur Wellesley.</p>
              <h2>Sharpe Books</h2>
   
    
<p>
<?php
// PHP file that renders perfect Dynamic XML for MySQL Database result sets
// Script written by Adam Khoury @ www.developphp.com - April 05, 2010
// View the video that is tied to this script for maximum understanding
// -------------------------------------------------------------------
header("Content-Type: text/xml"); //set the content type to xml
// Initialize the xmlOutput variable
$xmlBody = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$xmlBody .= "<XML>";
// Connect to your MySQL database whatever way you like to here
mysql_connect("localhost","jakeodon","0u!0fash0E") or die (mysql_error());
mysql_select_db("jakeodon_login") or die ("no database");
// Execute the Query on the database to select items(20 in this example)
$sql = mysql_query("SELECT * FROM Books ORDER BY id DESC LIMIT 0, 20");
while($row = mysql_fetch_array($sql)){
    // Set DB variables into local variables for easier use 
    $id = $row["id"]; 
    $title = $row["title"];  
    $date_time = strftime("%b %d, %Y", strtotime($row["date_time"])); 
    $description = $row["description"];  
    // Start filling the $xmlBody variable with looping content here inside the while loop 
    // It will loop through 20 items from the database and render into XML format
    $xmlBody .= '
<Book> 
    <id>' . $id . '</id> 
    <title>' . $title . '</title>
    <year>' . $title . '</year>
    <description>' . $description . '</description>
</Book>';
} // End while loop
mysql_close(); // close the mysql database connection
$xmlBody .= "</XML>";
echo $xmlBody; // output the gallery data as XML file for flash
?>
</p>
              <p>&nbsp;</p>
              
            </div>
            <div class="tab-pane fade" id="service-two">
              
              <p>Europe is at war sir Arthur Wellesley to be Lord Wellington commands the British army fighting Napoleon Bonaparte. Richard Sharpe played by Sean Bean commands his chosen fighting the French. Fighting in Portugal, Spain and France Richard Sharpe rises above his post in Wellington’s army.  Sharp makes many friends and enemies along his way. Follow Richard Sharpe the great British hero in the series.</p>
            </div>
            <div class="tab-pane fade" id="service-three">
             
              <p>Bernard Cornwell was born in London in 1944 – a &lsquo;warbaby&rsquo; – whose father was a Canadian airman and mother in Britain&rsquo;s Women&rsquo;s Auxiliary Air Force.</p>
        <p>He was adopted by a family in Essex who belonged to a religious sect called the Peculiar People (and they were), but escaped to London University and, after a stint as a teacher, he joined BBC Television where he worked for the next 10 years.</p>
        <p>He began as a researcher on the Nationwide programme and ended as Head of Current Affairs Television for the BBC in Northern Ireland. It was while working in Belfast that he met Judy, a visiting American, and fell in love. Judy was unable to move to Britain for family reasons so Bernard went to the States where he was refused a Green Card. He decided to earn a living by writing, a job that did not need a permit from the US government – and for some years he had been wanting to write the adventures of a British soldier in the Napoleonic wars – and so the Sharpe series was born. Bernard and Judy married in 1980, are still married, still live in the States and he is still writing Sharpe.</p>
            </div>
            <div class="tab-pane fade" id="service-four">
             
            </div>
          </div>
        </div>
			
      </div><!-- /.row -->
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p align="center">Jake O'Donohoe C3295319</p>
             <p align="center"><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.jakeodonohoe.co.uk%2Fbootstrap%2Fabout.html"><img class="img-validate" alt="validate" src="images/validate.jpg" width="30" height="20"></a></p>
            <p>&nbsp;</p>
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