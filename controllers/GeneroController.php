<?php
    class GeneroController extends Controller{
        public function listar(){
            $model = new Genero();
            $generos = $model ->read();
            $dados = array();
            $dados['generos'] = $generos;
            $this->view("listagemgeneros", $dados);
        }
        public function novo(){
            $genero = array();
            $genero['id'] = 0;
            $genero['genero'] = "";
            $dados = array();
            $dados['genero'] = $genero;
            $this->view("formgenero", $dados);
        }
        public function editar($id){
            $model = new Genero();
            $genero = $model->getById($id);
            $dados = array();
            $dados['genero'] = $genero;
            $this->view("formgenero", $dados);
        }
        public function deletar($id){
           $model = new Genero();
           $model ->delete($id);
           $this->redirect('genero/listar');
        }
        public function salvar(){
            $genero = array();
            $genero['id'] = $_POST['id'];
            $genero['genero'] = $_POST['genero'];
            $model = new Genero();
            if($genero['id'] == 0){
                $model->create($genero);
            }else{
                $model->update($genero);
            }
            $this->redirect('genero/listar');
        }
    }
?>
