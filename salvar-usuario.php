<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco_de_dados");

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

