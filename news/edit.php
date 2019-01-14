<html>
  <body>
    <p><b>News editor</b></p>
  <?php

          $myfile = fopen("YOUR_VERSION_FILE.txt.txt", "r") or die("Something goes WRONG!");
          $version = fgets($myfile);
          fclose($myfile);
      
      if ($_POST['pw'] == 'TYPE_HERE_YOUR_PASSWORD') {
  
          //CLEAR THE CONTENT OF THE TXT FILE
          fclose(fopen('YOUR_NEWS_FILE.txt', 'w'));
  
          // WITHE THE NEW CONTENT IN YOUR FILE
          $handle = fopen('YOUR_NEWS_FILE.txt', 'w') or die('Something goes WRONG!');
          $news =  $_POST['news'];
          fwrite($handle, $news);
          fclose($handle);
      
      $message = '<p class="center">Successfuly Updated!</p>'; // Message if the Edit was successful
      $title = 'Successful!'; 
      
      } else {
          $message = 'Wrong Password! <br> <br>';
          $message .= "Your text: {$_POST['news']}<br>";
      
      $title = 'ERROR!';
      }
  
  ?>

  <link type="text/css" rel="stylesheet" href="/PATH/TO/style.css">  <--! Add some CSS if you WANT! -->

  <head>
    <title><?php echo $title ?></title> <--! Change the Title wit the Status -->
  </head>

    <p class='center'><?php echo $message ?></p> <--! Displayes The status message! -->

    <br>
    <p class='center'><a href="LINNK_TO_YOUR_INDEX">Back to the Editor (Click)</a>
    <a href="LINK_TO_YOUR_HOMEPAGE">Back to Homepage (Click)</a></p>
    <p class='center' style="color:red"><b><?php echo $version ?></b></p>
  </body>
</html>
