<?php
  $caminho = APP;
 ?>
<link rel="stylesheet" href='<?php echo $caminho; ?>/Style/style.css'>
       <h2>Adição de novos genêros</h2>
       <form action="<?php echo APP;?>genero/salvar" method="post">
          <div class="mb-3">
             <label for="id" class="form-label">ID</label>
            <input readonly style="width: 300px;" type="number" class="form-control" id="id" name="id" value='<?php echo "{$genero['id']}"; ?>'>
           </div>
             <div class="mb-3">
               <label for="genero" class="form-label">Genêro</label>
               <input type="text" style="width: 300px;" class="form-control" id="genero" name="genero" placeholder="Genêro (Ex: Pop)" value='<?php echo "{$genero['genero']}"; ?>'>
             </div>
           <button type="submit" class="btn btn-primary">Enviar</button>
       </form>
