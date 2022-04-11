<?php
  $caminho = APP;
 ?>
 <style media="screen">
 body{
   background-color: #00BFFF !important;
   padding: 2rem;
 }
 h2{
    text-align: justify;
 }
 </style>
<link rel="stylesheet" href='<?php echo $caminho; ?>/Style/style.css'>

     <h2>Questões</h2>
     <form action="<?php echo APP;?>questionario/salvar" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input readonly type="number" class="form-control" id="id" name="id" value='<?php echo "{$questionario['id']}"; ?>'>
         </div>
         <div class="mb-3">
           <label for="id_musica" class="form-label">ID musica</label>
           <input type="number" class="form-control" id="id_musica" name="id_musica" value='<?php echo "{$questionario['id_musica']}"; ?>'>
          </div>
         <div class="mb-3">
           <label for="pergunta" class="form-label">Pergunta</label>
           <textarea class="form-control" id="pergunta" name="pergunta" rows="3"><?php echo "{$questionario['pergunta']}"; ?></textarea>
          </div>
          <div class="mb-2">
            <label for="opcaoa" class="form-label">Alternativa A</label>
            <textarea class="form-control" id="opcaoa" name="opcaoa" rows="1"><?php echo "{$questionario['opcaoa']}"; ?></textarea>
           </div>
           <div class="mb-2">
              <label for="opcaob" class="form-label">Alternativa B</label>
              <textarea class="form-control" id="opcaob" name="opcaob" rows="1"><?php echo "{$questionario['opcaob']}"; ?></textarea>
            </div>
            <div class="mb-2">
              <label for="opcaoc" class="form-label">Alternativa C</label>
               <textarea class="form-control" id="opcaoc" name="opcaoc" rows="1"><?php echo "{$questionario['opcaoc']}"; ?></textarea>
            </div>
            <div class="mb-2">
              <label for="resposta" class="form-label">Resposta Correta</label>
              <input type="text" class="form-control" id="resposta" name="resposta" value='<?php echo "{$questionario['resposta']}"; ?>'>
             </div>
         <button type="submit" class="btn btn-primary">Enviar</button>
     </form>
