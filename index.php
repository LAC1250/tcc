<?php
    define("APP","http://localhost/TCC/");
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "autoload.php";

    if(!isset($_GET['url'])){
      $url = "login/login";
    }else{
      $url = $_GET['url'];
    }
    $separador = explode ('/', $url);
    $controlador = ucfirst($separador[0]).'Controller';
    $acao = $separador[1];

    $controller = new $controlador();
    if(isset($separador[2])){
        $controller -> $acao($separador[2]);
    }else{
        $controller -> $acao();
    }


?>
