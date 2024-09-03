<?php
  session_start();
  if(!isset($_SESSION['aut']) || $_SESSION['aut'] != 'SIM'){
    header('Location: index.php?login=erro2');
  };
?>