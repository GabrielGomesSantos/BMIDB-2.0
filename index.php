<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI DBZ</title>
    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div class="background">
        <div class="fundo">
            <img src="src/img/fundo.png" alt="fundo pagina">
        </div>
        <div class="overlay"></div>

        <div class="box">

            <div class="conteudo">

                <p>Informações basicas</p><br>

                <form action="index.php" method="post">

                    <label for="nome">Nome:</label><br>
                    <input type="text" name="nome" id="nome">
                    <br>
                    <label for="peso">Peso:</label><br>
                    <input type="number" name="peso" id="peso" min="40" max="180" >
                    <br>
                    <label for="altura">altura:</label><br>
                    <input type="number" step="0.01" name="altura" id="altura" min="1.0" max="2.30" >
                    
                    
                    <div class="butt">
                        <input type="submit" id="btn" value="Analizar">
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

    <?php
    $stick_boo = 'src/img/boo_1.png';
    $boo = 'src/img/boo_1.png';
    $fat_boo = 'src/img/boo_1.png';
    $resultado = null;

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    } 

    else {
        $nome = null;
    }

    if (isset($_POST['peso'])) {
        $peso = $_POST['peso'];
    }
    
    else {
        $peso = null;
    }

    if (isset($_POST['altura'])) {
        $altura = $_POST['altura'];
    }
    
    else {
        $altura = null; 
    }

    if (isset($nome, $peso, $altura) && $altura != 0) {
        $resultado = $peso / ($altura * $altura);
    }
    
    $nome_boo;
    $img;

    if ($resultado < 18.5) {
        $nome_boo = "stick boo";
        $img = $stick_boo;
    } elseif ($resultado >= 18.5 && $resultado < 25) {
        $nome_boo = "boo";
        $img = $boo;
    } else {
        $nome_boo = "fat boo";
        $img = $fat_boo;
    }

    
    ?>

        <div class="fundo_2">
            <img src="src/img/fundo.png" alt="fundo pagina">
        </div>

        <div class="medidor">
            <?php 
                print_r($_POST);
            ?>
            
        </div>

        <div class="kami_2">
            <img src="src/img/kami.png" alt="kami">

        </div>

        <div class="balao">
            <img src="<?php echo($balao)?>" alt="">
        </div>

        <div class="box_2">

                <div class="img">
                    <img src="<?php echo($img)?>" alt="">
                </div>

                <div class="nome">
                    <p> <?php echo($nome_boo)?></p>
                </div>
        </div>
    </section>
    <script src="src/js/script.js"></script>
</body>

</html>