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
        .dada{
            height: 800px;
            width: 600px;
            column-count: 1;
        }
        div a img{
            display: none;
        }
    </style>
</head>
<body>
<?php


echo "<h1>";
echo $_POST['rad'];
echo "</h1>";

?>

</body>
</html>
