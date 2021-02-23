<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=annkuanw_aceevents', 'annkuanw_aceuser', 'TheFirstDay!2345');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

if (isset($_POST['myemail']))
  {
          $myname = $_POST['myname'];
          $myrole = $_POST['myrole'];
          $myemail = $_POST['myemail'];
          $mycomment = $_POST['mycomment'];
    try {
      $sql = 'INSERT INTO contact SET
          name = :name,
          role = :role,
          email = :email,
          comment = :comment';
      $s = $pdo->prepare($sql);
        $s->bindValue(':name', $myname);
        $s->bindValue(':role', $myrole);
        $s->bindValue(':email', $myemail);
        $s->bindValue(':comment', $mycomment);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted joke: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
include 'success.html.php';
                      } else {
                          include 'contact.html.php';
                      }
    
  
                      
    ?>
