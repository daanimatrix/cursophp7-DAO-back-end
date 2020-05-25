<?php
require_once("config.php");

/*
//CARREGA UMA LISTA DE USUARIO DE BUSCA
$search = Usuario::search("a");
echo json_encode($search);
*/

$usuario =new Usuario();

$usuario->login("Robson","987654");

echo $usuario;

/*
//TRAS UMA LISTA DE USUARIOS
$lista = Usuario::getList();
echo json_encode($lista);
*/



/*
//AQUI SÓ TRAS A INFORMAÇÃO DE UM USUARIO
$root = new Usuario();
$root->loadbyId(2);
echo $root;
*/


/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario");
echo json_encode($usuarios);
*/

?>