<?php
require_once("Pessoa.php");
require_once("PessoaDAO.php");

$dao = new PessoaDAO();
$id = 0; 

$pessoa = $dao->read($id); 

if ($pessoa) {
    echo "Deletando a pessoa: " . $pessoa . "\n";
    $dao->delete($id);
    echo "Pessoa excluída com sucesso!\n";
} else {
    echo "Pessoa não encontrada. Logo, não pôde ser deletada.\n";
}