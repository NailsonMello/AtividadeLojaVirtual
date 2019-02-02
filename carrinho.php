
<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
session_start();

 if(!isset($_SESSION['carrinho'])){
 	$_SESSION['carrinho'] = array(); 
 }
 if(isset($_GET['par'])){
	 if($_GET['par'] == 'add'){
		 $id = intval($_GET['id']);
		 if(!isset($_SESSION['carrinho'][$id])){
		  $_SESSION['carrinho'][$id] = 1;	 
		 }else{
			$_SESSION['carrinho'][$id] += 1; 
		 }
	 }		 
 
 if($_GET['par']== 'del'){
	  $id = intval($_GET['id']);
	  if(isset($_SESSION['carrinho'][$id])){
		 unset($_SESSION['carrinho'][$id]);
      }
   }
   if($_GET['par'] == 'up'){
	  if(is_array($_POST['prod'])){
		  foreach($_POST['prod'] as $id => $quantidade){
			  $id  = intval($id);
			  $qtd = intval($quantidade);
			  if(!empty($qtd) || $qtd <> 0){
				  $_SESSION['carrinho'][$id] = $qtd;
			  }else{
				  unset($_SESSION['carrinho'][$id]);
			  }
		  }
	  }
   }
 }
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
 <?php
    require 'config.php';
	require 'conexao.php'; 
	require 'database.php';
	
	$link = dbconectar();
?>
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
	   <p><a href="carrinho.php"><img src="imagem/carrinho.png"/> </a></p>
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
<main class="carrinho">
	<table class="tabela-carrinho">
		<caption >Seu Carrinho de compra</caption>
			<tr class="car-compra">
				 <td>Produto</td>
				 <td>QTD</td>
				 <td>Valor</td>
				 <td>SubTotal</td>
				 <td>Ação</td>
			</tr>
			
			
	
<?php
	
	if(count($_SESSION['carrinho']) == 0){
		echo ' <tr><td colspan="5">Seu carrinho esta vazio, adicione o produto desejado!!! </td></tr>';
	}else{
		foreach($_SESSION['carrinho'] as $id => $quantidade){
		$usuario = dbler("produtos WHERE id_produto = '$id'");  //SE FOR COLOCAR A BUSCA POR CAMPOS
	       // $usuario = dbler('usuarios',null);
		if(is_array($usuario)){ 
		foreach($usuario as $user){
		 /* outra forma de selecionar
		 $sql = "SELECT * FROM produtos WHERE id_produto = '$id'";
		 $res = mysqli_query($link,$sql) or die (mysqli_error($link));
		 $user = mysqli_fetch_assoc($res);
		 */
		 $nome = $user['descricao_produto'];
		 $preco = number_format($user['preco_produto'], 2, ',', '.');
		 $sub = number_format($user['preco_produto'] * $quantidade, 2, ',', '.');
		 
		 
		
		 echo '<tr>
		 <td>'.$nome.'</td>
		 <td><input type="text" name="prod['.$id.']" value="'.$quantidade.'"/></td>
		 <td>R$ '.$preco.'</td>
		 <td>R$ '.$sub.'</td>
		 <td><a href="?par=del&id='.$id.'"><img src="imagem/remover-carrinho.png"></a></td>
		 </tr>';
	  $Total+=$sub;
	  $toto += $quantidade;
		$_SESSION['tot'] = $toto;
			}
			
		}
		 
	}
	echo '<tr>
			<td colspan="3">Total:</td>
			<td>R$ '.$Total.'</td>
			<td>&nbsp;</td>
		 </tr>';//<td>R$'.$Total.'</td>&nbsp;
		//echo '<div class="rede"> <input type="text" value="'.$_SESSION['tot'].'"/></div>';
 }
?>

<?php

if(isset($_POST['enviar'])){
	$sqlinserirvenda = mysqli_query($link,"INSERT INTO vendas (total_venda) VALUES ('$Total')");
	
   $id = mysqli_insert_id($link);
   foreach($_SESSION['carrinho'] as $prodinsert => $quantidade){
     $sqlInserirItens = mysqli_query($link,"INSERT INTO itens_vendas (id_vendas, id_produto, qtd_itens_venda) VALUES ('$id', '$prodinsert', '$quantidade')");
}
   echo '<script> alert("Venda concluida com sucesso!!!")</script>';
}

?>
</table>
		<!-- <div class="atualizar-carrinho">
	<button  type="submit">Atualizar Carrinho</button>
	
<a href="index.php">Continuar Comprando</a> 
  </div>	-->

<div class="atualizar-carrinho">
<form action="" enctype="multipart/form-data" method="post">
<button type="submit" name="enviar">Finalizar Pedido</button>
</form>
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
