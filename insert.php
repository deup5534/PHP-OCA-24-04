<?php
/*Criando conexão com o banco de dados*/
 
$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'bd_cadastro';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

/*---------------------------------------------
Recebendo dados do form */  

$_nome = $_POST['nome'];
$_endereco = $_POST['endereco'];
$_numero = $_POST['numero'];
$_cidade = $_POST['cidade'];
$_bairro = $_POST['bairro'];
$_estado = $_POST['estado'];
$_cep = $_POST['cep'];
$_telefone = $_POST['telefone'];
$_cpf = $_POST['cpf'];
$_rg = $_POST['rg'];
$_email = $_POST['email'];

$sql = "INSERT INTO tb_cliente (nome,endereco,numero_endereco,bairro,cidade,estado,
CEP,telefone,CPF,RG
,email) values ('$_nome','$_endereco',$_numero,'$_bairro','$_cidade','$_estado','$_cep','$_telefone','$_cpf','$_rg',$_email)";

$insert = mysqli_query($conexao, $sql); 

/*---------------------------------------------
Exibindo dados do form

echo "$_nome </br>";
echo "$_endereco </br>";;
echo "$_numero </br>";;
echo "$_cidade </br>";;
echo "$_bairro </br>";;
echo "$_estado </br>";;
echo "$_cep </br>";;
echo "$_telefone </br>";;
echo "$_cpf </br>";;
echo "$_rg </br>";;
echo "$_email </br>";;
*/
?>