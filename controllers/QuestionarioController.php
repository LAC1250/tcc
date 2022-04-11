<?php
   class QuestionarioController extends Controller{
     public function questao($id_musica){
         $dados = array();
         $model = new Questionario();
         $questionarios = $model->Questionbyid($id_musica);
         $dados['questionarios'] = $questionarios;
         $this->view('listagemperguntas', $dados);
     }
     public function novo(){
        $questionario = array();
        $questionario['id'] = 0;
        $questionario['pergunta'] = "";
        $questionario['opcaoa'] = "";
        $questionario['opcaob'] = "";
        $questionario['opcaoc'] = "";
        $questionario['resposta'] = "";
        //é um input readonly
        $questionario['id_musica'] = "";
        //$questionario['titulo_musica'] = "";
        //$model = new Musica();
        //$musica = $model->read();
        $dados = array();
        $dados['questionario'] = $questionario;
        //$dados['musica'] = $musica;
        $this->view("formQuestionario", $dados);
      }
     public function salvar(){
       $questionario = array();
       $questionario['id'] = $_POST['id'];
       $questionario['pergunta'] = $_POST['pergunta'];
       $questionario['opcaoa'] = $_POST['opcaoa'];
       $questionario['opcaob'] = $_POST['opcaob'];
       $questionario['opcaoc'] = $_POST['opcaoc'];
       $questionario['resposta'] = $_POST['resposta'];
       $questionario['id_musica'] = $_POST['id_musica'];
       //$questionario['titulo_musica'] = $_POST['titulo_musica'];
       $model = new Questionario();
       if($questionario['id'] == 0){
         $model->create($questionario);
       }else{
          $model->update($questionario);
       }
       $this->redirect('musica/listar');
     }
     public function excluir($id){
       $model = new Questionario();
       $questionario = $model->getById($id);
       $id_musica = $questionario['id_musica'];
       $model->delete($id);
       $this->redirect("questionario/questao/$id_musica");
     }
   }

 ?>
