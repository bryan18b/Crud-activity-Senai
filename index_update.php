<?php
require_once("Pessoa.php");
require_once("PessoaDAO.php");

$dao = new PessoaDAO();

$id = 2;

// Busca a pessoa
$pessoa = $dao->read($id);

if ($pessoa) {

    // Novos dados
    $pessoa->setNome("João");
    $pessoa->setCpf("12345678900");
    $pessoa->setEmail("joao@email.com");
    $pessoa->setIdade(30);

    // Atualiza no banco
    if ($dao->update($pessoa)) {
        echo "Pessoa atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar.";
    }

} else {

    echo "Pessoa não encontrada.";

}
?>