<?php
  $caminho = APP;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo $caminho; ?>/Style/style.css'>
    <link rel="stylesheet" href='<?php echo $caminho; ?>/Style/stylemenu.css'>
    <link rel="stylesheet" href='<?php echo $caminho; ?>/Style/stylePlayer.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>C.Y.S - Aprendendo Inglês com Músicas</title>
  </head>
  <style media="screen">
  body{
      background-color: #5ce1e6 !important;
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
      background: radial-gradient(circle, #9400d3,#8a2be2);
      transition: 0.3s ease;
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
         opacity: .7;
     }
     nav h2{
         color: black;
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
    .home li{
        display: inline-block;
        list-style: none;
        margin-top: auto;
    }
    .home li a{
        display: inline-block;
        color: black;
        padding: 20px;
        text-decoration: none;
    }
    #tempo_verbal{
      position: absolute;
      bottom: 50%;
      left: 400%;
      font-size: 25px;
    }
    .conteudo{
      font-size: 15px;
    }
    #responder{
      border: none;
      padding: 10px;
      text-decoration: none;
      color: black;
      position: fixed;
      top: 280px;
      left: 800px;
      justify-content: center;
      cursor: pointer;
      border-radius: 5px;
    }
    .music-container{
        bottom: 200px;
        position: fixed;
        left: 350px;
    }
    .voltar li a{
      text-decoration: none;
      position: relative;
      list-style: none;
      left: 12px;
      color: black;
    }
    .progress{
      background-color: white;
      border-radius: 2px;
      height: 100%;
      width: 0%;
      transition: width 0.1s linear;
    }
    .#tempo_verbal{
      position: fixed;
      left: 80%;
      bottom: 90%;
      font-size: 25px;
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
        foreach ($tempos as $tempo1) {
          $caminho = APP;
          echo "
          <li class='nav-item'>
            <a class='nav-item active' aria-current='page' href='$caminho/CYS/tempo/{$tempo1['id']}'>{$tempo1['descricao']}</a>
          </li>
          ";
        }
         ?>
         <li class="home">
             <a href='<?php echo $caminho?>/CYS/index'>
               Home
             </a>
           </li>
           <li class="tradutor">
              <a href="https://context.reverso.net/traducao/" target="_blank">
                Reverso Context - Tradutor
              </a>
          </li>
      </ul>
    <div class="menu-bg" id="menu-bg"></div>
  </div>
  <ul class="voltar">
    <?php
    $caminho = APP;
    echo "
      <li class=''>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left-short' viewBox='0 0 16 16'>
        <path fill-rule='evenodd' d='M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z'/>
      </svg><a href='$caminho/CYS/tempo/{$musica['id_tempo']}'>Voltar</a>
      </li>
    ";
     ?>
  </ul>
  <h1>
    <?php
      echo "<p class='d-flex justify-content-end' id='tempo_verbal'>{$tempo['descricao']}</p>";
     ?>
  </h1>
  <div id="containerPlayer">
    <div id='player'>
        <div class='music-container' id='music-container'>
            <div class='music-info'>
                <h4 id='title'><?php echo $musica['titulo']?></h4>
                <h4 id='artists'><?php echo $musica['artistas']?></h4>
                <h4 id=''><?php echo $tempo['descricao']?></h4>
                <div class='progress-container' id='progress-container'>
                  <div class='progress' id='progress'></div>
                </div>
            </div>
            <audio src='<?php echo $caminho.'/audios/'.$musica['audio']; ?>' id='audio'></audio>
            <div class='img-container'>
               <img src='<?php echo $caminho.'/imagens/'.$musica['imagem']; ?>' id='cover'/>
            </div>
            <div class='navigation'>
              <button id='prev' class='action-btn'>
                <i class='fas fa-backward'></i>
              </button>
              <button id='play' class='action-btn action-btn-big'>
                <i class='fas fa-play'></i>
              </button>
              <button id='next' class='action-btn'>
                <i class='fas fa-forward'></i>
              </button>
            </div>
        </div>
    </div>
  </div>
  <a class="responder" name="button" id="responder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
  </svg></i> Responder Questionário</a>
  <div id="containerModal">

  </div>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src = "<?php echo $caminho; ?>/Scripts/scriptmenu.js"></script>
    <script src = "<?php echo $caminho; ?>/Scripts/scriptModal.js"></script>
    <script src = "<?php echo $caminho; ?>/Scripts/scriptPlayer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </body>
  <footer class="fixed-bottom d-flex justify-content-center"> C.Y.S &COPY; 2022 - Todos os direitos reservados.</footer>
</html>
