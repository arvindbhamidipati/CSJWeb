<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "demo@crunchpress.com";
    $email_subject = "New Contact Form Submission";
	$error_message = '';
    
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(
        !isset($_POST['email']) ||
        !isset($_POST['name']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
	$email_message .= "Name: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="css/calendar.css" media="screen">

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>The Church</title>
<meta name="description" content>
<meta name="author" content>
<link rel="icon"
type="image/png"
href="images/favicon.png">
<meta name="description" content>
<meta name="author" content>
<link rel="icon"
type="image/png"
href="images/favicon.png">
<meta name="description" content>
<meta name="author" content>
<link rel="icon"
type="image/png"
href="images/favicon.png">
<!-- CSS Style -->
<link rel="stylesheet" href="css/all.css" type="text/css" media="all">
<!-- ResponsiveCSS Style -->
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
<!-- CSS ShortCode -->
<link rel="stylesheet" href="css/shortcode.css" type="text/css" media="all">
<!-- Start JavaScript -->
<link rel="stylesheet" href="css/javascri.css" type="text/css" media="all">
<!-- gallery CSS -->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">
<!-- Start Player CSS -->
<link rel="stylesheet" href="css/player.css" type="text/css" media="all">
<!-- Style Switcher CSS -->
<link rel="stylesheet" href="css/default.css" id="stylesheet">
<!-- Megamenu CSS -->
<link rel="stylesheet" href="css/megamenu.css" type="text/css" media="screen" />
<script type="text/javascript">
function changeStyle(url) {
document.getElementById('stylesheet').href ='css/'+url;
}
</script>

<!-- End JavaScript -->
<!--[if lt IE 9]>
      <script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
<ul id="sheetswitch">
  <li><a href="#" class="default" onClick="changeStyle('default.css');return false;" >black</a></li>
  <li><a href="#" class="blue" onClick="changeStyle('blue.css');return false;" >white</a></li>
  <li><a href="#" class="green" onClick="changeStyle('green.css');return false;" >white</a></li>
  <li><a href="#" class="perpul" onClick="changeStyle('perpul.css');return false;" >white</a></li>
  <li><a href="#" class="brown" onClick="changeStyle('brown.css');return false;" >white</a></li>
</ul>
<div class="wrapper"> 
  <!-- header -->
  <div class="main">
    <div class="head-banner">
      <header id="header">
        <div class="header-wrapper">
          <div class="header-holder">
            <h1 id="logo"><a href="index.html">The Church</a></h1>
            <div class="nav">
              <ul class="menu menu_blue">
                <li><a href="index.html">Home</a></li>
                <li class="fullwidth"><a href="about.html" class="drop">About</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="images/ch-25.jpg" alt="">
                        <h2>John</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                      <div class="inner-col"> <img src="images/ch-27.jpg" alt="">
                        <h2>Mark</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>About Us</h2>
                      <div class="col_1 firstcolumn">
                        <ul>
                          <li><a href="team.html">Team</a></li>
                          <li><a href="timeline.html">Timeline</a></li>
                          <li><a href="sermons.html">Sermons</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="church-event.html" class="drop">Events</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="images/ch-25.jpg" alt="">
                        <h2>John</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                      <div class="inner-col"> <img src="images/ch-25.jpg" alt="">
                        <h2>Mark</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>Events</h2>
                      <div class="col_1 firstcolumn">
                        <ul>
                          <li><a href="event-detail.html">Event Detail</a></li>
                          <li><a href="event-venue.html">Event Venue</a></li>
                          <li><a href="news.html" class="drop">Latest News</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="blog.html" class="drop">Blog</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="images/ch-36.jpg" alt="">
                        <h2>John</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                      <div class="inner-col"> <img src="images/ch-29.jpg" alt="">
                        <h2>Mark</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>Blog</h2>
                      <div class="col_1 firstcolumn">
                        <ul class="plus">
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="blog-post.html">Blog Post</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="gallery.html" class="drop">Gallery</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="images/ch-28.jpg" alt=""> <img src="images/ch-29.jpg" alt=""> <img src="images/ch-30.jpg" alt=""> <img src="images/ch-31.jpg" alt=""> <img src="images/ch-32.jpg" alt=""> <img src="images/ch-33.jpg" alt=""> <img src="images/ch-34.jpg" alt=""> <img src="images/ch-35.jpg" alt=""> </div>
                    </div>
                    <div class="col_2">
                      <h2>Gallery</h2>
                      <div class="col_1 firstcolumn">
                        <ul class="plus">
                          <li><a href="gallery-singlepost.html">Gallery Column 1</a></li>
                          <li><a href="gallery-2.html"> Gallery Column 2</a></li>
                          <li><a href="gallery-3.html"> Gallery Column 3</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="#" class="drop">Pages</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col">
                        <iframe src="http://player.vimeo.com/video/8282393?badge=0" width="300" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>All Pages</h2>
                      <div class="col_1 firstcolumn">
                        <ul class="plus">
                          <li><a href="prayer-wall.html">Prayer Wall</a></li>
                          <li><a href="video.html">Videos</a></li>
                          <li><a href="prayer-request.html">Prayer Request</a></li>
                          <li><a href="service.html">Service</a></li>
                          <li><a href="404.html">404</a></li>
                          <li><a href="short-code.html">Short Code</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth">
                <li class="active"><a href="contact-us.html" class="drop">Contact</a>
                  <div class="dropdown_fullwidth first_fullwidth" id="contact-drop">
                    <div class="col_2 firstcolumn">
                      <h2>Contact Us</h2>
                      <div class="col_1 firstcolumn">
                        <form action="contact-form-1.php" method="post" name="contactform">
                          <fieldset>
                            <div class="row-contact">
                              <label>Name</label>
                              <input name="first_name" type="text" value="">
                            </div>
                            <div class="row-contact">
                              <label>Email</label>
                              <input name="email" type="text" value="">
                            </div>
                            <div class="row-contact">
                              <label>Message</label>
                              <textarea name="comments" id="comments" rows="42" cols="42"></textarea>
                            </div>
                            <input name="submit" type="submit" value="SUBMIT" class="submit-1">
                          </fieldset>
                        </form>
                        <ul class="blog-networks">
                          <li><a href="#" class="blog-twitter">twitter</a></li>
                          <li><a href="#" class="blog-flicker">flicker</a></li>
                          <li><a href="#" class="blog-facebook">facebook</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <form action="dummy" method="post">
                <select name="choice" size="1" onChange="jump(this.form)" class="chzn-results">
                  <option value="index.html">home</option>
                  <option value="about.html">About</option>
                  <option value="church-event.html">Events</option>
                  <option value="event-detail.htm.html"> - Event Detai</option>
                  <option value="event-venue.html"> - Event Venue</option>
                  <option value="news.html">Latest News</option>
                  <option value="blog.html"> - Blog</option>
                  <option value="blog-post.html"> - Blog Post</option>
                  <option value="news-pos.html"> - News Post</option>
                  <option value="gallery.html">Gallery</option>
                  <option value="gallery-singlepost.html.html"> - Gallery Template 1</option>
                  <option value="gallery-2.html"> - Gallery Template 2</option>
                  <option value="gallery-3.html"> - Gallery Template 3</option>
                  <option value="#">Pages</option>
                  <option value="prayer-wall.html">prayer wall</option>
                  <option value="prayer-wall.html"> - Prayer Wall</option>
                  <option value="prayer-request.html"> - prayer request</option>
                  <option value="service.html"> - Service</option>
                  <option value="404.html"> - 404</option>
                  <option value="team.html"> - team</option>
                  <option value="timeline.html"> - Timeline</option>
                  <option value="sermons.html"> - Sermons</option>
                  <option value="video.html"> - Video</option>
                  <option value="short-code.html"> - short-code</option>
                  <option value="contact-us.html">contact</option>
                </select>
              </form>
            </div>
          </div>
        </div>
      </header>
    </div>
    
    <!-- Content -->
    
    <!-- Start of 404 page-->

<section id="content_Wrapper" class="mbtm">
  <section class="container container-fluid">
    <section class="row-fluid">
      <section class="span12 error-page">
      <div class="holder">
        <h2>Thank You</h2>
        <p>Thank you for your submission, as soon as we get this we will get back to you shortly.</p>
        </div>
      </section>
    </section>
  </section>
</section>

<!-- End of 404 page-->
  </div>
  
  <!-- footer -->
  
  <footer class="footer">
    <div class="footer-holder">
      <div class="footer-frame">
        <div class="top">
          <div class=" holder">
            <div class="music-bar">
              <audio class="projekktor1 speaker dark">
                <source src="playlist.json" type="application/json"/>
              </audio>
            </div>
          </div>
        </div>
        <div class="bottom">
          <div class=" holder">
            <section class="grid-holder">
              <section class="grid">
                <article class="column c-one-fifth">
                  <div class="box">
                    <h5>blog posts</h5>
                    <p>Morbi a libero eget erat  
                      
                      Dec 15, 2012  |  JAMES
                      
                      Morbi a libero eget erat 
                      
                      cursus vitae id tortor. </p>
                    <a href="#" class="view-all">view all</a> </div>
                </article>
                <article class="column c-one-fifth">
                  <div class="box">
                    <h5>twitter <span class="footer-tweet"><a href="#">follow</a></span></h5>
                    <p> Ut sem lacus, porttitor et 
                      
                      eget, iaculis id lacus ipsum. <a href="#" class="view-all">http://is.gd/UuSBXf</a> 8 minutes ago</p>
                  </div>
                </article>
                <article class="column c-one-fifth">
                  <div class="box">
                    <h5>SERMON TIMINGS</h5>
                    <strong class="day">SUNDAY</strong>
                    <ul class="list">
                      <li>Morning 10:00 am</li>
                      <li>Afternoon 3:00 pm</li>
                      <li>Evening 6:00 pm</li>
                    </ul>
                  </div>
                </article>
                <article class="column c-one-fifth">
                  <div class="box">
                    <h5>ON THE MAP</h5>
                    <div class="f-map">
                      <div style="width:100%">
                        <iframe width="100%" height="100" src="http://regiohelden.de/google-maps/map_en.php?width=600&amp;height=100&amp;hl=en&amp;q=Wilhelmstra%C3%9Fe%204A%2C%2070182%20Stuttgart+(RegioHelden%20GmbH)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="column c-one-fifth">
                  <div class="box">
                    <h5>OUR ADDRESS</h5>
                    <address>
                    <span>45/923 AA, City Name,
                    Street 16, Stats, XYZ.</span>
                    </address>
                    <h5>NEXT EVENT IN:</h5>
                    <span class="time">24 Days : 7 Hrs : 24 Min</span> </div>
                </article>
              </section>
            </section>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<script src="js/jquery-1.js"></script><!-- jQuery library --> 
<script type="text/javascript" src="js/jquery.slideshow.js"></script><!-- jQuery main banner --> 
<script src="js/jquery-u.js"></script><!-- jQuery Ui --> 
<script src="js/sourtin-jquery.js"></script><!-- sourtin-jquery --> 
<script src="js/jqueryi-icon-menu.js"></script><!-- Js For all Small Style  --> 
<script src="js/tytabs.js"></script><!-- jQuery Plugin tytabs  --> 
<script type="text/javascript" src="js/speakker-big-1.2.02r134.min.js"></script> 
<script type="text/javascript" src="js/jquery-inner-slider.js"></script><!-- inner-slider --> 
<script src="js/jquery.timelinr-0.9.52.js"></script><!-- timline-slider --> 
<script src="js/browser-detect.js"></script> <!-- Browser-Detect --> 
<script src="js/sticky-header.js"></script> <!-- Sticky-header -->
<script src="js/jquery.countdown.js"></script>
</body>
</html>
<?php
}
?>