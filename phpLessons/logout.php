<?php

      session_start();
      unset($_SESSION['Uname']); //destroys session
     header('location:session.php')

 ?>
