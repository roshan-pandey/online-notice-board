<?php
  session_start();
  session_destroy();
  unset($_SESSION['fid']);
  $_SESSION['message']="you are now logged out";
 header("location: iplfaclogform.php");
?>