<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
    <title>Hackathon</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>


<div class="container">
        <div class="col-md-12">

            <div class="row banner">
                <div class="col-md-8">
                    <h1>Inovação</h1>
                    <span>2017</span>

                </div>
                <div class="col-md-4 form-top m-t-preencha p-t-preencha">
                    <form class="white" action="cadastra.php" method="post">
                        <p class="text12"><b>Preencha aqui seus dados</b></p>
                        <div class="form-group">
                            <label for="Nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="" placeholder="Informe seu nome">
                        </div>
                        <div class="form-group">
                            <label for="e-mail">E-mail</label>
                            <input type="text" name="email" class="form-control" id="" placeholder="Informe seu email">
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
                        	<img class="img-circle" src="img/rosto_1.jpg">
                    </div>
                    <div class="col-md-4">
                        <p>Nome</p>
                        <p>Idade</p>
                        <p>Depoimento</p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="col-md-4">
                        <img class="img-circle" src="img/rosto_2.jpg">
                    </div>
                    <div class="col-md-4">
                        <p>Nome</p>
                        <p>Idade</p>
                        <p>Depoimento</p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="col-md-4">
                        <img class="img-circle" src="img/rosto_3.jpg">
                    </div>
                    <div class="col-md-4">
                        <p>Nome</p>
                        <p>Idade</p>
                        <p>Depoimento</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>