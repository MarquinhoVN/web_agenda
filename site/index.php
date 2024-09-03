<html>
  <head>
    <meta charset="utf-8" />
    <title>PetSpaTime</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="img/site.png">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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

    <nav class="navbar navbar-dark" style="background-color: #2e2727">
      <a class="navbar-brand" href="#">
        <img src="img/a.png" width="200" height="30" class="d-inline-block align-top" alt="">
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header" style="background-color: #2e2727; color: white;">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="user" type="text" class="form-control" placeholder="Usuário">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-block" style="background-color: #a25b32; color: white;" type="submit">Entrar</button>
                <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                    echo '<div class="text-danger">Usuário ou senha inválida</div>';
                  }
                  if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                    echo '<div class="text-danger">Autentique para usar</div>';
                  }
                ?>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>