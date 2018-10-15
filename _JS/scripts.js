/**
 * Created by uze on 14/10/2018.
 */
function jsonToArray() {
    $.getJSON("./_JSON/tb_palavras.json", function (data){
        console.log(data[1]);
        var tamanho = Object.keys(data).length;
        var sorteio = Math.floor((Math.random() * tamanho) + 1);
        $(".palavra").html( data[sorteio].toUpperCase());
    });
}
