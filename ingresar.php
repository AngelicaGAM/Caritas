
<link href="_assets/_css/login.css?x=<?php echo(rand()); ?>" type="text/css" rel="stylesheet" />
<link href="_assets/_css/tabla.css?x=<?php echo(rand()); ?>" type="text/css" rel="stylesheet" />
<?php
  include('menu.php');
?>

<div class="container">
      <div>
        <br>
        <br>
        <center><h3 class="colr"> INSERCIÓN DE DATOS   </h3></center>
        <br>
        <br>

                <center>
                <form action="ingresar.php" method="POST">
                  <div  class ="insertar_css">
                      <!--<input type="text" class="form-control" placeholder="User Name">-->
                      <input class="form-control" placeholder="Ingresar Producto" type="text"  name="producto" required>
                      <br>
                     <!--<input type="password" class="form-control" placeholder="Password">-->
                     <input class="form-control" placeholder="Ingresar Descripción" type="text"  name="desc" required >
                     <br>

                      <input class="form-control" placeholder="Ingresar Cant. Existencia" type="text"  name="existencia" required>
                      <br>
                     <!--<input type="password" class="form-control" placeholder="Password">-->
                     <input class="form-control" placeholder="Ingresar Fecha Caducidad" type="text" name="fecha" required>
                     <br>
                     <!--<input type="password" class="form-control" placeholder="Password">-->
                     <input class="form-control" placeholder="Ingresar Almacen" type="text"  name="almacen" required>
                     <br>
                  </div>

                   <!--<button type="submit" class="btn btn-black">Login</button> -->
                   <button type="submit" class="btn btn-black">Insertar</button> 
               </form></center>

      </div>
   
  
</div>


<?php
  if (isset($_POST['producto'])) {
      require "conexion.php";
      $prod = $_POST['producto'];
      $des = $_POST['desc'];
      $exis = $_POST['existencia'];
      $dat = $_POST['fecha'];
      $alma = $_POST['almacen'];

      $sql = "INSERT INTO inventario(producto,descripcion,existencia,caducidad,localidad) VALUES('$prod','$des','$exis','$dat','$alma')";
      
      $resultado = $conn->query($sql);
      
      $message = '';
      // Verificando si el usuario existe en la base de datos.
      if ($resultado){
        // Redirecciono al usuario a la página principal del sitio.
        header("Location: Inventario-Tabla.php"); 
      }else{
        $message = 'Error en la inserción de datos.';
      }
  }
?>

<?php
  include('footer.php');
?>