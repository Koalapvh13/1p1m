<?php
/*



$url = file_get_contents("https://www.vagalume.com.br/anavitoria/trevo-tu-part-tiago-iorc.html");
$q = strstr($url,'<div itemprop=description>');
$q = str_replace('<div itemprop=description>','',$q);
$q = strstr($q,'</div>',true);
$q = str_replace('<br/>',' ',$q);
$a = array(",",".","!","?",";","(",")","...","\"","-","","  ");
$q = str_replace($a," ",$q);
$q = explode(' ',$q);
*/
$json = file_get_contents("https://api.vagalume.com.br/rank.php?apikey=660a4395f992ff67786584e238f501aa&type=art&period=week&scope=nacional&limit=100");
$json = json_decode($json);
$i=0;
    for($i;$i<=99;$i++)
    {

        $aka = $json->art->week->nacional[$i]->url;
        $ake = $json->art->week->nacional[$i]->name;
        $aki = $json->art->week->nacional[$i]->pic_medium;
        $ama[] = $aka;
        $ame[] = $ake;
        $ami[] = $aki;

    }
?>

<!DOCTYPE html>
<html>
<head>
   <title>Musicas no bd</title>
   <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="form">
    <div id="cant">


    <?php for ($i=0;$i<=99; $i++){ ?>
            <form action='recebe.php' method='post' target="frame"  enctype='multipart/form-data'>

            <div class='cantor'>
                <img src="<?php echo $ami[$i];?>"><br>
                <input type='radio' name='artista' value="<?php echo $ama[$i];?>"><?php echo $ame[$i];?><br>
                <input name="campo" type="hidden" id="campo" value="<? echo $ama[$i]; ?>">
                <input type='submit' value='Músicas'>
            </div>
            </form>
    <?php } ?>



</div>

    <div id="gs">
        <iframe name="frame" scrolling="no" align="center" frameborder="0">

        </iframe>
    </div>
</div>

</body>
</html>


<?php

if(count($_POST)>0)
    {
        //Já foi enviado o post
        $link = $_POST['artista']."index.js";
        $url = file_get_contents($link);
        $json_Musical = json_decode($url);
        $i=0;
        for($i;$i<=99;$i++)
        {

            $lyrics = $json_Musical->lyrics->item[$i]->url;
            $nome = $json_Musical->lyrics->item[$i]->desc;
            $letra[] = $lyrics;
            $musica[] = $nome;


        }


    }else
    {
        echo "<h1>Por favor, envie o link!</h1>";
    }

?>