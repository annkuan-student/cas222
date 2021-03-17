<!DOCTYPE html>
<html>
<head>
	<title>slider in Javascript</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/sliderstyle/style.css">
    <link href="style/stylereset.css" rel="stylesheet">
      <link href="style/style.less" rel="stylesheet/less" type="text/css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
</head>
<body>
  <header>
          <a href="index.php"><img src="images/logo_white.png" alt="AceLogo"></a>
        <?php include 'includes/nav.inc.html.php'; ?>
          <button class="hamburger">&#9776;</button>
         <button class="cross">&#735;</button> 
      
    </header>
    
    <main>
         <div class="about">
             <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds.</p> <br><p>We offer Events for Every Body.</p>
            </div>
          
         <div class="upcomingevents">
             <h1>Upcoming Events</h1>
             <p>The Annual <b>Ace in the Hole Multisport Weekend</b> is a legendary event in the Oregon triathlon and running community that takes place March 27th and 28th, 2021. It has become a traditional destination race for athletes from across the nation.</p>
             <div class="collage" role="img" aria-label="collage"></div>
             <div class="registerbutton"><button><a href="event/index.php">Learn more about the event!</a></button></div></div>
         
        <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image: url('images/slider1.png')">
            <div class="container">
                <div class="caption">
                    <h1>Upcoming Event - Multisport Weekend</h1>
                    <p><b>March 27th and 28th, 2021</b><br> The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community</p>
                    <a href="event/index.php">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('images/slider2.png')">
            <div class="container">
                <div class="caption">
                    <h1>Events for Every Body</h1>
                    <p>There are no limits to what you can do.</p>
                    <a href="about/index.php">About Us</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('images/slider3.png')">
            <div class="container">
                <div class="caption">
                    <h1>Need to Contact Us?</h1>
                    <p>Use our convenient Contact Form!</p>
                    <a href="contact/index.php">Contact Form</a>
                </div>
            </div>
        </div>
     </div>
   
    <!-- controls  -->
    <div class="controls">
        <div class="prev"></div>
        <div class="next">></div>
    </div>

    <!-- indicators -->
    

  </section>
        
        
          <div class="socialfeeds">
            <h1>What Are We Up To?</h1>  
          <div class="fb">
              <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a></blockquote></div></div>
         <div class="twitter">
             <a class="twitter-timeline" data-width="500" data-height="500" data-theme="dark" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
         </div>
          
      </main>
    <?php include 'includes/footer.inc.html.php'; ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>     
    <script src="style/style.js"></script>
    <script src="style/sliderstyle/script.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="8n6rYIIO"></script>


</body>
</html>



