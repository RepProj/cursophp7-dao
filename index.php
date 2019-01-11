<?php 

require_once("config.php");

//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("jo");
//echo json_encode($search);

$usuario = new Usuario();
$usuario->login("root", "!1@#$");
echo $usuario;

?>