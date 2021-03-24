<!DOCTYPE html>
<html lang="en">
    
<?php 
session_start();?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('background.gif');
            background-size: cover;
        }

        #pop {

            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -150px;
            margin-top: -100px;
            padding: 10px;
            width: 300px;
            height: 250px;
            border: 4px solid rgb(243, 150, 166);
            background-color:rgb(230, 176, 212);
            border-radius: 5px;
        }

        input[type=submit], input[type=reset] {
            background-color: rgb(243, 150, 166);
            position: relative;
            
            color: black;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        #form{
            display: flex;
            position: relative;
        }

        

          
    </style>
</head>

<body>
    <div id='pop'>
        <span style="margin-left:20%">Bem vindo Onii-chan >.<</span>
        <form action="calculadora.php" method="post" >
            <div class="row" style="margin-left:20%">
                Primeiro Numero: <div class="col-75"><input name="num1" type="number"><br></div>
                Segundo numero: <div class="col-75"><input name="num2" type="number"><br></div>
            </div>
            <span style="margin-left:20%" >Selecione uma operação: </span> 
            <br>
            <div id = "form" style="margin-left:10%">
                <input type="submit" name="sinal" value="+">     
                <input type="submit" name="sinal" value="-">     
                <input type="submit" name="sinal" value="*">     
                <input type="submit" name="sinal" value="/">  
                <input type="submit" name="sinal" value="%">  
                </div>   

                <span style="margin-left:20%">(≧▽≦) Resultado (≧▽≦) </span>
           
                <?if(isset($_SESSION['Retorno'])){?>
            <p style="margin-left:5%">
                <?= $_SESSION['Retorno']?>
            </p>
        <?}?>
        </form>
    </div>

</body>

</html>