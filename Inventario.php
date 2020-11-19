<link href="_assets/_css/entradas.css?x=<?php echo(rand()); ?>" type="text/css" rel="stylesheet" />
<?php
  include('menu.php');
?>

<div class="container">
      <div class="row">

          <div class="cuadro">
            <a href="Inventario-Tabla.php">
                <p class="text"> Entradas</p>
                
                <div class="btn-entrada uno">
                    <div class="naranja"> 
                      <p class="textclave">IN-208</p>
                    </div>
                    <p class="textinside">Evento  24- sep-2020</p>
                </div>

                <div class="btn-entrada dos">
                    <div class="naranja"> 
                      <p class="textclave">IN-209</p>
                    </div>
                    <p class="textinside">Evento  30- sep-2020</p>
                </div>

                <div class="btn-entrada tres">
                    <div class="naranja"> 
                      <p class="textclave">IN-210</p>
                    </div>
                    <p class="textinside">Evento  2- dic-2020</p>
                </div>

                <div class="btn-entrada cuatro">
                    <div class="naranja"> 
                      <p class="textclave">IN-211</p>
                    </div>
                    <p class="textinside">Evento  6- dic-2020</p>
                </div>

            </a>
          </div> 

          <div class="cuadro2">
            <a href="Inventario-Tabla.php">
              <p class="text"> Salidas</p>
            
              <div class="btn-salida uno">
                    <div class="naranja"> 
                      <p class="textclave">OUT-2</p>
                    </div>
                    <p class="textinside">Evento  4- sep-2020</p>
              </div>
              
              <div class="btn-salida dos">
                    <div class="naranja"> 
                      <p class="textclave">OUT-3</p>
                    </div>
                    <p class="textinside">Evento  5- sep-2020</p>
              </div>

              <div class="btn-salida tres">
                    <div class="naranja"> 
                      <p class="textclave">OUT-4</p>
                    </div>
                    <p class="textinside">Evento  8- sep-2020</p>
              </div>

              <div class="btn-salida cuatro">
                    <div class="naranja"> 
                      <p class="textclave">OUT-5</p>
                    </div>
                    <p class="textinside">Evento  24- sep-2020</p>
              </div>
          </div>  
             </a>
      </div>
   
  
</div>
<?php
  include('footer.php');
?>