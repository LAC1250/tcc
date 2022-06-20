<?php
    class Tempo extends Model{
        protected $tabela = "tempos";
        protected $ordem = "descricao";

        function getbyName($id){
          $sql = "SELECT descricao FROM tempos WHERE :id =:id";
          $sentenca = $this->conexao -> prepare($sql);
          $sentenca -> bindParam(":id",$id);
          $sentenca -> execute();
          $sentenca->setFetchMode(PDO::FETCH_ASSOC);
          $dados = $sentenca -> fetchAll();
          return $dados;
        }
        /*public function getByIdTempo($id){
          $sql = "SELECT descricao FROM tempos WHERE id =:id";
          $sentenca = $this->conexao -> prepare($sql);
          $sentenca -> bindParam(":id",$id);
          $sentenca -> execute();
          $sentenca->setFetchMode(PDO::FETCH_ASSOC);
          $dados = $sentenca -> fetch();
          return $dados;
        }*/
    }
?>
