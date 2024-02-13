<?php
$host = 'localhost';
$port = 10096; // Porta diferente da padrão
$usuario = 'root';
$senha = 'root';
$banco = 'local';

// Conecta ao banco de dados
$mysqli = new mysqli($host, $usuario, $senha, $banco, $port);

// Verifica se a conexão foi estabelecida com sucesso
if ($mysqli->connect_error) {
    die('Erro de Conexão (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

?>
