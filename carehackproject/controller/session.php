<?php
  if(!$_SESSION['logged_in'])
      {
        header("Location:../index.php");
      }
?>