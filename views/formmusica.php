
<?php
  $caminho = APP;
  if($musica['audio'] != ""){
    $audio = "$caminho/audios/{$musica['audio']}";
  }

  if($musica['imagem'] != ""){
    $imagem = "$caminho/imagens/{$musica['imagem']}";
  }
 ?>
 <link rel="stylesheet" href='<?php echo $caminho; ?>/Style/style.css'>
       <h2>Adição de novas músicas</h2>
       <img src="<?php echo $imagem; ?>" alt="">
       <input type="hidden" name="imagem" value="<?php echo $imagem; ?>">
       <input type="hidden" name="audio" value="<?php echo $audio; ?>">
       <form action="<?php echo APP;?>musica/salvar" method="post" enctype="multipart/form-data">
          <div class="mb-3">
             <label for="id" class="form-label">ID</label>
            <input readonly type="number" style="width: 300px;" class="form-control" id="id" name="id" value='<?php echo "{$musica['id']}"; ?>'>
           </div>
           <div class="mb-3">
             <label for="tempo" class="form-label">Tempo Verbal</label>
             <select class="form-select form-select-md mb-2" name="id_tempo" style="width: 300px;">
                 <?php
                  foreach ($tempos as $tempo) {
                    $selected = $tempo['id'] == $musica['id_tempo'] ? 'selected' : '';
                    echo "<option $selected value='{$tempo['id']}'>{$tempo['descricao']}</option>";
                  }
                  ?>
              </select>
             </div>
           <div class="mb-3">
             <label for="titulo" class="form-label">Titulo da musica</label>
               <input type="text" style="width: 300px;" class="form-control" id="titulo" name="titulo"  placeholder="Titulo" value='<?php echo "{$musica['titulo']}"; ?>'>
             </div>
             <div class="mb-3">
               <label for="genero" class="form-label">Genêro Musical</label>
               <select class="form-select form-select-md mb-2" name="genero_id" style="width: 300px;">
                 <?php
                  foreach ($genero as $genero) {
                    $selected = $genero['id'] == $musica['genero_id'] ? 'selected' : '';
                    echo "<option $selected value='{$genero['id']}'>{$genero['genero']}</option>";
                  }
                  ?>
              </select>
             </div>
             <div class="mb-3">
               <label for="artistas" class="form-label">Artistas</label>
               <input type="text" style="width: 300px;" class="form-control" id="artistas" name="artistas" placeholder="Artista" value='<?php echo "{$musica['artistas']}"; ?>'>
             </div>
             <div class="mb-3">
                <label for="arquivo" class="form-label">Áudio</label>
                <input type="file" style="width: 500px;" accept="audio/*" class="form-control" id="arquivo" name="arquivo">
              </div>
              <div class="mb-3">
                 <label for="arquivo1" class="form-label">Imagem</label>
                 <input type="file" style="width: 500px;" accept="image/*" class="form-control" id="arquivo1" name="arquivo1">
               </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
       </form>
