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
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
          <div class="card-header" style="background-color: #2e2727; color: white;text-align: center;">
              Abrir Chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Nome</label>
                      <input name = "nome" type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                      <label>Espécie</label>
                      <select name = "especie" class="form-control">
                        <option>Cachorro</option>
                        <option>Gato</option>
                      </select>
                    </div> 
                    <div class="form-group">
                      <label>Raça</label>
                      <input name = "raca" type="text" class="form-control" placeholder="Raça">
                    </div>
                    <div class="form-group">
                      <label>Contato</label>
                      <input name = "contato" type="text" class="form-control" placeholder="Contato">
                    </div>
                    <div class="form-group">
                      <label>Nome do Dono</label>
                      <input name = "nomedono" type="text" class="form-control" placeholder="Nome do Dono">
                    </div>
                    
                    <div class="form-group">
                      <label>Serviços</label>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="banho" name="servico[]" value="Banho">
                        <label class="form-check-label" for="banho">Banho</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="tosa" name="servico[]" value="Tosa">
                        <label class="form-check-label" for="tosa">Tosa</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cuidado-unhas-patas" name="servico[]" value="Cuidados com Unhas e Patas">
                        <label class="form-check-label" for="cuidado-unhas-patas">Cuidados com Unhas e Patas</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cuidados-pelo" name="servico[]" value="Cuidados com o Pêlo">
                        <label class="form-check-label" for="cuidados-pelo">Cuidados com o Pêlo</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="limpeza-ouvidos-dentes" name="servico[]" value="Limpeza de Ouvidos e Dentes">
                        <label class="form-check-label" for="limpeza-ouvidos-dentes">Limpeza de Ouvidos e Dentes</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="estetica" name="servico[]" value="Estética">
                        <label class="form-check-label" for="estetica">Estética</label>
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label>Observações</label>
                      <textarea name = "observacao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>