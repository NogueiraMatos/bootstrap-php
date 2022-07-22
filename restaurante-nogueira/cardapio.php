<?php include 'header.php'; ?>
<div class="ghost-element"> </div>
<main class="cardapio-bg py-5">
    <section class="container">
        <div>
            <h2 class="text-center my-5">CARDÁPIO</h2>
            <div>
                <ul class="cardapio-list d-flex justify-content-between px-5">
                    <li class="py-3">
                        <h4><i class="fa-solid fa-mug-saucer mx-3 fs-5"></i>Cafés
                    </li>
                    </h4>
                    <li class="py-3">
                        <h4><i class="fa-solid fa-plate-wheat mx-3 fs-5"></i>Sanduíches e Saladas
                    </li>
                    </h4>
                    <li class="py-3">
                        <h4><i class="fa-solid fa-glass-water mx-3 fs-5"></i>Bebidas
                    </li>
                    </h4>
                </ul>
            </div>
        </div>
    </section>
</main>
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
    echo 'Conexão feita com sucesso';
    $sql = "SELECT * from cardapio WHERE categoria='cafe'";
    $result = $db_connect->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
            <div class="row p-5">
                <div class="cardapio_img col"></div>
                <div class="col p-5">
                    <h3 class="text-uppercase"><?php echo $row['nome']; ?></h3>
                    <p><?php echo $row['descricao'] ?></p>
                </div>
                <div class="col text-center align-self-center">
                    <p class="fs-1">R$ <?php echo $row['preco'] ?></p>
                </div>
            </div>
<?php
        }
    } else {
        echo 'Não deu certo';
    }
}

// foreach ($cardapio as $item) {
//     $codigo = $item['codigo'];
//     $nome = $item['nome'];
//     $categoria = $item['categoria'];
//     $descricao = $item['descricao'];
//     $preco = $item['preco'];
//     $destaque = $item['destaque'];
// }
?>
<section class="container">
    <h2 class="text-center py-5">CAFÉS</h2>
    <!-- <div class="row p-5">
        <div class="cardapio_img col"></div>
        <div class="col p-5">
            <h3 class="text-uppercase">Expresso</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure qui cum deleniti culpa unde maiores natus ratione illum veritatis perspiciatis modi architecto sit quia, ullam maxime dolore explicabo blanditiis corporis.</p>
        </div>
        <div class="col text-center align-self-center">
            <p class="fs-1">R$ 5,00</p>
        </div>
    </div> -->
</section>
<section class="cardapio-bg">
    <div class="container">
        <h2 class="text-center py-5">SANDUÍCHES E SALADAS</h2>
        <div class="row p-5">
            <div class="cardapio_img col"></div>
            <div class="col p-5">
                <h3 class="text-uppercase">Expresso</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure qui cum deleniti culpa unde maiores natus ratione illum veritatis perspiciatis modi architecto sit quia, ullam maxime dolore explicabo blanditiis corporis.</p>
            </div>
            <div class="col text-center align-self-center">
                <p class="fs-1">R$ 5,00</p>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <h2 class="text-center py-5">BEBIDAS</h2>
    <div class="row p-5">
        <div class="cardapio_img col"></div>
        <div class="col p-5">
            <h3 class="text-uppercase">Expresso</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure qui cum deleniti culpa unde maiores natus ratione illum veritatis perspiciatis modi architecto sit quia, ullam maxime dolore explicabo blanditiis corporis.</p>
        </div>
        <div class="col text-center align-self-center">
            <p class="fs-1">R$ 5,00</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>