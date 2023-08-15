<?php

spl_autoload_register(function($class) {
  if(file_exists('classe/' .$class. '.php')) {
    require 'classe/' .$class. '.php';
  }
});  