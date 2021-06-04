<?php
include '../todos/functions.php';
include '../todos/header.php';
//Conectando a base de dados

$servidor = '127.0.0.1:3306';
$usuario = 'root';
$senha = 'root';
$banco = 'loja_temp';

//Criando o objeto de conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error) {
    die('Erro: ' . $conexao->connect_error);
}
//Criando base de dados
$sqlCriarDB = 'CREATE DATABASE IF NOT EXISTS minha_primeira_db';

$res = $conexao->query($sqlCriarDB);
if($res) {
    echo 'Base de dados criada com sucesso';
} else {
    echo 'Oops, deu erro: ' . $conexao->error;
}

//Fechar a conexão é sempre uma boa prática
$conexao->close();
$sqlCriarTabela = "CREATE TABLE IF NOT EXISTS minha_primeira_tabela (
id bigint(20) UNSIGNED NOT NULL,
nome varchar(255) NOT NULL,
sobrenome varchar(255) NOT NULL
 )
";

$conexao2 = new mysqli($servidor, $usuario, $senha, $banco);
$res2 = $conexao2->query($sqlCriarTabela);
if($res) {
    echo 'Tabela criada com sucesso';
} else {
    echo 'Oops, deu erro: ' . $conexao->error;
}

//Fechar a conexão é sempre uma boa prática
$conexao2->close();

//Prepared statement
$conexaoPrepared = new mysqli($servidor, $usuario, $senha, $banco);

$sqlInserirRegistroPreparado = "INSERT INTO minha_primeira_tabela (nome, sobrenome) VALUES (? , ?)";

$declaracao = $conexaoPrepared->prepare($sqlInserirRegistroPreparado);
$parametros = [
    'Adriana',
    'Cerdeira'
];
//Strings com os tipos em ordem e um array com spread operator para fornecer meus valores
$declaracao->bind_param("ss", ...$parametros);
if($declaracao->execute()){
    echo "<br>Yay, deu certo";
} else {
    '<br>Oops';
}

echo "<br>O numero de linhas afetadas foram: ". $declaracao->affected_rows;

//Vou agora buscar informação com um prepared statement

$sqlBuscaPrepared = "SELECT nome, sobrenome FROM minha_primeira_tabela WHERE id=?";
$declaracaoBusca = $conexaoPrepared->prepare($sqlBuscaPrepared);
$id = 1;
$declaracaoBusca->bind_param("i", $id);

$declaracaoBusca->execute();

//Aqui eu vou fazer um bind do resultado, novamente em ordem, das colunas que eu vou receber
$declaracaoBusca->bind_result($nome, $sobrenome);

$declaracaoBusca->fetch();
echo "Meu nome é $nome $sobrenome";





$conexaoPrepared->close();


include '../todos/footer.php';
?>