<?php
  abstract class Controller{
    protected $template = "template";
    public function view($visao, $dados){
      extract($dados);
      $arquivo = "views/$visao.php";
      require_once "views/$this->template.php";
    }
    public function redirect($visao){
      header('location: '.APP.$visao);
    }
  }

 ?>
