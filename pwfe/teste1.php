<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Request</title>
    <script>
        function showDadosListener(){
            console.log(this.responseText);
            document.getElementById("textoExtra").innerHTML = this.responseText;
        }

        function loadParte(){

            var parteExtra = new XMLHttpRequest();
            parteExtra.onload = showDadosListener;
            parteExtra.open("get", "http://jonasfev.unaux.com/person/ftpproj/pwfe/texto.txt", true);
            parteExtra.send();

        }
    </script>
</head>
<body>
    <button onclick="loadParte();">Clique para carregar o arquivo</button>

    <div class="container">
        <div id="textoExtra"></div>

    </div>
    
</body>
</html>