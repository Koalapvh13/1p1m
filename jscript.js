/**
 * Created by Matheus Dias Vieira on 01/11/2017.
 */

$.getJSON("https://api.vagalume.com.br/rank.php?apikey=660a4395f992ff67786584e238f501aa&type=art&period=week&scope=nacional&limit=100", function(data)
{
    var x = data.art.week.nacional;
    var nome = [];

    for (i = 0; i < x.length; i++)
    {
        nome.push("<div class='cantor'><img src='"+ x[i].pic_medium+"'><br> <input type='radio' onclick='verifica()' class='list1' name='artista' value='"+x[i].url+"'>"+x[i].name+"<br><input type='submit' value='Músicas'> </div>");
    }
    $("<div/>",{"id":"cant", html: nome.join("") }).appendTo(".form");


});
// Meta: trocar o valor da funtion : concluida 07/11/2017

function verifica() {
    selecionado=document.getElementsByClassName("radio").checked;

    if(!selecionado){

        $("#gs").empty();
        var id = document.getElementsByClassName("list1")
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

                    musicas.push("<input type='radio' class='let' onclick='sa()' name='lyri' value='"+ ly[i].id +"'>"+ly[i].desc+"<br>");

                }
                $("<div/>",{"id":"playlist", html: musicas.join("") }).appendTo("#gs");
            }

        );

    }else {$("#gs").empty();}}

function sa() {
    var id = document.getElementsByClassName("let")
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