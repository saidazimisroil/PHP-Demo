<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if($uri === '/') {
  require 'controllers/home.php';
} else {
  http_response_code(404);
  
  echo "Page not found";
}