<?php

//criar lista do carrinho de compra
function dbcarrinhoCompra($table, $params = null, $fields = '*'){
	$params = ($params) ? " {$params}": null;
	
	$query = "SELECT {$fields} FROM {$table}{$params }";
	$result = dbexecute($query);
	
	if(!mysqli_num_rows($result))
		return false;
	else{
		while($res = mysqli_fetch_assoc($result)){
			$dados[] = $res;
		}
		return array($dados);
	}
	
}

// ler os registros gravados no banco
function dbler($table, $params = null, $fields = '*'){
	$params = ($params) ? " {$params}": null;
	
	$query = "SELECT {$fields} FROM {$table}{$params }";
	$result = dbexecute($query);
	
	if(!mysqli_num_rows($result))
		return false;
	else{
		while($res = mysqli_fetch_assoc($result)){
			$dados[] = $res;
		}
		return $dados;
	}
	
}

//grava registros
function dbinserir($table, array $dados){
	$info = dbEscape($dados);
	
	$fields = implode(',', array_keys($dados));
	$values = "'".implode("','", $dados)."'";
	$query = "INSERT INTO {$table} ({$fields}) VALUES ({$values})";
	return dbexecute($query);
}

//executa query

function dbexecute($query){
	$link  = dbconectar();
	$result = @mysqli_query($link, $query) or die(mysqli_error($link));
	
	dbdesconectar($link);
	return $result;
}

?>