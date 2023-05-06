<!DOCTYPE html>
<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$assunto = $_POST["assunto"];

$mensagem = "De: $nome.\nE-mail: $email.\nTelefone: $telefone.\nMensagem: $assunto.";





?>

<html lang="br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alves e Bucar</title>
        <link rel="icon" type="image/x-icon" href="wp-content\uploads\Group-677.ico">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        
        <link href="./css/swiper-bundle.min.css" rel="stylesheet">
    
    </head>

    <body>
        
        <?php 
            mail("vsmguilherme@gmail.com", "Contato Site",$mensagem);
            
            
            header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
            exit;

        ?>
        
        
    </body>
</html>