<?php
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $estadoc = $_POST["estadoc"];
    $escolaridade = $_POST["escolaridade"];
    $pis = $_POST["pis"];
    $cargo = $_POST["cargo"];
    $datad = $_POST["datad"];
    $salario = $_POST["salario"];
    $jornada = $_POST["jornada"];
    $contrato = $_POST["contrato"];
    $banco = $_POST["banco"];
    $agencia = $_POST["agencia"];
    $corrente = $_POST["corrente"];

    $dadospessoais = array($nome, $nascimento, $endereco, $telefone, $email, $rg, $cpf, $estadoc, $escolaridade, $pis, $cargo, $datad, $salario, $jornada, $contrato, $banco, $agencia, $corrente);

    for ($i=0; $i<17; $i++){
        $dados = array('Nome', 'Nascimento', 'Endereço', 'Telefone', 'Email', 'Rg', 'Cpf', 'Estado Civil', 'Escolaridade', 'Pis', 'Cargo', 'Data de Admissão', 'Sálario', 'Jornada de Trabalho', 'Regime de Contratação', 'Banco', 'Agência', 'Conta Corrente');
        echo( $dados[$i]. ": ".$dadospessoais[$i]. "<br>");
    }


?>