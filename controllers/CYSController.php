<?php
  class CYSController extends Controller{
    protected $template = "template1";

    public function index(){
      $dados = array();
      $modelTempo = new Tempo();
      $tempos = $modelTempo->read();
      $dados['tempos'] = $tempos;
      $this-> view("index", $dados);
    }
    public function descricao(){
      $dados = array();
      $modelTempo = new Tempo();
      $tempos = $modelTempo->read();
      $dados['tempos'] = $tempos;

      require_once 'views/menunav.php';
    }
    public function tempo($id){
      $modelMusica = new Musica();
      $modelTempo = new Tempo();
      $tempos = $modelTempo->read();
      $musicas = $modelMusica->getByTempo($id);

      $modelTempo = new Tempo();
      $tempo = $modelTempo->getById($id);

      require_once 'views/menunav.php';
    }
    public function questionario($id){
      $modelTempo = new Tempo();
      $tempos = $modelTempo->read();
      $modelmusica = new Musica();
      $musica = $modelmusica -> getById($id);
      require_once 'views/questionario.php';
    }
  }
 ?>
