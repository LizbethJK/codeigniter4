<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD DE MUSICA</title>
  </head>
  <body>

  <style>
    .formularioAlbumes{
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
      padding: 10px 0;
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
        <br><br>
       <center>
       <h2> VISITA NUESTRA SECCIÓN DE GÉNEROS MUSICALES</h2>
        </center>
       <div class="seccion-generos">
        <img src="https://cdn-icons-png.flaticon.com/128/7028/7028924.png" alt="">
        <form method="POST" action="<?php echo base_url().'/indexgeneros' ?>">
        <button class="btn btn-primary btn-block">SECCION DE GÉNEROS</button>
        </form>
       <img src="https://cdn-icons-png.flaticon.com/512/3507/3507334.png" alt="">,
       </div>
       
        <hr>
        <center>
       <h2>LISTA DE ALBUMES </h2>  <!-- antes del lista de albumes va class="text-right"-->
       </center>
     
        <div class="row">
          <div class="col-sm-12">
            <div class="table table-responsive table-striped">
              <table class="table table-bordered" white = "400">
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>AUTOR</th>
                  <th>GÉNERO</th>
                  <th>EDITAR</th>
                  <th>ELIMINAR</th>
                </tr>
                    <?php foreach($datos as $key): ?>
                        <tr>
                            <td><?php echo $key->id?></td>
                            <td><?php echo $key->name?></td>
                            <td><?php echo $key->author?></td>
                            <td><?php echo $key->genre_id?></td>
                            <td>
                                <a href="<?php echo base_url().'/obtenerNombre/'.$key->id ?>"  class="btn btn-dark btn-primary btn-block">🖊😉</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'/eliminar/'.$key->id ?>" class="btn btn-secondary btn-danger btn-block">Eliminar❌</a>
                               
                            </td> 
                        </tr>
                    <?php endforeach?>
              </table> 
            </div>
          </div>
       </div> 
    </div>



    <div class="container">
        <div class="formularioAlbumes">
        <div class="row">
            <div class="col-sm-12">
              <center>
            <h1>INSERTA EL ÁLBUM</h1></center>
                <form method="POST" action="<?php echo base_url().'/crear' ?>">

                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control ">

                <label for="author">Autor:</label>
                <input type="text" name="author" id="author" class="form-control ">

                <label for="genre_id">Género del disco (ID):</label>
                <input type="text" name="genre_id" id="genre_id" class="form-control ">

                <br>
                  <label>BUSCAR GÉNERO MUSICAL</label>
                  <div class="genero">
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">

                      <?php 

                      $servidor="localhost";
                      $usuario="root";
                      $password="";
                      $db="music";
                      $conexion=mysqli_connect($servidor, $usuario, $password, $db);


                      $consulta="SELECT CONCAT (id,'.- ',name) as lista FROM genres";
                      $ejecuta=mysqli_query($conexion, $consulta);

                      ?>

                      <?php foreach ($ejecuta as $opciones): ?>
                        <option value="<?php echo $opciones['lista'] ?>"><?php echo $opciones['lista'] ?></option>
                        <?php endforeach;?>

                      </select>
                      <br><br>
                      <button class="btn btn-primary">GUARDAR</button>
                </div>
                <br>

                </form>
            </div>
        </div>
        <img src="https://cdn-icons-png.flaticon.com/128/3048/3048372.png" alt="">
        
        </div>




                  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje == '1') {
            swal('ÁLBUM','Registro exitoso','success');
        } else if (mensaje == '0'){
            swal('ÁLBUM','Registro fallido','error');
        } else if (mensaje == '2'){
            swal('ÁLBUM','Actualización exitosa','success');
        } else if (mensaje == '3'){
            swal('ÁLBUM','Actualización fallida','error');
        } else if (mensaje == '4'){
            swal('ÁLBUM','Eliminado exitoso','success');
        } else if (mensaje == '5'){
            swal('ÁLBUM','Eliminado fallido','error');
        } else if (mensaje == '6'){
            swal('GÉNERO','Registro exitoso,','success');
        } else if (mensaje == '7'){
            swal('GÉNERO','Registro fallido','error');
        } else if (mensaje == '8'){
            swal('GÉNERO','Actualización exitosa','success');
        } else if (mensaje == '9'){
            swal('GÉNERO','Actualización fallida','erro r');
        } else if (mensaje == '10'){
            swal('GÉNERO','Eliminado exitoso','success');
        } else if (mensaje == '11'){
            swal('GÉNERO','Eliminado fallido','error');
        }
    </script>
</body>
</html>