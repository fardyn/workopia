<?php

/**
 * get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = "")
{
  return __DIR__ . "/" . $path;
}


/**
 * Load a views
 * 
 * @param string $name
 * @return void
 * 
 */

function loadView($name)
{
  $loadViewPath = basePath("views/{$name}.view.php");

  if (file_exists($loadViewPath)) {
    require $loadViewPath;
  } else {
    echo "View not found '{$name}'!";
  }
}




/**
 * Load a views
 * 
 * @param string $name
 * @return void
 * 
 */
function loadPartial($name)
{
  $partailPath = basePath("views/partials/{$name}.php");

  if (file_exists($partailPath)) {
    require $partailPath;
  } else {
    echo "Partial not found '{$name}'!";
  }
}
