<?php
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:

$host= 'mysql.brunatha.com.br';
$bd= 'brunatha';
$senhabd= 'nathais10';

$userbd = $bd;

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	   = $_POST ["nome"];	 //atribuição do campo "nome"
$email	   = $_POST ["email"];	 //atribuição do campo "email"
$conhece   = $_POST ["conhece"]; //atribuição do campo "conhece"
$novidades	= $_POST ["novidades"];	//atribuição do campo "novidades"


//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



$query = "INSERT INTO `aluno` ( `nome` , `email` , `conhece` , `novidades` )
VALUES ('$nome', '$email', '$conhece', '$novidades')";

mysql_query($query,$conexao);

header("Location: http://www.brunatha.com.br/hackathon/obrigado.html");
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>
