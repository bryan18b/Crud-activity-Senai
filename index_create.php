<?php
    require_once("Pessoa.php");
    require_once("PessoaDAO.php");

    $p = new Pessoa("Ana", "123.456.789-00", "ana@example.com", 28);
    
    $inserePessoa = new PessoaDAO();
    $inserePessoa->create($p);

    $dao = new PessoaDAO();
    $lista = $dao->readAll();

    foreach ($lista as $pessoa) {
        echo $pessoa . "\n"; // usa
    }
