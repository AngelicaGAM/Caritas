
<?php


  session_start();
  
  require "conexion.php";
  // Crear conexión con la base de datos.
  if (!empty($_POST['nombre']) && !empty($_POST['clave'])) {
    $sql = $conn->prepare('SELECT Id, nombre, clave FROM usuarios WHERE nombre=:nombre AND clave= :clave');
    $sql->bindValue('nombre',$_POST['nombre']);
    $sql->bindValue('clave',$_POST['clave']);
    $sql->execute();
    $resultado=$sql->fetch();
   
   $message = '';
  // Verificando si el usuario existe en la base de datos.
  if (isset($resultado['clave'])){
    // Guardo en la sesión el email del usuario.
    $_SESSION['nombre'] = $_POST['nombre'];
     
    // Redirecciono al usuario a la página principal del sitio.
    header("Location: menu.php"); 
  }else{
    $message = 'Usuario y/o clave incorrectos.';
  }
}


 
?>

<!doctype html>
<html lang="en">
<title>.: Caritas</title>

<!-- bootstrap 4 vue.js -->
<?php
include("header.php");
?>

<link href="_assets/_css/login.css?x=<?php echo(rand()); ?>" type="text/css" rel="stylesheet" />


<div class="sidenav">
         <div class="login-main-text text-login">
         <h2> Caritas, Q Roo. </h2>

            
            <p>
              Seguimos trabajando por los que menos tienen, a través del banco de alimentos.
               Por ello siguiendo las medidas de prevención de las autoridades y con las donaciones de nuestros aliados y
                gente de buen corazón seguimos comprometidos con ayudar a quien más lo necesita.
            </p>
         </div>
         <div>

</div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <h3> JUNTOS PARA AYUDAR A QUIEN MÁS LO NECESITA   </h3>
                <form action="login.php" method="POST">
                  <div class="form-group">
                      <!--<input type="text" class="form-control" placeholder="User Name">-->
                      <input class="form-control" placeholder="Ingresar Usuario" type="text" name="nombre" required>
                  </div>
                  <div class="form-group">
                     <!--<input type="password" class="form-control" placeholder="Password">-->
                     <input class="form-control" placeholder="Ingresar Contraseña" type="password" name="clave" required><br>
                  </div>



              <?php if(!empty($message)): ?>
                <p> <?= $message ?></p>
                <br>
              <?php endif; ?>

                   <!--<button type="submit" class="btn btn-black">Login</button> 
                   <input type="submit" value="Ingresar" >-->

                   <button type="submit" class="btn btn-black">Entrar</button>
               </form>
            </div>
         </div>
      </div>
</html>