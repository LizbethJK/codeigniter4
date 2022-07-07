<?php 

$id = $datos[0]['id'];
$name = $datos[0]['name'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>LISTA DE GENEROS</title>
  </head>
  <body>

  <style>
    .formularioAlbumes3{
      display: grid;
      grid-template-columns: 3fr 1fr;
      gap: 50px;
      align-items: center;
    }

    .cabeza{
      background-color: black;
      color: white;
      padding: 20px;
    }

    footer{
      background-color: black;
      color: white;
      margin: 10px;
    }

    body{
      background-color: white;
      background-image: url("https://fondosmil.com/fondo/1805.jpg");
    }

    .genero{
      display: flex;
    }

    .seccion-generos{
      display: flex;
      justify-content: space-around;
      align-items: center;
    }


  </style>

  
<center>
        <div class="cabeza">
        <h1 class="center">CRUD DE MÚSICA</h1>
        </div>
        </center>
  


  <br>



    <div class="container">
      <center>
      <h1>LISTA DE GÉNEROS</h1>
  </center>
        <div class="formularioAlbumes3">
        <div class="row">
                  <div class="col-sm-12">
                        <form method="POST" action="<?php echo base_url().'/actualizargenero' ?>">
                        <input type="text" name="id" id="id" hidden="" value="<?php echo $id ?>">

                        <label for="name">Nombre del genero</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>">
                        <br>
                        <button class="btn btn-primary">Guardar</button>
                      </form>
                  </div>
              </div>
        </div>
  </div>

  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>