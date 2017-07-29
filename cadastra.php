<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hackathon</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
        <?php
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:

$host= 'mysql.brunatha.com.br';
$bd= 'hackathon';
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

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>

<div class="container">
    <div class="col-md-12">
        <div class="row banner">
            <div class="col-md-8">
                <h1>Inovação</h1>
                <span>2017</span>
            </div>
            <div class="col-md-4 form-top m-t-preencha p-t-preencha">
                <?php
                    if($conexao){
                        echo "Cadastro realizado com sucesso";
                    } else {
                        echo "Verifique todos os campos e tente novamente";
                    }
                ?>

                <form class="white" action="cadastra.php" method="post">
                    <p class="text12"><b>Preencha aqui seus dados</b></p>
                    <div class="form-group">
                        <label for="Nome">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Informe seu nome">
                    </div>
                    <div class="form-group">
                        <label for="e-mail">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Informe seu email">
                    </div>
                    <div class="form-group">
                        <div class="form-group required">
                            <label>Já conhece o GAMA?</label>
                            <div class="radio">
                                <label><input type="radio" name="conhece" value="Sim">Sim</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="conhece" value="Nao">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deseja receber novidades">Deseja receber novidades?</label>
                        <div class="radio">
                            <label><input type="radio" name="novidades" value="Sim">Sim</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="novidades" value="Nao">Não</label>
                        </div>
                    </div>
                    <div class="">
                        <button class="black">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="white banner01 row text-center m-t-preencha p-t-preencha">
            <div class="col-md-4">
                <p>TOTAL DE ALUNOS</p>
                <p>250</p>
            </div>
            <div class="col-md-4">
                <p>RECOMENDAÇÕES</p>
                <p>93%</p>
            </div>
            <div class="col-md-4">
                <p>TOTAL DE LINHAS DO CÓDIGO</p>
                <p>8732930 linhas</p>
            </div>
        </div>
        <div class="white banner01 row text-center p-t-preencha ">
            <div class="col-md-4">
                <div class="col-md-4">
                    IMG
                </div>
                <div class="col-md-4">
                    <p>Nome</p>
                    <p>Idade</p>
                    <p>Depoimento</p>
                </div>
            </div>
             <div class="col-md-4">
                <div class="col-md-4">
                    <img class="img-circle" scr="img/rosto_1.jpg">
                </div>
                <div class="col-md-4">
                    <p>Nome</p>
                    <p>Idade</p>
                    <p>Depoimento</p>
                </div>
            </div>
             <div class="col-md-4">
                <div class="col-md-4">
                    IMG
                </div>
                <div class="col-md-4">
                    <p>Nome</p>
                    <p>Idade</p>
                    <p>Depoimento</p>
                </div>
            </div>
        </div>
        <img scr="img/rosto_2.jpg" class="img-circle">

    </div>

</div>
</body>

</html>
