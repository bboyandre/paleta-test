<html lang="en">
<head>
    <script src="/controller/function.js"></script>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <div class="paletas" onclick="mudarCor(event)" value="red"></div>
                <div class="paletas" value="green"></div>
                <div class="paletas" value="blue"></div>
            </div>
            <div class="linha">
                <div class="paletas" value="orange"></div>
                <div class="paletas" value="pink"></div>
                <div class="paletas" value="yellow"></div>
            </div>
            <div class="linha">
                <div class="paletas" value="red"></div>
                <div class="paletas" value="red"></div>
                <div class="paletas" value="red"></div>
            </div>
            <button class="bt1">text</button>
        
        </div>
</body>
</html>