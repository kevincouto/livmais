<?php

function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}
$perguntaValor = 1;
for($perguntaValor=1; $perguntaValor < 9; $perguntaValor++){
  ${'resultadoPergunta'.$perguntaValor} = pegaValor("pergunta-".$perguntaValor);
  echo ${'resultadoPergunta'.$perguntaValor};
  $resultadoFinal = $resultadoFinal + ${'resultadoPergunta'.$perguntaValor};
}

echo $resultadoFinal;
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<title>Liv+ - Mais tempo para dedicar as coisas mais importantes da vida</title>

 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/style.css">
 	<link rel="stylesheet" href="jquery.bxslider.css">
 </head>
 <body>
 	<header>
 		<div class="container">
 			<div class="row">
 				<div class="logo col-md-1">
 					<img src="images/logo.png" alt="Logo da Liv+">
 				</div>

 				<nav class="main-menu col-md-6">
 					<ul class="list-inline">
 						<li><a href="index.html">Viva Melhor</a></li>
 						<li><a href="quem-somos.html">Quem Somos</a></li>
 						<li><a href="faca-o-teste.html">Teste</a></li>
 						<li><a href="/blog">Blog</a></li>
 						<li><a class="active" href="mundo-dos-barbados.html">Mundo dos Barbados</a></li>
 					</ul>
 				</nav>

 				<ul class="col-md-5 button-action">
 					<li><a class="professionals" href="#">Seja um Profissional Liv+</a></li>
 					<!-- <li><a class="more-time" href="#">Quero Mais Tempo</a></li> -->
 				</ul>
 			</div>
 		</div>
 	</header>

 	<div id="teste-livmais">
 		<section class="featured-content">
 			<div class="container">
 				<div class="row">
 					<h1 class="col-md-12">Seu resultado!</h1>
 				</div>
 			</div>
 		</section>

 		<section class="content">
 			<div class="about-us">
 				<div class="container">

 					<div class="teste" style="text-align: center;">
 						<h2><?php if ($resultadoFinal < 30){ ?>
                  Vamos te ajudar a melhorar!
                <?php } elseif ($resultadoFinal >= 30 && $resultadoFinal < 65) {?>
                  Quase lá! Não pare de se cuidar!
                <?php } elseif ($resultadoFinal >= 65 && $resultadoFinal <= 80) {?>
                  Genial! Você se cuida muito bem!
                <?php } ?>
            </h2>
 						<p>Pontue cada pergunta usando uma escala de zero a dez onde zero é inteiramente falso e dez o descreve perfeitamente. Você pode usar os números que ficam neste intervalo para definir sua sensação.</p>

 						<div class="pergunta">
              <h3>Sua nota:</h3>
 							<h1 style='font-size: 80px; margin-top: 0;'><?php echo $resultadoFinal; ?></h1>

              <a class="professionals" href="#">Baixar o ebook</a>
 						</div>
 					</div>
 				</div>
 			</div>

 			<div style="margin-top: 40px;" class="quote">
 				<div class="container">
 					<p>Pensamento positivo atrai boas vibrações e ajuda na saúde do corpo e da mente.</p>
 				</div>
 			</div>
 		</section>
 	</div>

 	<footer>
 		<div class="about-us">
 			<div class="container">
 				<div class="col-md-2">
 					<img src="images/logo-footer.png" alt="Logo Liv+">
 				</div>

 				<div class="col-md-4">
 					<h4>Sobre Nós</h4>
 					<p>Somos pessoas que se preocupam com pessoas e prezam uma vida simples com qualidade, ainda que o tempo e as adversidades do dia a dia nos provem ao contrário. Queremos conectar pessoas de forma prática, segura e eficiente, proporcionando cuidados com a saúde, beleza e bem estar a qualquer hora e em qualquer lugar.</p>
 				</div>

 				<div class="col-md-2">
 					<h4>Redes Sociais</h4>
 					<ul>
 						<li><a target="_blank" href="http://www.facebook.com/livmais/">Facebook</a></li>
 						<li><a target="_blank" href="http://www.instagram.com/livmais/">Instagram</a></li>
 					</ul>
 				</div>

 				<div class="col-md-4">
 					<h4>Vem com a gente viver melhor</h4>
 					<p>Receba dicas semanais de como se cuidar melhor com pouco tempo</p>
 					<form action="" method="post">
 						<input type="text" placeholder="digite seu e-mail">
 						<input type="submit" value="Assinar">
 					</form>
 				</div>
 			</div>
 		</div>

 		<div class="copyright">
 			<div class="container">
 				<div class="row">
 					<p class="col-md-6">Liv+ Todos os direitos reservados - <a href="#">Política de privacidade</a><br> Contato: porvoce@livmais.com</p>
 					<p class="col-md-6 powered-by">Criado por <a target="_blank" href="http://staleiro.com">Staleiro Digital</a></p>
 				</div>
 			</div>
 		</div>
 	</footer>


 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="jquery.bxslider.min.js"></script>

 </body>
 </html>
