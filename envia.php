<?php
    $hostname = "localhost";
    $bancodedados = "restaurante";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli -> connect_errno) {
        echo  "Falha ao conectar: (". $mysqli -> connect_errno.")" .$mysqli -> connect_error;
    } else {
        echo "Conectado com sucesso!";
    }

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $pessoas = $_POST['pessoas'];

    $sql = "INSERT INTO reservas (nome, data, hora, pessoas) VALUES ('$nome', '$data', '$hora', '$pessoas')";

    if ($mysqli->query($sql)) { // Insere os dados se tudo estiver correto
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $mysqli->error;
    } 
?>