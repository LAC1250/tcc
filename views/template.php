<?php
  if(!isset($_SESSION)){
    session_start();
  }
    if(isset($_SESSION['id_usuario'])){
      $id_usuario = $_SESSION['id_usuario'];
      $model = new Usuario();
      $usuarioLogado = $model -> getById($id_usuario);
    }else{
      $usuarioLogado['email'] = "";
      $usuarioLogado['id'] = 0;
      if($arquivo != "views/login.php"){
        header("location: ".APP."login/login");
        exit(0);
      }
    }
 ?>
 <style media="screen">
   nav>div{
     color: black;
   }
 </style>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>C.Y.S</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-transparent">
    <div class="container-fluid">
      <ul class="navbar-nav ext-end">
        <li class="nav-item dropdown ml-auto">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu de Cadastros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo APP. "musica/listar"; ?>">Musicas</a></li>
            <li><a class="dropdown-item" href="<?php echo APP. "genero/listar"; ?>">Genêros</a></li>
            <li><a class="dropdown-item" href="<?php echo APP. "tempo/listar"; ?>">Tempos Verbais</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item d-flex justify-content-around">
          <?php
          $caminho = APP;
          if($usuarioLogado['id'] != 0){
            echo "<a class='nav-link active' aria-current='page' href='$caminho/login/logout'> Sair</a>";
          }else{
            echo "<a class='nav-link active' aria-current='page' href='$caminho/login/login'> Acessar</a>";
          }
           ?>
        </li>
      </ul>
    </div>
  </nav>
  <p class="text-end">Perfil: <?php echo $usuarioLogado['email']; ?></p>
    <div class="container-fluid">
      <?php
      if(isset($arquivo)){
        require_once $arquivo;
      }
       ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
