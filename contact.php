<?php

  if ($_POST["submit"]) {

     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }

     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }

     if (!$_POST['comment']) {

       $error.="<br />Please enter a messsage";

     }

    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

      $error.="<br />Please enter a valid email address";

     }

     if ($error) {

      $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';

      } else {

      if (mail("scott@sundaynight.ca", "Comment from website!", "Name: " .$_POST['name'] ."

      Phone number: " .$_POST['phone']."

      Email: " .$_POST['email']."

      Comment: ". $_POST['comment'])) {

        $result='<div class="alert alert-success"><strong>Thank you. Your form has been submitted!</strong></div>';

      } else {

      $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';

      }
    }
  }
?>

<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunday Night Entertainment</title>
  <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>
  <link href = "styles.css" rel = "stylesheet">
</head>

<body>
  <main id="page" role="main">

    <div class = "navbar navbar-inverse navbar-inner nav-contact navbar-static-top">
      <div id="bg-image" class="black"></div>
        <div class="container">
          <a href="http://sundaynight.ca/index.html" class="navbar-brand">
            <image class="sne-logo img-responsive" src="images/sne_logo_0710.png">
          </a>

          <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar icon-bar-1"></span>
            <span class="icon-bar icon-bar-2"></span>
            <span class="icon-bar icon-bar-3"></span>
          </button>

        <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class ="nav navbar-nav navbar-right">
            <li><a href="index.html">HOME</a></li>
            <li><a href = "projects.html">PROJECTS</a></li>
            <li><a href="press.html">PRESS</a></li>
            <li><a href="resume.html">RESUME</a></li>
            <li class="active"><a href="#">CONTACT</a></li>
        </ul>
        </div>  <!-- NAVIGATION COLLAPSE -->
        <div class="blurb">
          <h2 id = "company_name_masthead_top" class="above-title">
            <p>The quickest way...</p>
          </h2>
          <p id="company_name_masthead_bottom">to get in touch</p>
        </div>
      </div> <!-- CONTAINER NAV -->

    </div>

<!-- EVERYTHING AFTER THE BANNER AND BEFORE THE FOOTER STARTS HERE -->

<div class="container-fluid contact_page_top">
  <div class="row" class = "contact_info">
    <div class = "contact_info col-md-5">
      <h2 class = "contact_us">Contact Information</h2>
      <p class = "contact_info">
        <a href = "tel:+14169194829" class = "phone-number">416.919.4829</a><br>
        <a href = "mailto:scott@sundaynight.ca" class = "email">scott@sundaynight.ca</a><br>
        199 Clinton Street<br>
        Toronto, Ontario | M6G 2Y4
      </p>
      <div id="contact"class="btn-group download_cv" role="group" aria-label="...">
        <a id="contact" type="button"class="button-link btn-black btn-primary btn-lg outline" href ="pdf/scott_harper_cv.pdf">DOWNLOAD CV</a>
      </div>
    </div> <!-- contact info -->

    <div class="col-md-2"></div>
    <div class="col-md-4 img-resp">
      <center>
        <img class = "shatner img-responsive" src = "images/scott_and_shatner.jpg">
      </center>
    </div>
    <div class="col-md-1"></div>

  </div>

    <div class = "section_break_rule">
        <hr width="75%">
    </div>

</div> <!-- end of contact information -->

<div class="container-fluid"> <!-- contact form and google map -->

<div class="col-md-1"></div>
    <form method="post">
      <div class="col-md-4">
        <div class="form-group">

        <?php echo $result; ?>

          <!-- <label for="name">Name:</label> -->
          <input type="text" name="name" class="form-control" placeholder="Name:" value="<?php echo $_POST['name']; ?>" />

        </div>

        <div class="form-group">

         <!--  <label for="email">Email Address:</label> -->
          <input type="email" name="email" class="form-control" placeholder="Email Address:" value="<?php echo $_POST['email']; ?>" />

        </div>

        <div class="form-group">

          <!-- <label for="phone"> Phone number:</label> -->
          <input type="phone" name="phone" class="form-control" placeholder="Phone number:"  />

        </div>

        <div class="form-group">

          <!-- <label for="comment">Message:</label> -->
           <textarea rows="4"name="comment" class="form-control" placeholder="Message:" ><?php echo $_POST['comment']; ?></textarea>

        </div>

        <input type="submit" name="submit" class="btn btn-success btn-md" value="Submit">
      </div>
    </form>

  <div class="col-md-1"></div>

<!--Google Map -->

  <div id="map-container" class="col-md-4"></div>
  <div class="col-md-2"></div>

</div>

<!--Start of the Footer -->

<footer class = "site-footer">
    <div class = "pre-footer">
      <h2 class = "pre-footer-text">For sales information please contact:
        <a class="contact-person" href="mailto:alexandra@beyonddistribution.com" target="_top" class = "beyond">alexandra@beyonddistribution.com</a>
      </h2>
    </div>

    <div class="bottom-footer">

      <div class = "footer-logo">
        <center>
          <img src="images/sne_logo_0710.png" alt="Alternate Logo">
        </center>
      </div>

      <p class = "copyright">&copy; Sunday Night Entertainment 2015</p>

         <div class="social-media">

          <a href="http://www.imdb.com/name/nm1838835/">
            <img src="images/imdb_logo.png" alt="IMDB Logo" class="social-icon">
          </a>

          <a href = "mailto:scott@sundaynight.ca" class = "email">
            <img src="images/envelope_icon.png" alt="email link" class="social-icon">
          </a>

          <a href="https://vimeo.com/user40751510">
            <img src="images/vimeo_logo.png" alt="vimeo logo" class="social-icon">
          </a>
        </div>

    </div>
</footer>

<!-- End of the footer -->

  </main>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>

function init_map() {
    var var_location = new google.maps.LatLng(43.659275, -79.415151);

        var var_mapoptions = {
          center: var_location,
          zoom: 17
        };

    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title:"Sunday Night Entertainment"});

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

            var_marker.setMap(var_map);
      }

google.maps.event.addDomListener(window, 'load', init_map);

</script>
<script src="js/sundaynight.js"></script>
</body>
</html>