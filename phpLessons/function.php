<?php
    function sayhello($user)
      {
        echo "Hello  ".$user;
      }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php

     $userName = "wilson";?>
     <h1><?php sayhello($userName); ?></h1>
      

   </body>
 </html>
