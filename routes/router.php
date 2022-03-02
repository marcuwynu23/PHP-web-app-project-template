<?php 
include "constants/constants.php";
function setRouterConfiguration($root,$request,$method){
  switch ($request) {
    case '/' :
      return require $root . '/views/features/index.php';
    case '/about' :
      return require $root . '/views/features/about.php';
    case '/help' :
      return require $root . '/views/features/help.php';
    default:
      http_response_code(404);
      return require $root . '/views/error.php';
  }
}
?>