
{include file="header.tpl"}

  
    



<div class="container">
<form class="mt-5" method="POST" action="verify">
      <div>
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
     </div>
     {if $error} 
      <div class="alert alert-danger mt-3">
          {$error}
      </div>
      {/if}
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


{include file="footer.tpl"}