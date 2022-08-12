<?php
    $title_contato_recebido = "Contato Recebido";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title_contato_recebido;?></title>
	<script src="https://kit.fontawesome.com/e1e7e2dc84.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>
		<nav>
			<h1><a href="./index.php"><img id="logo" src="./img/Logo-Dona-Rita.png"></a></h1>
			<ul class="lista-nav">
				<li><a href="./index.php" title="Home" alt="Home">Home</a></li>
				<li><a href="./quem-somos.php" title="Conheça Dona Rita" alt="Conheça Dona Rita">Conheça Dona Rita</a></li>
				<li><a href="./contato.php" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>

    <main>
        <div id="main_dados">
            <div id="logo-dados"><img src="./img/Logo-Dona-Rita-fundo-branco.png"></div>
            <div id="main_caixa_dados">
                <h1>Recebendo seus dados de contato com:</h1>
                <?php
                echo "<p>Nome: $nome <br> Email: $email <br> Telefone: $telefone <br> Descrição: $mensagem</p>";
                ?>;
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-conteudo">
			<div>
				<a href="./index.php"><img  class="img-footer" src="./img/Logo-Dona-Rita-fundo-branco.png"></a>
			</div>
            <div class="conteudo-col-1">
                <h3>Nossas Páginas</h3>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./quem-somos.php">Conheça a Dona Rita</a></li>
                    <li><a href="./contato.php">Contato</a></li>
                </ul>
            </div>

            <div class="conteudo-col-2">
                <h3>Links Úteis</h3>
                <ul>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Aviso Legal</a></li>
                    <li><a href="#">Termos de Uso</a></li>
                </ul>
            </div>

            <div class="conteudo-col-3">
				<h3>Contato</h3>
				<ul>
					<li><i class="fas fa-home"></i>Rua da Dona Rita, 999 - Bairro Cidade/Estado - CEP 99999-000</li>
					<li><i class="fas fa-phone-alt"></i>TELEFONES: (55)9999 9999 / (55) 99999 9999</li>
					<li><i class="fas fa-envelope"></i>comercialdonarita@email.com.br</li>
				</ul>
            </div>
        </div>

		<div class="assinatura">
			<p class="copyright">&copy; Rosana Cristina Mascena Puhl - 2022</p>
		</div>
    </footer>
</body>
</html>