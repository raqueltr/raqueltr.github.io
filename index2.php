<?php

//Initializing variable
$value = ""; //Initialization value; Examples
             //"" When you want to append stuff later
             //0  When you want to add numbers later
//isset()
$value = isset($_POST['value']) ? $_POST['value'] : '';
//empty()
$value = !empty($_POST['value']) ? $_POST['value'] : '';

$name =  '' ;
$email = '' ;
$message =  '';
$human = '';
$from = '';
$to = '';
$subject = '';
$errName = '';
$errEmail = '';
$errMessage = '';
$errHuman = '';
$result='';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";



    if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Raquel tr Form';
    $to = 'raqueltravincas@gmail.com';
    $subject = 'Message from Raqueltr Website ';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

// Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
// Check if email has been entered
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
//Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
// Check if simple anti-spam has been entered
    if ($human !== 4) {
      $errHuman = 'Something went wrong, go back and try again!';
    }

// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
      if (mail ($to, $subject, $body, $from)) {
        $result='Thank You! I will be in touch';
      } else {
        $result='Sorry, there was an error sending your message. Please try again later';
      }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Raquel Travincas Designer | Front-End Dev |</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  </head>
  <body>
    <!-- navbar-->
      <nav class=" navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.html">Raquel Travincas Pinto</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="mainNavBar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#about">About</a></li>
                <li ><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>


  <!-- jumbotron -->
        <div class ="container-fluid hero header" id="about">
       <div class="row ">
          <div class="headshot">
        <img src="img/raquel.jpg" alt="Raquel's Headshot"/>
          </div>

        <h1> Raquel Travincas  <spam>(Designer/ Front-End Dev)</spam></h1>

        <p>I am currently location-undecided, mostly drawing dreams, discovering places and learning ancient and contemporary prowess.
         Also, I'm a bitcoin enthusiast! Check it out my Thesis: </p>

        <p>The rise of the Cloudworker: Work, Live, Learn and Play converging in Architecture</p>
       <button type="button" class="btn button">Download My CV</button>
       <button type="button" class="btn button">Download My Thesis</button>
      </div>
    </div>
   <!-- /jumbotron -->


<!-- portfolio -->
  <div class="container porfolio section clearfix" id="portfolio">  <!-- container Cool stuff I did -->
    <h1> Cool stuff I did </h1>
  <div class="row display-flex">    <!-- row web dev -->
        <div class= " col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
      <header><h3>Webdev Portfolio</h3> </header>
      <p> I am currently working on the startup Looks <p/>
      <p> You can find more information <a href="https://github.com/raqueltr/looks" target="_blank">here</a><p/>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 clearfix">
      <div class="thumbnail">
        <img src="img/looks_ui_1.png" alt="Looks user interface">
        <div class= "caption"> <p>Daily Voting</p> </div>
      </div>
    </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail">
          <img src="img/looks_ui_2.png" alt="Looks user interface">
          <div class= "caption"> <p>Vote 5 looks </p> </div>
      </div>
    </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail">
          <img src="img/looks_ui_3.png" alt="Looks user interface">
          <div class= "caption"> <p>Vote 10 looks </p> </div>
      </div>
    </div>
  </div>  <!-- /row web dev -->

  <div class="container">
    <div class="row display-flex">    <!-- row design -->
      <div class= " col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <br>
      <h3>Design Portfolio</h3>
        <br>
      </div>
          <div class= " col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <div class="thumbnail">
            <img src="img/FRK_Theather_Underpants.png" class="img-responsive img-fluid"> <!--no alt attributte is necessary due to caption -->
            <div class= "caption"> <p> Artwork for FRK English Theater: Play Underpants. You can find more information <a href="http://www.tlsfrankfurt.com/productions/the-underpants-at-the-internationales-theater-frankfurt" target="_blank">here</a></p>
              </div>
            </div>
          </div>

           <div class= " col-xs-6 col-sm-6 col-md-3 col-lg-3 clearfix ">
              <div class="thumbnail">
              <img src="img/Toystore.png" class="img-responsive img-fluid" >
                <div class= "caption"> <p> Children's book Artwork: Big Teddy Bear: The colorful new arrivals by Elaine Lombardi (Author). You can buy in Amazon <a href="https://www.amazon.com/Big-Teddy-Bear-colorful-arrivals/dp/0986128724/ref=sr_1_1?ie=UTF8&qid=1497789664&sr=8-1&keywords=Big+Teddy+Bear%3A+The+Colorful+New+Arrivals" target="_blank">here</a><p/>
                </div>
              </div>
          </div>


          <div class= "col-xs-6 col-sm-6 col-md-3 col-lg-3 clearfix">
             <div class="thumbnail">
              <img src="img/timburton_style.png" alt="tim burton style" class="img-responsive img-fluid">
              <div class= "caption"> <p>Personal project</p></div>
              </div>
          </div>

          <div class= " col-xs-6 col-sm-6 col-md-3 col-lg-3 clearfix">
             <div class="thumbnail">
              <img src="img/Cocktelcity.png" alt="Architecture project" class="img-responsive img-fluid">
              <div class= "caption"> <p>Archi project + 3D Modeling and render. ERASMUS  ENSA Paris Val de Seine</p>
                </div>
              </div>
          </div> <!-- /thumbnail -->
  </div>   <!-- /row designer -->
</div>
</div> <!-- /container Cool stuff I did -->


<!-- /portfolio -->



<!-- skills -->
<div class="container section">
  <div class="row">
     <h1> Skills </h1>
  </div>
  <div class="container">
  <div class="row ">
    <div class="col-sm-6 col-md-6 col-lg-6 vertical-center-row">
      <p class="text-center"> Photoshop, Illustrator, HTML5, CSS, JQuery, Bootstrap, Javascript, Skecth, SketchUp, AutoCad, Revit </p>
  </div>
      <div class="col-sm-6 col-md-6 col-lg-6 vertical-center-row">
     <ul class="robot">
      <li class="beep"></li>
      <li class="brain"></li>
      <li class="armleft"></li>
      <li class="armright"></li>
      <li class="torso"></li>
      <li class="foot"></li>
    </ul>
  </div>
</div>
    </div>
</div>  <!-- /container section -->
<!-- /skills -->


<!-- Blog Ideas -->
<div class="container blog section " id="blog">
<div class="row">
<h1 >Blog</h1>
<p> Inside my mind: ideas, insights and dreams.
<div class="row col-sm-12 col-md-12 col-lg-12 ">
  <div class=" col-sm-12 col-md-6 col-lg-3 ">
    <div class="card ">
      <img class="" src="" alt="">
      <div class="card-block">
        <h4 class="card-title">The autonomous Coworking Space: Creating Equitable Communities</h4>
        <p class="card-text">key words: coworking, ethereum</p>
        </div>
    </div>
  </div>


  <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="card ">
      <img class="" src="" alt="">
      <div class="card-block">
        <h4 class="card-title">Democracy: Cloud or Country ?</h4>
        <p class="card-text">key words: coworking, ethereum</p>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-3 ">
    <div class="card ">
      <img class="" src="" alt="">
      <div class="card-block">
        <h4 class="card-title">Democracy on the workplace: From Factory to Coworking</h4>
        <p class="card-text">key words: coworking, ethereum</p>
      </div>
    </div>
  </div>


  <div class="col-sm-12 col-md-6 col-lg-3 ">
    <div class="card ">
      <img class="" src="" alt="">
      <div class="card-block ">
        <h4 class="card-title">Close the door: Children Book</h4>
        <p class="card-text">key words: coworking, ethereum</p>
      </div>
    </div>
</div>
  </div>

<div class="col-sm-12 col-md-12 col-lg-12 clearfix">
  <a href="blog.html"> <button type="button" class="btn button">Got to blog and Read!</a></button>
</div>
</div>
</div>
<!-- /blog -->

<!-- Contact -->
<div class="section container-fluid contact clearfix col-sm-12 col-md-12 col-lg-12" id="contact" >
  <div class="row">
  <div class="container">
    <h1 > Contact </h1>
    <div class="col-sm-12 col-md-12 col-lg-12 clearfix ">
        <p> I'm currently living in Coimbra, Portugal but free to relocate. Please, get in touch! </p>
    </div>

         <div class="col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 clearfix ">
       <form method="post" action="index2.php">
         <div class="form-group">
           <label for="name">Name</label>
           <input name="name" type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
           </div>
           <?php echo "<p class='text-danger'>$errName</p>";?>
         <div class="form-group">
           <label for="email">Email address</label>
           <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
           </div>
           <?php echo "<p class='text-danger'>$errEmail</p>";?>
         <div class="form-group">
           <label for="message">Message</label>
           <textarea name="message" class="form-control" id="exampleTextarea" rows="3" placeholder="Enter message..."></textarea>
         </div>
         <?php echo "<p class='text-danger'>$errMessage</p>";?>
         <div class="form-group">
           <label for="human"> 2 + 2 ? </label>
           <input name="human" type="text" class="form-control" id="human" aria-describedby="name" placeholder="Your answer">
           </div>
           <?php echo "<p class='text-danger'>$errHuman</p>";?>
         <div class="form-group">
           <div class="col-sm-10 col-sm-offset-2">
             <?php echo $result; ?>
           </div>
         </div>

       <button type="submit" class="btn button">Submit</button>
       </form>
     </div>

      <div class="col-sm-12 col-md-12 col-lg-12 clearfix ">
        <p> E-mail: raqueltravincas @ [gmail] dot com </p>
        <p> Cel: [+ 351] 9670- 54331 </p>
      </div>

        </div>
  </div>
</div>
</div>
<!-- .contact -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
