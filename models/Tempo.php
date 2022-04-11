<?php
    class Tempo extends Model{
        protected $tabela = "tempos";
        protected $ordem = "descricao";

        function returnName(){
          $sql = "SELECT descricao FROM tempos";
          $sentenca = $this->conexao -> query($sql);
          $sentenca->setFetchMode(PDO::FETCH_ASSOC);
          $consulta = $sentenca -> fetchAll();
          return $consulta;
        }
    }
?>
