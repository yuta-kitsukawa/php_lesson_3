<?php
sql_autoload_register(function($class){
  $prefix = 'kids\\';
  if (strpos($class, $prefix) === 0)
  {
    $className = substr($class, strlen($prefix)); //substr文字の切り取り
    $classFilePath = __DIR__ . '/../lib/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($classFilePath))
    {
      require $classFilePath;
    }
  }
});
