<?php
  $caminho = APP;
 ?>
<link rel="stylesheet" href='<?php echo $caminho; ?>/Style/style.css'>
       <h2>Adição de novos tempos</h2>
       <form action="<?php echo APP;?>tempo/salvar" method="post">
          <div class="mb-3">
             <label for="id" class="form-label">ID</label>
            <input readonly style="width: 300px;" type="number" class="form-control" id="id" name="id" value='<?php echo "{$tempo['id']}"; ?>'>
           </div>
             <div class="mb-3">
               <label for="descricao" class="form-label">Tempo Verbal</label>
               <input type="text" style="width: 300px;" class="form-control" id="descricao" name="descricao" value='<?php echo "{$tempo['descricao']}";?>'>
             </div>
           <button type="submit" class="btn btn-primary">Enviar</button>
       </form>
