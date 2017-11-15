<<<<<<< HEAD:artlist.php
<?php include 'recebe.php'; ?>
<!DOCTYPE html>
<html>
<head>
   <title>Musicas no bd</title>
   <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .janelaModal{
            position: fixed;
            font-family: Arial,Helvetica,sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,0.8);
            z-index: 99999;
            opacity: 0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }
        .janelaModal:target{
            opacity: 1;
            pointer-events: auto;
        }
        .janelaModal>div{
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff,#999);
            background:-webkit-linear-gradient(#fff,#999);
            background:-o-linear-gradient(#fff,#999);
        }
        .fechar{
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top:-10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius:12px;
            -webkit-box-shadow: 1px 1px 3px #000;
            -moz-box-shadow:  1px 1px 3px #000;
            box-shadow:1px 1px 3px #000;
        }
        .fechar:hover{
            background:#00d9ff;
        }
    </style>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    $.getJSON("https://api.vagalume.com.br/rank.php?apikey=660a4395f992ff67786584e238f501aa&type=art&period=week&scope=nacional&limit=100", function(data)
    {
        var x = data.art.week.nacional;
        var nome = [];

        for (i = 0; i < x.length; i++)
        {
            nome.push("<div class='cantor'><img src='"+ x[i].pic_medium+"'><br> <input type='radio' onclick='verifica()' class='list1' name='artista' value='"+x[i].url+"'>"+x[i].name+"<br></div>");
        }
        $("<div/>",{"id":"cant", html: nome.join("") }).appendTo(".over");


    });
   // Meta: trocar o valor da funtion : concluida 07/11/2017

    function verifica() {
        selecionado=document.getElementsByClassName("radio").checked;

        if(!selecionado){

            $("#canti").empty();
            var id = document.getElementsByClassName("list1");
                for(i=0;i < id.length;i++){
                    if (id[i].checked){
                        var c = id[i].value + "index.js";

                    }
                }


            jQuery.getJSON(
                    c,
                    function (data) {
                        var ly= data.artist.lyrics.item;
                        var musicas = [];
                        for(i=0;i< ly.length;i++){

                            musicas.push("<input type='radio' class='let' onclick='sa();df();' name='lyri' value='"+ ly[i].id +"'>"+ly[i].desc+"<br>");

                        }
                        $("<div/>",{"id":"playlist", html: musicas.join("") }).appendTo("#canti");
                    }

            );

        }else {$("#canti").empty();}}

    //Colca primeira letra da string em Caixa Alta
    function ucfirst(str) {
        return str.substr(0,1).toUpperCase()+str.substr(1)
    }

    function sa() {
        var id = document.getElementsByClassName("let");
        for(i=0;i < id.length;i++){
            if (id[i].checked){
            var c = id[i].value;
                jQuery.getJSON(
                        "https://api.vagalume.com.br/search.php"
                        + "?musid=" + c,
                function (data) {
                    // Letra da música
                    var g =  data.mus[0].text;
                    var ds = g.replace(/\n/g," ");
                    var er = /\^|~|\?|,|\*|\.|\-|!|\?|\(|\)|\[|\]|:|;|\{|\}/g;
                    var dsa = ds.replace(er,"");
                    var arr = dsa.split(" ");
                   /* $.ajax({
                        type: "POST",
                        data: {arry: arr} ,
                        url: "recebe.php",
                        success: function(resposta){
                            alert(resposta);
                        }
                    });*///enviar para o PHP por AJAX
                    var x=0;
                    document.getElementById('gf').innerText= ucfirst(arr[x]);

                    //Plus 1
                    document.getElementById("more1").onclick = function next(){
                        x++;
                        document.getElementById('gf').innerText= ucfirst(arr[x]);};
                    //Less 1
                    document.getElementById("voltar").onclick = function next(){
                        x--;
                        document.getElementById('gf').innerText=ucfirst(arr[x]);
                        };

                }
            );
//Meta: Enviar Palavras para o BDz  
            }
        }
    }

</script>
<!--- Conteudo total --->
<div class="over">
    <!--- recebe a lista de musicas --->
<div class="form">

    <!--- lista de musicas --->
    <div id="gs" style="margin-left: 0px">
        <form action='recebe.php' id="canti" target="mod" name='form1' method='post' enctype='multipart/form-data'>

        </form>
    </div>
</div>
</div>
<a href="javascript:env()" id="c">Enviar form!</a>
<a href="#modal" id="b">Abrir Modal</a>
<!--- Janela Modal --->
<div id="modal" class="janelaModal">
    <div>
        <a href="#fechar" title="Fechar" class="fechar">X</a>
        <h2>Janela Modal</h2>

        <h1><p id="gf"></p></h1>
        <button id="more1" value="1">Bazinga</button>
        <button id="voltar">Good old days</button>
        <!--<iframe frameborder="none" name="mod"></iframe>-->
    </div>
</div>
</body>
<script>
    function env() {
        document.form1.submit();

    }

    function df() {
        document.getElementById('b').click();
    }
</script>
</html>
=======
<!DOCTYPE html>
<html>
<head>
   <title>Musicas no bd</title>
   <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .janelaModal{
            position: fixed;
            font-family: Arial,Helvetica,sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,0.8);
            z-index: 99999;
            opacity: 0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }
        .janelaModal:target{
            opacity: 1;
            pointer-events: auto;
        }
        .janelaModal>div{
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff,#999);
            background:-webkit-linear-gradient(#fff,#999);
            background:-o-linear-gradient(#fff,#999);
        }
        .fechar{
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top:-10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius:12px;
            -webkit-box-shadow: 1px 1px 3px #000;
            -moz-box-shadow:  1px 1px 3px #000;
            box-shadow:1px 1px 3px #000;
        }
        .fechar:hover{
            background:#00d9ff;
        }
    </style>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    $.getJSON("https://api.vagalume.com.br/rank.php?apikey=660a4395f992ff67786584e238f501aa&type=art&period=week&scope=nacional&limit=100", function(data)
    {
        var x = data.art.week.nacional;
        var nome = [];

        for (i = 0; i < x.length; i++)
        {
            nome.push("<div class='cantor'><img src='"+ x[i].pic_medium+"'><br> <input type='radio' onclick='verifica()' class='list1' name='artista' value='"+x[i].url+"'>"+x[i].name+"<br><input type='submit' value='Músicas'> </div>");
        }
        $("<div/>",{"id":"cant", html: nome.join("") }).appendTo(".over");


    });
   // Meta: trocar o valor da funtion : concluida 07/11/2017

    function verifica() {
        selecionado=document.getElementsByClassName("radio").checked;

        if(!selecionado){

            $("#canti").empty();
            var id = document.getElementsByClassName("list1");
                for(i=0;i < id.length;i++){
                    if (id[i].checked){
                        var c = id[i].value + "index.js";

                    }
                }


            jQuery.getJSON(
                    c,
                    function (data) {
                        var ly= data.artist.lyrics.item;
                        var musicas = [];
                        for(i=0;i< ly.length;i++){

                            musicas.push("<input type='radio' class='let' onclick='sa();df();env()' name='lyri' value='"+ ly[i].id +"'>"+ly[i].desc+"<br>");

                        }
                        $("<div/>",{"id":"playlist", html: musicas.join("") }).appendTo("#canti");
                    }

            );

        }else {$("#canti").empty();}}

    function sa() {
        var id = document.getElementsByClassName("let");
        for(i=0;i < id.length;i++){
            if (id[i].checked){
            var c = id[i].value;
                jQuery.getJSON(
                        "https://api.vagalume.com.br/search.php"
                        + "?musid=" + c,
                function (data) {
                    // Letra da música
                    alert(data.mus[0].text);
                }
            );

            }
        }
    }

</script>
<!--- Conteudo total --->
<div class="over">
    <!--- recebe a lista de musicas --->
<div class="form">

    <!--- lista de musicas --->
    <div id="gs" style="margin-left: 0px">
        <form action='recebe.php' id="canti" target="mod" name='form1' method='post' enctype='multipart/form-data'>

        </form>
    </div>
</div>
</div>
<a href="javascript:env()" id="c">Enviar form!</a>
<a href="#modal" id="b">Abrir Modal</a>
<!--- Janela Modal --->
<div id="modal" class="janelaModal">
    <div>
        <a href="#fechar" title="Fechar" class="fechar">X</a>
        <h2>Janela Modal</h2>
        <iframe frameborder="none" name="mod"></iframe>
    </div>
</div>
</body>
<script>
    function env() {
        document.form1.submit();

    }

    function df() {
        document.getElementById('b').click();
    }
</script>
</html>
>>>>>>> f26e28262d310e7c58d4869aaf80f714c8d4491c:artlist.html
