<?php
    class MusicaController extends Controller{
        public function listar(){
            $model = new Musica();
            $musicas = $model ->read();
            $dados = array();
            $dados['musicas'] = $musicas;
            $this->view("listagemmusicas", $dados);
        }
        public function novo(){
            $musica = array();
            $musica['id'] = 0;
            $musica['titulo'] = "";
            $musica['genero'] = "";
            $musica['artistas'] = "";
            $musica['descricao'] = "";
            $musica['audio'] = "";
            $musica['imagem'] = "";
            /// genero e tempo
            $model = new Genero();
            $model2 = new Tempo();
            $genero = $model -> read();
            $tempos = $model2->read();
            $dados = array();
            $dados['musica'] = $musica;
            $dados['genero'] = $genero;
            $dados['tempos'] = $tempos;
            $this->view("formmusica", $dados);
        }
        public function editar($id){
            $model = new Musica();
            $musica = $model->getById($id);
            $model1 = new Genero();
            $genero= $model1->read();
            $model2 = new Tempo();
            $tempos = $model2->read();
            $dados = array();
            $dados['musica'] = $musica;
            $dados['genero'] = $genero;
            $dados['tempos'] = $tempos;
            $this->view("formmusica", $dados);
        }
        public function deletar($id){
           $model = new Musica();
           $model ->delete($id);
           $this->redirect('musica/listar');
        }
        public function salvar(){
            $musica = array();
            $musica['id'] = $_POST['id'];
            $musica['titulo'] = $_POST['titulo'];
            $musica['genero_id'] = $_POST['genero_id'];
            $musica['id_tempo'] = $_POST['id_tempo'];
            $musica['artistas'] = $_POST['artistas'];
            $musica['audio'] = $_POST['audio'];
            $musica['imagem'] = $_POST['imagem'];


            if(isset($_FILES['arquivo']) && $_FILES['arquivo']['size']!=0){
              $arquivo = $_FILES['arquivo'];
              $nomeArquivo = $arquivo['name'];
              $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
              $nomeArquivoSalvo = sha1(time()).".".$extensao;
              $arquivoTemporario = $arquivo['tmp_name'];
              move_uploaded_file($arquivoTemporario, 'audios/'.$nomeArquivoSalvo);
              $musica['audio'] = $nomeArquivoSalvo;
            }
              if(isset($_FILES['arquivo1']) && $_FILES['arquivo1']['size']!=0){
                $arquivo1 = $_FILES['arquivo1'];
                $nomeArquivo1 = $arquivo1['name'];
                $extensao1 = pathinfo($nomeArquivo1, PATHINFO_EXTENSION);
                $nomeArquivoSalvo1 = sha1(time()).".".$extensao1;
                $arquivoTemporario1 = $arquivo1['tmp_name'];
                move_uploaded_file($arquivoTemporario1, 'imagens/'.$nomeArquivoSalvo1);
                $musica['imagem'] = $nomeArquivoSalvo1;
              }
            $model = new Musica();
            if($musica['id'] == 0){
                $model->create($musica);
            }else{
                $model->update($musica);
            }
            $this->redirect('musica/listar');
        }
    }
?>
