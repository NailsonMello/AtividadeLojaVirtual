<?php
	
	//protege contra SQL injection
	
	function dbEscape($dados){
		
		$link = dbconectar();
		
		if(!is_array($dados))
			$dados = mysqli_real_escape_string($link, $dados);
		else{
			$arr = $dados;
			foreach($arr as $key=>$value){
				$key   = mysqli_real_escape_string($link, $key);
				$value = mysqli_real_escape_string($link, $value);
				
				$dados[$key] = $value;
			}
		}
		dbdesconectar($link);
		return $dados;
	}
	
	//fecha conexão com o banco de dados
	
	function dbdesconectar($link){
		
		@mysqli_close($link) or die(mysqli_error($link));
	}

	
	//abrindo conexão com o banco de dados
	
	function dbconectar(){
		
		$link = @mysqli_connect(local, usuario, senha, bd) or die(mysqli_connect_error());
		mysqli_set_charset($link, charset) or die(mysqli_error($link));
		
		return $link;
	}

?>