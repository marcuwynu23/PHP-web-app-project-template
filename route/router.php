<?php 
include "constant/constants.php";

function setRouterConfiguration($root,$request,$method){
  switch ($request) {
    case '/' :
      return require $root . '/view/feature/index.php';
    case '/about' :
      return require $root . '/view/feature/about.php';
    case '/help' :
      return require $root . '/view/feature/help.php';
    default:
      http_response_code(404);
      return require $root . '/view/error.php';
  }
}
?>