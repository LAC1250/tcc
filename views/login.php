<style media="screen">
  body{
      background-color: #5ce1e6 !important;
      padding: 2rem;
  }
</style>
<?php
$email = "";
if(isset($_COOKIE['erro'])){
  echo "
  <div class='p-3 mb-2 bg-danger text-white d-flex justify-content-around' style='width:50%; position:relative; left: 25%;'>
    {$_COOKIE['erro']}
  </div>
  ";
  if(isset($_COOKIE['email'])){
    $email = $_COOKIE['email'];
  }
}
?>
<div class="d-flex justify-content-around">
  <h2>Login</h2>
</div>
<div class="d-flex justify-content-center">
  <form action="<?php echo APP;?>login/logar" method="post">
     <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
       <input type="email" style="width: 300px;" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
      </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" style="width: 300px;" class="form-control" id="senha" name="senha">
        </div>
      <button type="submit" class="btn btn-primary">Acessar</button>
  </form>
</div>
