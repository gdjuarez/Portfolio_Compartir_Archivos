<?php 
//
 ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!--fontawesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>compartir</title>
    <!-- jquery-->
    <script src="lib/jquery.js"></script>
    <link rel="stylesheet" href="stylefondo.css">

</head>

<body>
    <div class="container container-sm">
        <div class="banner  rounded" style="background-color: #FF5733 ;">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8">
                    <h1 class="text-white text-center">E.E.S n°1</h1>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>
        <div class="banner  rounded bg-light">
            <div class="row">
                <div class="col-lg-2">
                    <img src="img/escudo1.png" class="rounded " style="width:30%" alt="Responsive image">
                </div>
                <div class="col-lg-8">
                    <h1 class="text-center">Compartir Archivos</h1>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light border rounded">
        <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="form-inline" action="recibir_archivos/frmDescargarAct.php" method="post">
                    <button class="btn btn-block btn-success btn-lg" type="submit">DESCARGAR</button>
                </form>
            </div>
           
            <div class="col-md-3"></div>
        </div>


        <div class="container bg-light  rounded">
            <br>
            <div class="row">
                <div class="col-sm-4">

                </div>

                <div class="col-sm-4">

                    <div class="comunicado bg-light border rounded text-center">
                        <img src="img/escudo1.png" class="rounded" style="width:85%" alt="Responsive image">
                    </div>

                    <div class="text-white rounded" style="background-color: #395586;">
                        <p align="center">Escuela de Educación Secundaria n°1</p>
                        <p align="center">calle 47 esq. 30, Mercedes (B) </p>
                    </div>
                    <form class="form-inline" action="login.php" method="post">                       
                        <input type="text"  value="" name="profesor" placeholder="clave">
                        <button class="btn btn-info btn-lg" type="submit">PROFESOR</button>
                     </form>

                    <footer>
                        <HR>
                        <small>© Copyright 2022, GDJuarez (Ematp Informatica)</small>
                    </footer>
                   
                </div>


                <div class="col-sm-4">
                </div>
            </div>


            <!-- Option 1: Bootstrap Bundle (includes Popper) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
                crossorigin="anonymous">
            </script>


</body>

</html>