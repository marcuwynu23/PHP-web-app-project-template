<?php 
  $ROUTES = [
   "home"=>"/views/index.php",
   "ROOT"=>"/views/index.php",
   "ABOUT"=>"/views/about.php",
   "ERROR"=>"/views/error.php"
  ];

  $request = $_SERVER['REQUEST_URI'];
  $req_method = $_SERVER['REQUEST_METHOD'];
?>