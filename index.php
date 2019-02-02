<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
session_start(); 
?>
<!DOCTYPE HTML>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Realce Informatica</title>
 <meta name="description" content="Site de produtos de informatica.">
 <meta name="keywords" content="notebooks, smartphones, computadores">
 <meta name="robots" content="index, follow">
 <meta name="author" content="Nailson Mello">
<!--<script type="text/javascript" src="js/jmenu.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>-->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/car.js"></script>
 <script src="js/carousel.js"></script>
 

 <link rel="stylesheet" href="estilo.css">
 <link rel="icon" href="img/logo1.png">
  
 
 </head>
 	<body>
	<input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>
	<nav class="menu">
  <ul>
  	<li><a href="index.php">Home</a></li>
 
  
   <li><a href="#"><span title="Smartphone">Smartphone</span></a>
    <ul>
   		<a href="smartphone-motorola.php">Motolora</a>
		<a href="smartphone-samsung.php">Samsung</a>
		<a href="smartphone-positivo.php">Positivo</a>
		<a href="smartphone-iphone.php">Iphone</a>
		<a href="smartphone-alcatel.php">Alcatel</a>
		<a href="smartphone-lenovo.php">Lenovo</a>
	 </ul>
    </li>
		 
   <li><a href="#"><span title="Notebook">Notebook</span></a>
       <ul>
        <a href="not-dell.php">DELL</a>
		<a href="not-samsung.php">Samsung</a>
		<a href="not-positivo.php">Positivo</a>
		<a href="not-apple.php">Apple</a>
		<a href="not-hp.php">HP</a>
		<a href="not-lenovo.php">Lenovo</a>
	   </ul>
	</li>
   
   <li><a href="#"><span title="Computador">Computador<span></a>
 <ul>
        <a href="#">DELL</a>
		<a href="#">Samsung</a>
		<a href="#">Positivo</a>
		<a href="#">Apple</a>
		<a href="#">HP</a>
		<a href="#">Lenovo</a>
</ul>
    </li>
   
   <li><a href="#"><span title="Outros">Outros</span></a>
      <ul>
        <a href="#">Impressora</a>
		<a href="#">Tonner</a>
		<a href="#">Cartucho</a>
		<a href="#">Mouse</a>
		<a href="#">Teclado</a>
		<a href="#">Nobreak</a>
		</div> 
	  </ul>
   </li>
    
    </ul>
	
       </nav>
	   
	   <div class="rede">
    <p><a href="carrinho.php"><img src="imagem/carrinho.png"/></a></p>
	<?php echo '<h2>'.$_SESSION['tot'].'</h2>';?>
	<?php if(isset($_SESSION['nome_usuario'])==1){
					echo '<div class="menu-login"><h1> ☺' .$_SESSION['nome_usuario'].'
                             <div class="sair">
                               <a href="sair.php"> Sair</a></h1>
                                                           </div></div>';
					}else{
						echo '<p><a href="#telalogin"><img src="imagem/login.png"/></a></p>';
					}
					
	?>
  </div>
 		<header class="cabecalho">
			<div class="logo">
				<a href="index.html" title="Realce Informatica">Realce Informatica</a>
				
			</div> 
		 	<div class="alinhamento">
			 	<form method="post"><p>
				    
					<input type="text" placeholder="O que deseja pesquisar?">
					<button>
					<i><img src="img/busca.png"/></i>
					</button>
					
				</form>
				
				
			</div>
			
			<div id="oioi">
			<div class="lightbox" id="telalogin">
   <div class="box_login">
	<a href="" class="btfechar" id="fechar">X</a>
	<div class="login">
<?php
	if(isset($_POST['entrar'])){
	require 'config.php';
	require 'conexao.php'; 
	require 'database.php';
	$link = dbconectar();
	$email = $_POST['email'];
	$senha = $_POST['senha'];
		
	$result = mysqli_query($link,"SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'");
	
	
	if(mysqli_num_rows($result) ==1){
		
		$_SESSION['nome_usuario'] = $email;
		header('location:index.php');
	}else{
		echo "<script>alert('Detalhe de conta invalida!!!')</script>";
	}
	

	}
?>
				<form method="post" action="index.php?action=entrar">
				<img src="img/logo1.png"/>
				     <p>Entre com seu Login e senha</p>
					<input class="loog" type="email" name="email" placeholder="Digite o email" required="">	
					<input type="password" name="senha" placeholder="Digite a Senha" required="">		
					<button type="submit" name="entrar">Entrar</button>
					<a href="#"><span class="login_esqueceu">Esqueceu sua senha?</span></a>
				    <a href="#"><span>Faça seu cadastro</p></a>
				</form>
			</div>
   </div>
</div>
			</div>
	    </header>
		
	<main class="principal">
	
     <div class="geral">
<div class="lanca">
<div class="cb" id="um"><section id="tarja2">
<p></p>
			   <h1>LANCAMENTOS</h1>
		</section></div>
<div class="cb" id="dois"><section id="tarja2">
			   <h1>LANCAMENTOS</h1>
		</section></div>
<div class="cb" id="tres"><section id="tarja2">
			   <h1>LANCAMENTOS</h1>
		</section></div>
<div class="cb" id="quatro"><section id="tarja2">
			   <h1>LANCAMENTOS</h1>
		</section></div>
</div>
</div>
	
	<section class="carrousel">
	
  <div class="item"><img src="imagem/1.png">
  <p>R$20,00</p></div>
  <div class="item"><img src="imagem/2.png"><p>R$20,00</p></div>
  <div class="item"><img src="imagem/3.png"><p>R$20,00</p></div>
  <div class="item"><img src="imagem/4.png"><p>R$20,00</p></div>
  <div class="item"><img src="imagem/5.png"><p>R$20,00</p></div>
  <div class="item"><img src="imagem/6.png"><p>R$20,00</p></div>
 </section>
 
 <div class="prox">
 <button onclick="rotate(-1)"><img src="imagem/proximo1.png"></button>
 </div>
 <div class="ant">
 <button id="btn-ant" onclick="rotate(1)"><img src="imagem/voltar1.png"></button>
 </div>
 <div class="geral">
<div class="cubo">
<div class="cb" id="um"><section id="tarja2">
			   <h1>MELHORES OFERTAS</h1>
		</section></div>
<div class="cb" id="dois"><section id="tarja2">
			   <h1>MELHORES OFERTAS</h1>
		</section></div>
<div class="cb" id="tres"><section id="tarja2">
			   <h1>MELHORES OFERTAS</h1>
		</section></div>
<div class="cb" id="quatro"><section id="tarja2">
			   <h1>MELHORES OFERTAS</h1>
		</section></div>
</div>
</div>
        
 <div class="container">
			<div class="row">
			<ul>
			  <li>
			   <img src="img/main-carr/carr-print.png"  alt="Image">
			   </li>
			   <li>
		    	  <img src="img/main-carr/carr-placa.png" alt="Image"> 
		       </li>
			   <li>	
		    	  <img src="img/main-carr/carr-tv.png" alt="Image"> 
		       </li> 
			   <li>	
		    	  <img src="img/main-carr/carr-smart.png" alt="Image"> 
		    	</li>
				</ul>				
		    </div>
		</div>     
	</main>
	
	<section class="receber-noticias">
	<h3>Fique por dentro de novos lançamentos</h3>
	<p>Nos envie seu e-mail...</p>
	<form method="post">
	<input type="email" placeholder="Seu email">
	<button>Enviar</button>
	</form>
	</section>
	<footer class="rodape">
	 <p>© Tecnotícias - Todos os direitos reservados - Nailson Mello</p> 
	</footer>

  
 </body>
</html>
