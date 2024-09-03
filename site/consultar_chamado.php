<?php
  require_once "validar.php";
  require_once "carregar_dados.php";
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PetSpaTime</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="img/site.png">
    <style>
      .card-consultar-chamado {
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
    </style>
  </head>

  <body>

  <nav class="navbar navbar-dark" style="background-color: #2e2727">
      <a class="navbar-brand" href="#">
        <img src="img/a.png" width="200" height="30" class="d-inline-block align-top" alt="">
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header" style="background-color: #2e2727;color: white;text-align: center;">
              Registros
            </div>
            
            <div class="card-body">
              <?php foreach($chamados as $dado){
                $info = explode('#',$dado);
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Nome:<?=$info[0].'('.$info[1].')';?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Raça:<?=$info[2];?></h6>
                  <p class="card-text">Contato:<?=$info[4].'-'.$info[3];?></p>
                  <p class="card-text">Serviços:<?=$info[5];?></p>
                  <p class="card-text">Observações:<?=$info[6];?></p>

                </div>
              </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href='home.php'>Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>