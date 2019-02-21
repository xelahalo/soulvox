<?php
  function setLanguage() {
    if(isset($_GET['lan'])){
      if ($_GET['lan'] == 'default') {
        include_once('languages/hu.php');
      }
      else {
        include_once('languages/en.php');
      }
    }
    else {
      include_once('languages/hu.php');
    }
  }
  setLanguage();
?>
