<html lang="en">
<head>
    <script src="/controller/paleta_grafica.js"></script>
    <script src="/controller/function.js"></script>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALETAS DE COR</title>
</head>
<body>
    <div>
        <h1>Gerador de cor RGBA</h1>
        
        <div class="paleta" id="cor"></div>
        <input type="range" id="red" onclick="gerarCor()" min="0" max="255" value="0"><span id="textRed">R: 0</span>
        <input type="range" id="green" onclick="gerarCor()" min="0" max="255" value="0"><span id="textGreen">G: 0</span>
        <input type="range" id="blue" onclick="gerarCor()" min="0" max="255" value="0"><span id="textBlue">B: 0</span>
        <input type="range" id="opt" onclick="gerarCor()" min="1" max="255" value="10"><span id="textOpt">A: 1</span>
    </div>

    
        <div class="options" id="" action="">
            <div class="linha">
                <div class="paletas" onclick="mudarCor(this)" data-cor="red"></div>
                <div class="paletas" onclick="mudarCor(this)" data-cor="green"></div>
                <div class="paletas" onclick="mudarCor(this)" data-cor="blue"></div>
            </div>
            <div class="linha">
                <div class="paletas" onclick="mudarCor(this)" data-cor="orange"></div>
                <div class="paletas" onclick="mudarCor(this)" data-cor="pink"></div>
                <div class="paletas" onclick="mudarCor(this)" data-cor="yellow"></div>
            </div>
            <div class="linha">
                <div class="paletas" onclick="mudarCor(this)" data-cor="black"></div>
                <div class="paletas" onclick="mudarCor(this)" data-cor="white"></div>
                <div class="paletas" onclick="mudarCor(this)" data-cor="brown"></div>
            </div>
            <!--<button class="bt1" onclick="mudarCor()" data-cor="greenyellow">text</button>-->
            <div class="separador"></div>
            <div class="paletaRgba" id="cor1">></div>
        
        </div>
</body>
</html>