<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1 class="text-center login-title"></h1>
            <div class="account-wall">
                <img class="profile-img" src="images/photo.png" alt="">
                <form class="form-signin" method="post" action="index.php">
                    <input type="hidden" name="module" value="login">
                    <input type="hidden" name="action" value="login">
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" required autofocus>
                    <input type="password" class="form-control" placeholder="Clave" name="clave" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    if(isset($error)) 
    {
?>
    <div id="mensaje" style="position: fixed; top: 50%; left: 50%; z-index: 1000; width: 400px; text-align: center; margin-left: -200px;" class="alert alert-danger" role="alert">Datos incorrectos</div>

<?php
    }
?>
