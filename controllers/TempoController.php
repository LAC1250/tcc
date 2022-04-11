<?php
    class TempoController extends Controller{
        public function listar(){
            $model = new Tempo();
            $tempos = $model ->read();
            $dados = array();
            $dados['tempos'] = $tempos;
            $this->view("listagemdetempos", $dados);
        }
        public function novo(){
          $tempo= array();
          $tempo['id'] = 0;
          $tempo['descricao'] = "";
          $dados = array();
          $dados['tempo'] = $tempo;
          $this->view("formtempos", $dados);
        }
        public function editar($id){
            $model = new Tempo();
            $tempo = $model->getById($id);
            $dados = array();
            $dados['tempo'] = $tempo;
            $this->view("formtempos", $dados);
        }
        public function deletar($id){
            $model = new Tempo();
           $model ->delete($id);
           $this->redirect('tempo/listar');
        }
        public function salvar(){
            $tempo = array();
            $tempo['id'] = $_POST['id'];
            $tempo['descricao'] = $_POST['descricao'];
            $model = new Tempo();
            if($tempo['id'] == 0){
                $model->create($tempo);
            }else{
                $model->update($tempo);
            }
            $this->redirect('tempo/listar');
        }
    }
?>
