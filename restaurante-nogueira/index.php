<?php include 'header.php'; ?>
<main id='top'>
    <div class="main-image d-flex justify-content-center align-items-center mb-5">
        <img src="logotipo-header-transparente.png" alt="logotipo" class="main-img">
    </div>
</main>
<section class="container">
    <div class="d-flex flex-row justify-content-between">
        <div class="about">
            <h2>QUEM SOMOS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, ipsa aliquid. Dolorum magni expedita
                quod necessitatibus repudiandae quis. Quas incidunt culpa ipsum, maxime corporis nobis facilis
                laudantium minus explicabo magnam.</p>
        </div>
        <div class="about-img mb-5"></div>
    </div>
</section>
<section class="cardapio w-100 pb-5">
    <div class="container">
        <div class="d-flex row align-items-center justify-content-center">
        <a href="cardapio.php" class="links"><h2 class="text-center my-5">CARDÁPIO</h2></a>
            <div>
                <ul class="cardapio-list d-flex justify-content-between px-5">
                    <li class="py-3">
                        <h4><a href="cardapio.php#cafe" class="links"><i class="fa-solid fa-mug-saucer mx-3 fs-5"></i>Cafés</a>
                        </h4>
                    </li>
                    <li class="py-3">
                        <h4><a href="cardapio.php#sanduiche" class="links"><i class="fa-solid fa-plate-wheat mx-3 fs-5"></i>Sanduíches e Saladas</a>
                        </h4>
                    </li>
                    <li class="py-3">
                        <h4><a href="cardapio.php#bebida" class="links"><i class="fa-solid fa-glass-water mx-3 fs-5"></i>Bebidas</a>
                        </h4>
                    </li>
                </ul>
            </div>
            <div id="carouselHighlight" class="carousel slide pt-3" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <?php
                    $server = 'localhost';
                    $user = 'root';
                    $password = 'root';
                    $db_name = 'restaurante';
                    $port = '8889';

                    $db_connect = new mysqli($server, $user, $password, $db_name, $port);
                    mysqli_set_charset($db_connect, "utf8");

                    if ($db_connect->connect_error) {
                        echo 'Falha: ' . $db_connect->connect_error;
                    } else {
                        $sql = "SELECT * from cardapio WHERE destaque=1";
                        $result = $db_connect->query($sql);
                        if ($result->num_rows > 0) {
                            $active = true;
                            while ($row = $result->fetch_assoc()) {
                    ?>
                                
                                <div class="carousel-item 
                                
                                <?php
                                if ($active == true) {
                                    echo 'active';
                                    $active = false;
                                }
                                ?>
                                
                                ">
                                    <img src="<?php echo $row['codigo']; ?>.png" class="d-block w-100" alt="<?php echo $row['nome']; ?>">
                                    <div class="carousel-caption d-none d-md-block carousel-img">
                                        <span class="carousel-p fs-2"><?php echo $row['nome']; ?></span>
                                        <div>
                                            <p class="carousel-p"><?php echo $row['descricao']; ?></p>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        } else {
                            echo 'Não deu certo';
                        }
                    }
                    ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHighlight" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHighlight" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="w-100 py-5">
    <div class="container">
        <h2 id="reserva" class="text-center mb-5">RESERVA</h2>
        <form>
            <div class="row">
                <div class="mb-3 col-8">
                    <label for="inputName" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="inputName" required>
                </div>
                <div class="mb-3 col">
                    <label for="inputTel" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="inputTel" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-8">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Nós nunca compartilharemos seu email com outra pessoa.
                    </div>
                </div>
                <div class="mb-3 col">
                    <label for="inputDate" class="form-label">Data da reserva</label>
                    <input type="datetime-local" class="form-control" id="inputDate" min="2022-07-20 10:00" max="2022-08-20 10:00" step="1800" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-8">
                    <label for="inputMsg" class="form-label">Mensagem</label>
                    <textarea type="text" class="form-control formInputMsg" id="inputMsg"></textarea>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="inputNumGuests" class="form-label">Número de pessoas</label>
                        <input type="number" class="form-control" id="inputNumGuests" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPromCod" class="form-label">Código promocional</label>
                        <input type="text" class="form-control" id="inputPromCod">
                    </div>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Estou ciente de que o envio do formulário não é
                    garantia da reserva.</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>
<!-- HTML semântico
<article>
<aside>
<details>
<figcaption>
<figure>
<footer>
<header>
<main>
<mark>
<nav>
<section>
<summary>
<time> -->