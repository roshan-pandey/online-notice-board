<?php
  session_start();
  session_destroy();
  unset($_SESSION['usn']);
  $_SESSION['message']="you are now logged out";
 header("location: iplstulogform.php");
?>