<?php
	include("informacoes-marmitas.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title_home;?></title>
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
		<div class="main_banner">
            <article class="main_banner_caixa">
                <div>
                    <header>
                        <h1>Deliciosos pratos preparados pra você</h1>
                    </header>
                    <p> Conheça quem é a Dona Rita</p>
                    <p><a href="./quem-somos.php" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>

		<section class="main_produtos">
			<header class="main_produtos_header">
				<h1>Conheça nossos pratos:</h1>
			</header>
			<?php
			if(is_array($marmitas) && !empty($marmitas)){
				foreach($marmitas as $key => $value){
			?>
			<article class="caixa-produto-lista">
				<img src=<?=$value['imagem'];?>>
				<h2><?=$value['nome'];?></h2>
				<a class="btn-produto-lista" href="produto.php?id=<?=$value['id'];?>"><button >Saiba Mais</button></a>
			</article>
			<?php
				}
			}else{
				echo "Sem marmitas no momento";
			}
			?>
		</section>

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