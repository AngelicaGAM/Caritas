<?php

session_start();

  require 'conexion.php';

  if (isset($_SESSION['nombre'])) {
    $records = $conn->prepare('SELECT Id, nombre, clave FROM usuarios WHERE Id = :id');
    $records->bindParam(':id', $_SESSION['nombre']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    
  }

include("header.php");
?>
<link href="_assets/_css/menu.css?x=<?php echo(rand()); ?>" type="text/css" rel="stylesheet" />


<nav class="navbar navbar-expand-lg navbar-light bg-light color-menu ">
  
    <div class="col-7">
        <img src="https://caritasquintanaroo.org/images/caritas.png" >
    </div> 
    <div class="col-5">
        <div class="collapse navbar-collapse col" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="Inventario.php">Inventario <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Beneficiarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="proyecto.php">Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="proyecto.php">Donadores</a>
            </li>
            <li class="nav-item">
            <a href="login.php" class="inside icon-ic_power_settings_new_24px"></a>
            </li>
            
          </ul>
      
    </div>
    
    
    
  
</nav>

