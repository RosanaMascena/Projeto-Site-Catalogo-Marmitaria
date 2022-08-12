<?php
	$title_contato = "Contato";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title_contato;?></title>
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
        <form class="form-contato" action="enviar-contato.php" method="POST">
			<h2>Deixe aqui sua dúvida ou sugestão de melhoria</h2>

			<label for="nomesobrenome">Nome e sobrenome</label>
			<input type="text" name="nome" id="nomesobrenome" class="input-padrao" required>

			<label for="email">E-mail</label>
			<input type="email" name="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

			<label for="telefone">Telefone</label>
			<input type="tel" name="telefone" id="telefone" class="input-padrao" required placeholder="(XX) XXXXX-XXXX">

			<label for="mensagem">Descreva aqui sua dúvida ou sugestão</label>
			<textarea cols="70" rows="10" id="mensagem" name="mensagem" class="input-padrao" required></textarea>

            <input type="submit" value="Enviar" class="enviar-contato">
		</form>

        <article class="main_newsletter">
            <div class="news-col-1">
                <i class="far fa-envelope"></i>
                <p>Cadastre-se e seja o primeiro a receber nossas novidades!</p>
            </div>
            <div class="news-col-2">
                <form>
                    <input type="email" placeholder="Digite aqui seu melhor e-mail">
                    <button type="submit" class="btn-news">Assinar</button>
                </form>
            </div>
        </article>
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