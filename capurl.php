<?php
/**
 * Created by PhpStorm.
 * User: uze
 * Date: 30/09/2017
 * Time: 20:21
 */

/*
$url = file_get_contents('https://www.letras.mus.br/legiao-urbana/22489/');
preg_match_all('/article>(.*)<.article>/', $url, $conteudo);
$crato = strval(str_replace("article>"," ",$conteudo[0][0]));
$b = strip_tags($crato);
$b2 = str_pad($b, 10, "  ",STR_PAD_LEFT );
$b3 = preg_replace('/(?<!\ )[A-Z]/', ' $0', $b2);
echo "<pre>".$b3."</pre>" ;
*/
//include "_php/conet.php";
//$sql = "SELECT * FROM palavras";
//$result= mysqli_query($conexao,$sql);

//while ($row = mysqli_fetch_assoc($result)) {
    //$arrayEmails[] = $row["palavra"];}
//echo "<pre>";
// var_dump($arrayEmails);
include "conet.php";
$sql = "SELECT * FROM palavras";
$result= mysqli_query($conexao,$sql);
while ($row = mysqli_fetch_assoc($result)) {
    $arrayEmails[] = $row["palavra"];}
$itens = intval(count($arrayEmails));
$tac = $itens - 1;
$sorte = rand(1,$tac);
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        h1{
            font-size: 65px;
            margin-top: 0px;
        }
        div a img{
            display: none;
        }
    </style>
</head>

<body>

<h1 align="center"><?php echo $arrayEmails[$sorte]; ?></h1>

</body>


</html>
