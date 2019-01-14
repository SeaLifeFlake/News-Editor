<!DOCTYPE html>
<html>
<?php
  //DEFINE YOUR TXT FILES HERE!
  $myfile = fopen("YOUR_VERSION.txt", "r") or die("SOMETHING goes WRONG!");
  $version = fgets($myfile); //DEFINE YOUR VERSION VARIABLE
  fclose($myfile);
  
  $afile = fopen("YOUR_NEWSFILE", "r") or die("SOMETHING goes WRONG!");
  $inhalt = fgets($afile); //DEFINE YOUR CONTENTS 
  fclose($afile);
?>
<!-- if you WANT ADD SOME CSS HERE -->
<link type="text/css" rel="stylesheet" href="/PATH/TO/style.css">

 <head>
  <title><?php echo $version?></title> <!-- FOR YOUR VERSION VARIABLE -->
 </head>

 <body id="SOME_ID_OR_DELETE"> <!-- ADD SOME CSS ID OR CLASS IF YOU WANT -->
  <p><b>News editor</b></p> //TILE
  <form action="edit.php" method="post">
    Update your News!<br>
    <textarea type="text" name="news" cols='200'><?php echo $inhalt ?></textarea><br>
    Password:<br>
    <input type="password" name="pw"><br>
    <input type="submit" value="Update">
  </form>
  <br>
  <p class="center"><a href="LINK_TO_YOUR_HOMEPAGE">Zurück zur Homepage(Klick)</a></p> <!-- Some Hyperlinks! -->
  <br>
  <p style="color:red"><b><?php echo $version?></b></p>  <!-- Displays your Version -->
 </body>
</html>
