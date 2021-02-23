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
          <div id="registrationform">
          <h1>Registration</h1>
         <div>Required fields are marked with an asterisk (*). 
             <form method="post" action= " ">
                 <div class="col-25"><label for="myname">*Name:</label></div>
                 <div class="col-75"><input type="text" name="myname" id="myname" required><br></div>
                 <div class="col-25"><label for="myage">*Age:</label></div>
                 <div class="col-75"><input type="text" name="myage" id="myage" required><br></div>
                 <div class="col-25"><label for="myrole">*Role:</label></div>
        <div class="col-75"><select size="1" name="myrole" id="myrole">
          <option>Choose Your Role</option>
          <option value="Athlete">Athlete</option>
          <option value="Volunteer">Volunteer</option>
            </select><br></div>
                 <div class="col-25"><label for="myphone">Phone:</label></div>
                 <div class="col-75"><input type="tel" name="myphone" id="myphone"><br></div>
                 <div class="col-25"><label for="myemail">*Email:</label></div>
                 <div class="col-75"><input type="email" name="myemail" id="myemail" required><br></div>
                 <label for="myecontactname">*Emergency Contact Name:</label>
                 <input type="text" name="myecontactname" id="myecontactname" required><br>
                 
                <label for="myecontactphone">Emergency Contact Phone Number:</label>
                 <input type="tel" name="myecontactphone" id="myecontactphone"><br>
                 <label for="mygender">*Gender Identification:</label>
        <select size="1" name="mygender" id="mygender">
          <option>Gender you identify with</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Non-binary/Other">Non-binary/Other</option>
            </select><br>
                 <label for="myshirtsize">*T-Shirt Size:</label>
        <select size="1" name="myshirtsize" id="myshirtsize">
          <option>Choose your size</option>
          <option value="Female XS">Female XS</option>
          <option value="Female S">Female S</option>
            <option value="Female M">Female M</option>
            <option value="Female L">Female L</option>
            <option value="Female XL">Female XL</option>
            <option value="Male XS">Male XS</option>
          <option value="Male S">Male S</option>
            <option value="Male M">Male M</option>
            <option value="Male L">Male L</option>
            <option value="Male XL">Male XL</option>
            </select> <br> 
                 <label for="mysatevent">*Saturday Event:</label>
        <select size="1" name="mysatevent" id="mysatevent">
          <option>Choose your event</option>
          <option value="Long Course Triathlon">Long Course Triathlon 7:00 AM</option>
          <option value="Olympic Triathlon">Olympic Triathlon 7:30 AM</option>
          <option value="10K">10K 7:15 AM</option>
          <option value="Half Marathon">Half Marathon 7:15 AM</option>
            </select> <br>
                 <label for="mysunevent">*Sunday Event:</label>
        <select size="1" name="mysunevent" id="mysunevent">
          <option>Choose your event</option>
          <option value="Sprint Triathlon">Sprint Triathlon 8:00 AM</option>
          <option value="Tri-a-Tri">Try-a-Tri 8:30 AM</option>
          <option value="Splash n Dash">Splash n Dash 12:00 PM</option>
            </select> <br>
                 <label for="mycomments">*Any special accomidations needed:</label>
                 <textarea name="mycomments" id="mycomments" rows="5" cols="20" required></textarea>
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