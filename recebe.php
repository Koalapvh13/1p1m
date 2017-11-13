<?php
/**
 * Created by PhpStorm.
 * User: uze
 * Date: 02/11/2017
 * Time: 14:34


$link = trim($_POST["artista"]);
$url = file_get_contents($link."index.js");
$json_Musical = json_decode($url);
$count = count($json_Musical->artist->lyrics->item)-1;
$i=0;
for($i;$i<=$count;$i++)
{

    $lyrics = $json_Musical->artist->lyrics->item[$i]->url;
    $nome = $json_Musical->artist->lyrics->item[$i]->desc;
    $letra[] = $lyrics;
    $musica[] = $nome;
}
$conta = count($letra)-1;*/
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        div a img{
            display: none;
        }
    </style>
</head>
<body>
<?php
/*
$str = $_POST['lyri'];

$alb = file_get_contents("https://api.vagalume.com.br/search.php?musid=".$str);
$json = json_decode($alb);
$i=0;

    $aka = $json->mus[0]->text;
$q = str_replace('\n',' ',$aka);
$q = str_replace('<br/>',' ',$q);
$a = array(",",".","!","?",";","(",")","...","\"","-","","  ");
$q = str_replace($a," ",$q);
$q = explode(' ',$q);
*/
if ($_POST){
$a =$_POST['arry'];
}else{

}


?>

</body>
</html>
