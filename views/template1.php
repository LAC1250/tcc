<?php
  $caminho = APP;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo $caminho; ?>/Style/stylehome.css'>
    <link rel="stylesheet" href='<?php echo $caminho; ?>/Style/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>C.Y.S - Aprendendo Inglês com Músicas</title>
  </head>
  <style media="screen">
  body{
    margin: auto;
    background-image: url(../Style/index.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
  .circles{
    width: 100%;
  }
  #menu{
      width: 35px;
      height: 30px;
      margin: 30px 0 20px 20px;
      cursor: pointer;
     }
     .bar{
      height: 5px;
      width: 100%;
      background-color: white;
      display: block;
      border-radius: 5px;
      transition: 0.3s ease;
     }
     #bar1{
      transform: translateY(-4px);
     }
     #bar3{
      transform: translateY(4px);
     }
     .nav li a {
      color: black;
      text-decoration: none;
     }
     .nav li a:hover{
      font-weight: bold;
     }
     .nav li{
      list-style: none;
      padding: 16px 0;
     }
     .nav{
      padding: 0;
      margin: 0 20px;
      transition: 0.3s ease;
      display: none;
     }
     .menu-bg, #menu-bar{
      top: 0;
      left: 0;
      position: absolute;
     }
     .menu-bg{
      z-index: 1;
      width: 0;
      height: 0;
      margin: 30px 0 20px 20px;
      border-radius: 50%;
     }
     #menu-bar{
      z-index: 2;
     }
     .change-bg{
      width: 550px;
      height: 540px;
      transform: translate(-60%, -30px);
     }
     .change .bar{
      background-color: #fff;
     }
     .change #bar1{
      transform: translateY(4px) rotateZ(-45deg);
     }
     .change #bar3{
      transform: translateY(-6px) rotateZ(45deg);
     }
     .change #bar2{
      opacity: 0;
     }
     .change{
      display: block;
     }
     nav{
         background: #9932cc;
         opacity: .7;
     }
     nav h2{
         color: #fff;
         float:right;
         padding: 15px;
         margin-left: 150px;
         margin-right: 10px;
     }
     nav:after{
         content: '';
         display: block;
         clear: both;
     }

     .links{
         margin-left:150px;
         float: left;
     }
     .links li{
         display: inline-block;
         list-style: none;
         margin-top: auto;
     }
     .links li a{
         display: inline-block;
         color: black;
         padding: 20px;
         text-decoration: none;
     }
     .links li a:hover{
         background: #8b008b;
     }
     .circle4{
       position:absolute;
       left: 25%;
       top:30px;
     }


  </style>
  <body>
    <div id="menu-bar">
      <div id="menu" onclick="onclickMenu()">
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
      </div>
      <ul class="nav" id="nav">
        <?php
        foreach ($tempos as $tempo) {
          $caminho = APP;
          echo "
          <li class='nav-item'>
            <a class='nav-item active' aria-current='page' href='$caminho/CYS/tempo/{$tempo['id']}'>{$tempo['descricao']}</a>
          </li>
          ";
        }
         ?>
      </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php echo $caminho; ?>/Scripts/scriptmenu.js"></script>
  </body>
  <footer class="fixed-bottom d-flex justify-content-center"> C.Y.S &COPY; 2022 - Todos os direitos reservados.</footer>
</html>
