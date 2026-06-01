<?php
require_once("Pessoa.php");
require_once("PessoaDAO.php");

$dao = new PessoaDAO();
$pessoa = $dao->read(1); // Retorna um objeto Pessoa ou null

if ($pessoa) {
    echo $pessoa . "\n";
} else {
    echo "Pessoa não encontrada.\n";
}
// Chave extra removida daqui