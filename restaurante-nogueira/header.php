<!DOCTYPE html>
<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<html lang="pt-br">
<head>
    <title>Restaurante Nogueira</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurante de comida saudável">
    <meta name="keywords" content="restaurante, comida saudável, vegetariano, vegano, fitness, low carb, alimentação">
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="position-fixed w-100">
        <div class="header-top">
            <div class="container d-flex column justify-content-between align-items-center">
                <div class="header-top-ifood">
                    <span>Faça já o seu pedido </span><img src="ifood.png" alt="ifood" class="header-top-logo mx-1">
                </div>
                <div class="header-top-socials my-1 d-flex align-items-center">
                    <a href="https://github.com/NogueiraMatos"><i class="fa-brands fa-facebook mx-3 fs-4"></i></a>
                    <a href="https://github.com/NogueiraMatos"><i class="fa-brands fa-instagram fs-4"></i></a>
                </div>
            </div>
        </div>
        <div class="header-bottom py-4">
            <nav class="container">
                <ul class="header-bottom-links mb-0 d-flex justify-content-between align-items-center">
                    <li><strong><a href="index.php#top" class="links">Sobre</a></strong></li>
                    <li><strong><a href="cardapio.php" class="links">Cardápio</a></strong></li>
                    <li class="sm-media-hidden"><a href="index.php"><img src="logotipo-header.png" alt="logotipo" class="header-bottom-img"></a></li>
                    <li><strong><a href="index.php#reserva" class="links">Reserva</a></strong></li>
                    <li><strong><a href="#contato" class="links">Contato</a></strong></li>
                </ul>
            </nav>
        </div>
    </header>