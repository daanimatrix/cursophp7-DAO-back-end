<?php
require_once("config.php");

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;

/*
//ALTERAR UM USUARIO
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("professor","pro123456");
echo $usuario;
*/


/*
//INSERIR DADOS NA TABELA tb_usuario NA PARTE deslogin / dessenha 
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;

*/

/*
//CRIANDO UM NOVO USUARIO / UM SEGUNDO TIPO DE INSERIR 
$aluno = new Usuario("aluno2","@aluno2");
$aluno->insert();
echo $aluno;
*/



/*
//CARREGA UMA LISTA DE USUARIO DE BUSCA
$search = Usuario::search("a");
echo json_encode($search);
*/

/*
//ENTRAR COM LOGIN  
$usuario =new Usuario();
$usuario->login("Robson","987654");
echo $usuario;
*/

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