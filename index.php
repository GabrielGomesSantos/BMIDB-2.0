<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC Com PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>



    <div class="background">
        <div class="fundo">
            <img src="src/img/fundo.jpg" alt="fundo pagina">
        </div>
        <div class="overlay"></div>

        <div class="box">

            <div class="conteudo">

                <p>Informações basicas</p><br><br>

                <form action="" method="post" >

                    <label for="nome">Nome:</label><br><br>
                    <input type="text" name="nome" id="nome">
                    <br>
                    <label for="peso">Peso:</label><br><br>
                    <input type="number" name="peso" id="peso" min="40" max="180" >
                    <br>
                    <label for="altura">altura:</label><br><br>
                    <input type="number" step="0.01" name="altura" id="altura" min="1.0" max="2.30" >
                    <br>

                    <div class="butt">
                        <button id="btn">anasdlizar</button>

                    </div>

                </form>


            </div>
            
           
        </div>
        
        <div class="kami">
            <img src="src/img/kami.png" alt="kami">

        </div>


        <div class="balao">
            <img src="src/img/Group 1.png" alt="">
        </div>
    </div>

    <section id="Resultado">

        
    </section>


    <script src="src/js/script.js"></script>
</body>

</html>