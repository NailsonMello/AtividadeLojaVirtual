<?php
session_start();
if(session_destroy()) // finaliza sessão
{
header("Location: index.php"); // redireciona para index
}
?>