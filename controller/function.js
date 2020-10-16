function gerarCor(){
    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    var opt = document.getElementById("opt").value;

    var cor = "rgba("+red+", "+green+", "+blue+", "+opt+")";
    document.getElementById("cor").style.background = cor;
    document.getElementById("cor1").style.background = cor;
}