<?php 
  
  $ROUTES = [
   "HOME"=>'/view/feature/index.php',
   "ROOT"=>"/view/feature/index.php",
   "ABOUT"=>"/view/feature/about.php",
   "ERROR"=>"/view/feature/error.php"
  ];


  $request = $_SERVER['REQUEST_URI'];
  $req_method = $_SERVER['REQUEST_METHOD'];
?>