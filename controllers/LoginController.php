<?php
  class LoginController extends Controller{
    public function login(){
      $dados = array();
      $this->view("login", $dados);
    }
    public function logar(){
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $model = new Usuario();
      $usuario = $model->getByEmail($email);
      if($usuario == null){
        setcookie("erro", "Email incorreto");
        setcookie("email", $email);
        $this->redirect("login/login");
      }else{
        if(md5($senha) != trim($usuario['senha'])){
          setcookie("erro", "Senha incorreta");
          setcookie("email", $email);
          $this->redirect("login/login");
        }else{
          setcookie("erro");
          if(!isset($_SESSION)){
            session_start();
          }
          $_SESSION['id_usuario'] = $usuario['id'];
          $this->redirect("musica/listar");
        }
      }
    }
    public function logout(){
      if(!isset($_SESSION)){
        session_start();
      }
      session_destroy();
      $this->redirect("login/login");
    }
  }
?>
