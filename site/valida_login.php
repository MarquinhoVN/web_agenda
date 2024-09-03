<?php
    session_start();
    $usuario_app = array('user'=> 'DCC916A', 'senha'=>123);

    $aut = false;
    if($usuario_app['user'] == $_POST['user'] && $usuario_app['senha'] == $_POST['senha']){
        $aut = true;
    };
    if($aut == true){
        header("Location: home.php");
        $_SESSION['aut'] = 'SIM';
    }else{
        header('Location: index.php?login=erro');
        $_SESSION['aut'] = 'NÃO';
    };
?>