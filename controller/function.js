function gerarCor(){
    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    var opt = document.getElementById("opt").value;

    var cor = "rgba("+red+", "+green+", "+blue+", "+opt+")";
    document.getElementById("cor").style.background = cor;
}
function mudarCor(e){
    var cor = e.target.value
    console.log(e.target.value)
        document.querySelectorAll(".options").forEach(i => i.style.border = 'solid 2px'.cor);
    }