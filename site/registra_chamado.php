<?php
    require_once "validar.php";
    $nome = str_replace('#', '.', $_POST['nome']);
    $servicos = isset($_POST['servico']) ? $_POST['servico'] : [];
    $servico = is_array($servicos) ? implode(', ', array_map(function($item) {return str_replace('#', '.', $item);}, $servicos)) : '';
    $observacao = str_replace('#', '.', $_POST['observacao']);
    $nomedono = str_replace('#', '.', $_POST['nomedono']);
    $contato = str_replace('#', '.', $_POST['contato']);
    $raca = str_replace('#', '.', $_POST['raca']);
    $especie = str_replace('#', '.', $_POST['especie']);

    $texto = $nome.' # '.$especie.' # '.$raca.' # '.$contato.' # '.$nomedono.' # '.$servico.' # '. $observacao."\n";
    $arquivo = fopen('bd.info','a');

    fwrite($arquivo,$texto);

    fclose($arquivo);
    header('Location: consultar_chamado.php');
?>