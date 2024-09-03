<?php
  require_once "validar.php";
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PetSpaTime</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="img/site.png">
    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      body {
        background-image: url('img/back2.jpg');
        background-size: cover;
        transform: scale(1.5);
        transform-origin: 0 0;
        width: calc(100% / 1.5); /* Adjust width to fit scaled content */
        height: calc(100% / 1.5);
      }

      .text-danger {
        color: red;
        text-align: center;
        font-weight: bold;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark" style="background-color: #2e2727; width: 100%;">
        <a class="navbar-brand" href="#">
            <img src="img/a.png" width="200" height="30" class="d-inline-block align-top" alt="">
        </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php"><img src="img/formulario_abrir_chamado2.png" width="70" height="85"></a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php"><img src="img/formulario_consultar_chamado2.png" width="70" height="85"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>