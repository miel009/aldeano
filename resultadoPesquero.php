<?php
require './clases/Aldeano.php';
require './clases/AldeanoFranco.php';
require './clases/AldeanoChino.php'; 
require './clases/Arbusto.php';
require './clases/BancoDePesca.php';
require './clases/Pesquero.php';
require './clases/RecolectableInterface.php';
require './clases/RecolectorInterface.php';


$pesquero1 = new Pesquero();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/juego.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Juego aldeano </title>
</head>

<header>
</header>

<body>
  
  <main class="container" >
  
  <h2> DETALLE DE PERSONAJE PESQUERO: </h2>
      <div class="row mt-5">
         <div class="col-ml-12">
           </div>
           <!--creacion de personajes aldeano 2-->
          <div class="card mx-4 my-4" style="width: 18rem;">
              <img src="assets/pesquero.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title"> <?php echo $pesquero1->nombre ?> </p>
                <p> Recolecte del banco de pesca: <?php echo $pesquero1-> recolectar() ?> de alimento </p>              
                <a href="juego.php" class="btn btn-primary"> volver a inicio </a>
              </div>
          </div>         

        <!--fin de card-->
      </div>
  </div>

</main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>