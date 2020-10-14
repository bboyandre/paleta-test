function gerarCor(){
    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    var opt = document.getElementById("opt").value;

    var cor = "rgba("+red+", "+green+", "+blue+", "+opt+")";
    document.getElementById("cor").style.background = cor;
}
function mudarCor(){
    //var colorir = document.getElementById(id);
    document.querySelectorAll(".options").forEach(i => i.style.backgroundColor = 'red');
}

    //console.log(element.getAttribute('data-cor'))
    /*var cor = e.target.value
    console.log(e.target.value)
        document.querySelectorAll(".options").forEach(i => i.style.border = 'solid 2px'.cor);*/
    

/*function trocarCorDessaBagaca(){
    var corDessaBagaca = array(
        red,
        green,
        blue,
        orange,
        pink,
        yellow,
        black,
        white,
        brown
    );
    for (i = 0; i <= 8; i++){
        echo (corDessaBagaca[i]);
    }
}*/