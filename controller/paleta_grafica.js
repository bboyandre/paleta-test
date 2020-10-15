function mudarCor(element){
    var colorir = element.getAttribute("data-cor");
    document.querySelectorAll(".options").forEach(i => i.style.borderColor = colorir);
}
//     var corel = "green";
//     var colorir = element.getAttribute('data-cor');

//     /*var cor = e.target.value
//     console.log(e.target.value)*/
//         document.querySelectorAll(".options").forEach(i => i.style.border = 'solid 2px'.corel);
// }    

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