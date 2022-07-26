<?php
function listItems($category)
{
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
        $sql = "SELECT * from cardapio WHERE categoria='$category'";
        $result = $db_connect->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
?>
                <div class="row pb-5">
                    <a href="cardapio-item.php?id=<?php echo $row['codigo']; ?>" class="col"><div class="cardapio_img" style="background-image: url('<?php echo $row['codigo']; ?>.png')"></div></a>
                    <div class="col p-3">
                        <h3 class="text-uppercase"><?php echo $row['nome']; ?></h3>
                        <p><?php echo $row['descricao']; ?></p>
                    </div>
                    <div class="col text-center align-self-center">
                        <p class="fs-1">R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></p>
                    </div>
                </div>
<?php
            }
        } else {
            echo 'Não deu certo';
        }
    }
}
?>

<?php include 'header.php'; ?>
<div class="ghost-element"> </div>
<main class="cardapio-bg py-5">
    <section class="container">
        <div>
            <h2 class="text-center my-5">CARDÁPIO</h2>
            <div>
                <ul class="cardapio-list d-flex justify-content-between px-5">
                    <li class="py-3">
                        <a href="#cafe" class="links"><i class="fa-solid fa-mug-saucer mx-3 fs-5"></i><span class="sm-media-hidden">Cafés</span>
                            </a>
                    </li>
                    <li class="py-3">
                        <a href="#sanduiche" class="links"><i class="fa-solid fa-plate-wheat mx-3 fs-5"></i><span class="sm-media-hidden">Sanduíches e Saladas</span>
                            </a>
                    </li>
                    <li class="py-3">
                        <a href="#bebida" class="links"><i class="fa-solid fa-glass-water mx-3 fs-5"></i><span class="sm-media-hidden">Bebidas</span>
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<section class="container">
    <h2 id="cafes" class="text-center py-5">CAFÉS</h2>
    <?php listItems('cafe') ?>
</section>
<section class="cardapio-bg">
    <div class="container">
        <h2 id="sanduiche" class="text-center py-5">SANDUÍCHES E SALADAS</h2>
        <?php listItems('sanduiche') ?>
    </div>
</section>
<section class="container">
    <h2 id="bebida" class="text-center py-5">BEBIDAS</h2>
    <?php listItems('bebida') ?>
</section>

<?php include 'footer.php'; ?>