<?php 
include "constants/constants.php";
function setRouterConfiguration($root,$request,$method){
  switch ($request) {
    case '/' :
      return require $root . '/views/index.php';
    case '/about' :
      return require $root . '/views/about.php';
    default:
      http_response_code(404);
      return require $root . '/views/error.php';
  }
}
?>