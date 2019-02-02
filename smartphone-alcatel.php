<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8">
 <title>Realce Informatica</title>
 <meta name="description" content="Site de produtos de informatica.">
 <meta name="keywords" content="notebooks, smartphones, computadores">
 <meta name="robots" content="index, follow">
 <meta name="author" content="Nailson Mello">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.03/jquery.cycle.all.min.js"></script>
 <script type="text/javascript" src="js/jcarousellite.js"></script>
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
			 	<form method="post">
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
				
				<form method="post">
				<img src="img/logo1.png"/>
				     <p>Entre com seu Login e senha</p>
					<input class="loog" type="text" name="usuario" placeholder="Digite o Login" required="">	
					<input type="password" name="senha" placeholder="Digite a Senha" required="">		
					<button>Entrar</button>
				</form>
			</div>
   </div>
</div>
			</div>
	    </header>
	<main class="principal servicos">
<?php
	
	require 'config.php';
	require 'conexao.php'; 
	require 'database.php';
	$link = dbconectar();
	
	$usuario = dbler('produtos','WHERE marca_produto = "alcatel"'); //SE FOR COLOCAR A BUSCA POR CAMPOS
	// $usuario = dbler('usuarios',null);
	 if(is_array($usuario)){  
	 foreach($usuario as $user){
		 
?>
	 <article class="servico">
	 
	    <a href="smartphone/<?php echo $user['img_produto']; ?>"><img src="smartphone/<?php echo $user['img_produto']; ?>" alt="Alcatel"></a>
	  <div class="inner">
	  <a href"#"><?php echo $user['descricao_produto']; ?></a>
	  <h4>Preço: R$ <?php echo  number_format($user['preco_produto'], 2, ',', '.'); ?></h4>
	  <a href="carrinho.php?par=add&id=<?php echo $user['id_produto'];?>"><img src="imagem/add-carrinho.png"/></a>
	 </article>
<?php
		 }
	 }
?>
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

<?php

	dbdesconectar($link);
	
?>