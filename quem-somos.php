<?php
	$title_quem_somos = "Quem Somos";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title_quem_somos;?></title>
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
        <div id="main_quem_somos">
            <div id="logo-quem-somos"><img src="./img/Logo-Dona-Rita-fundo-branco.png"></div>
            <div id="main_caixa_quem_somos">
                <h1>Conheça a história da Dona Rita</h1>
                <p>Olá, meu nome é Rita da Silva Souza, mais conhecida como Dona Rita.</p>
                <p>Sou mulher guerreira, viúva a 15 anos, nunca deixei faltar o leite e o pão para minhas crianças. Contudo, por muitas dificuldades financeiras para alimentar minha família, pensei em fazer marmitas variadas e vender de porta em porta com a ajuda de meus filhos, na cidade de Palmas, no interior do Paraná.</p>
                <p>Um certo dia, eu fui abordada por uma empresária e acadêmica, Rosana, que atualmente trabalha no setor de tecnologia, e vendo o meu esforço convidou-me para uma conversa sobre como expandir meus negócios. A empresária Rosana, que também é estudante de tecnólogo em Sistemas para Internet, disse que iria construir um site simples como se fosse um catálogo, para eu divulgar minhas marmitas.</p>
                <p>E aqui está o site onde você pode conhecer mais sobre minhas marmitas e entrar em contato, caso queira fazer um pedido ou mandar dúvidas e sugestões de melhorias.</p>
                <p>Fico muito feliz com sua visita. Se possível, divulgue para os seus amigos e familiares.</p>
                <p>Um grande abraço!</p>
            </div>
        </div>

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