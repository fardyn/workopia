<?php
require "../helpers.php";

$routs = [
  "/" => "controllers/home.php",
  "/listings" => "controllers/listings/index.php",
  "/listings/create" => "controllers/listings/create.php",
  "404" => "controllers/errors/404.php"
];

$uri = $_SERVER["REQUEST_URI"];


if (array_key_exists($uri, $routs)) {
  require(basePath($routs[$uri]));
} else {
  require(basePath($routs["404"]));
}
