<?php
    class Musica extends Model{
      protected $tabela = "musicas";
      protected $query = "SELECT musicas.*, genero.genero, tempos.descricao FROM musicas inner join genero on musicas.genero_id = genero.id inner join tempos on musicas.id_tempo = tempos.id";
      protected $ordem = "id";

      function returnName(){
        //SELECT titulo from musicas where :id = :id;
        $sql = "SELECT titulo from musicas where id <> 0";
        $sentenca = $this->conexao->query($sql);
        $sentenca -> setFetchMode(PDO::FECTH_ASSOC);
        $consulta = $sentenca->fetchAll();
        return $consulta;
      }
      function getByTempo($id){

        $sql = "SELECT musicas.*, genero.genero, tempos.descricao FROM musicas inner join genero on musicas.genero_id = genero.id inner join tempos on musicas.id_tempo = tempos.id WHERE musicas.id_tempo=:id ORDER BY titulo";
        $sentenca = $this->conexao -> prepare($sql);
        $sentenca -> bindParam(":id",$id);
        $sentenca -> execute();
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca -> fetchAll();
        return $dados;
      }
}
?>
