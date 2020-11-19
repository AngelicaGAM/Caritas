<link href="_assets/_css/tabla.css?x=<?php echo(rand()); ?>" type="text/css" rel="stylesheet" />
<?php
  include('menu.php');
?>


<body>
    <div class="container">

    <div class="row">
        
        <button class="btn-back " onclick="window.location.href='/caritas2/inventario.php'">Regresar</button>

        <button class="btn-back btn-activo btn-izq" onclick="window.location.href='/caritas2/ingresar.php'">Añadir +</button>

        <div class="btn-back ">
            Filtrar
        </div>
    </div>
                <p class="colr">
                    Inventario
                </p>

<?php
        require "conexion.php";
      $query = "SELECT * FROM inventario";
      $result = $conn->query($query);
      $cont = 1;
      while ($numfilas = $result->fetch()){
        
        if($cont == 1){
          echo      
          "

            <table class=\"table\">
            <thead class=\" color-table\">
            
                <tr>
                <th scope=\"col\">Producto</th>
                <th scope=\"col\">Descripción producto </th>
                <th scope=\"col\">Existencia</th>
                <th scope=\"col\">Caducidad</th>
                <th scope=\"col\">Almacen</th>
                </tr>
            </thead>


            <tbody>
                <tr>
                <th scope=\"row\">".$numfilas['producto']."</th>
                <td>".$numfilas['descripcion']."</td>
                <td>".$numfilas['existencia']."</td>
                <td>".$numfilas['caducidad']."</td>
                <td>".$numfilas['localidad']."</td>
                </tr>

            ";
            $cont = 2;
        }
        else{
            echo      
            " 
                <tr>
                <th scope=\"row\">".$numfilas['producto']."</th>
                <td>".$numfilas['descripcion']."</td>
                <td>".$numfilas['existencia']."</td>
                <td>".$numfilas['caducidad']."</td>
                <td>".$numfilas['localidad']."</td>
                </tr>            
                ";
        }
    }
    echo
    "
        </tbody>
        </table>
    ";
?>            
    </div>
</body>




<?php
  include('footer.php');
?>