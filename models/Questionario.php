<?php
  class Questionario extends Model{
    protected $tabela = "questionario";
    protected $query = "SELECT questionario.*, musicas.titulo as titulo_musica from questionario left join musicas on questionario.id_musica = musicas.id order by id;";
    protected $ordem = "id";

    function Questionbyid($id_musica){
      $sql = "SELECT * from questionario where id_musica =:id_musica";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id_musica",$id_musica);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetchAll();
      return $dados;
    }
    function Questions(){
      $modelQuestionario = new Questionario();
      $questionarios = $this->read();
      foreach ($questionarios as $questionario) {
        $questionario['id_musica'] = $modelQuestionario->Questionbyid($questionario['id_musica']);
      }
      return $questionarios;
    }
  }

 ?>
