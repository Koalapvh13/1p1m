<?php
/**
 * Created by PhpStorm.
 * User: uze
 * Date: 23/07/2017
 * Time: 17:18
 */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "id2990934_cbm";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) ;

$db = mysqli_select_db($conexao,"id2990934_cbm") or die("Erro ao conectar ao banco de dados");

