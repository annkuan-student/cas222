<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
      <title>Ace Events Template</title>
      <meta charset="utf-8">
      <link href="../style/stylereset.css" rel="stylesheet">
      <link href="../style/style.less" rel="stylesheet/less" type="text/css"> 
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script> 
    </head>
   <body>
      <header>
        <?php include '../includes/nav.inc.html.php'; ?>
          <button class="hamburger">&#9776;</button>
         <button class="cross">&#735;</button> 
      </header>
      <main>
          <div id="contactform">
          <h1>Contact Us</h1>
         <div>Required fields are marked with an asterisk (*). 
             <form method="post" action= " ">
        <div class="col-25">
            <label for="myname">*Name:</label></div>
                 <div class="col-75"><input type="text" name="myname" id="myname" required><br></div>
        <div class="col-25">
            <label for="myemail">*Email:</label></div>
                 <div class="col-75"> <input type="text" name="myemail" id="myemail" required><br></div>
                 <div class="col-25"><label for="myrole">*You are:</label></div>
       <div class="col-75"> <select size="1" name="myrole" id="myrole">
          <option>Choose Your Role</option>
          <option value="Athlete">Athlete</option>
          <option value="Volunteer">Volunteer</option>
          <option value="Interested Party">Interested Party</option>
           </select><br></div>
        <label for="mycomment">*Question or Comment:</label><br>
          <textarea name="mycomment" id="mycomment" rows="4" cols="20" required></textarea><br>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
             
         </div>
          </div>
      </main>
      <?php include '../includes/footer.inc.html.php'; ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="../style/style.js"></script>
   </body>
</html>