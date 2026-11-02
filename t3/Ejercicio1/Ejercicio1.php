<?php

    function generaCadenaAleatoria($longitud = 5) { 
  $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  $base = strlen($charset); 
  $result = '';
  $now = explode(' ', microtime())[1];
  while ($now >= $base){
    $i = $now % $base;
    $result = $charset[$i] . $result;
    $now /= $base;
  }
  return substr($result, -5);
}

    if (isset($_COOKIE['visitao'])) {
        if ($_COOKIE['visitao'] == 1) {
            echo generaCadenaAleatoria(random_int(1,5));
        }
    }else 
    {
        echo 'PRIMERA VEZ';
        setcookie('visitao',1);
    }
?>