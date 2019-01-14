<!DOCTYPE html>
<html lang="DE">
	
  <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>YOUR_TITLE</title>	
  </head>
	
  <body>
      <marquee style="font-size: 15pt">
	<?php
	 $myfile = fopen('PATH/TO/YOUR_NEWSFILE.txt', 'r') or die('Something goes WRONG!');  //DEFINE YOUR FILE PATH
	 echo fgets($myfile);
	 fclose($myfile);
	?>
      </marquee>  
   </body>
</html>
