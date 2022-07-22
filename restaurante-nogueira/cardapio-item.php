<?php include 'header.php'; ?>
<div class="ghost-element"> </div>
<section class="container d-flex justify-content-center">
    <div class="cardapio-width d-flex flex-column">
        <?php
        $server = 'localhost';
        $user = 'root';
        $password = 'root';
        $db_name = 'restaurante';
        $port = '8889';

        $db_connect = new mysqli($server, $user, $password, $db_name, $port);
        mysqli_set_charset($db_connect, "utf8");

function foodCharact($charact) {
    if ($charact) {
        echo 'style="display: none"'
    }
}

        if ($db_connect->connect_error) {
            echo 'Falha: ' . $db_connect->connect_error;
        } else {
            $id_item = $_GET['id'];
            $sql = "SELECT * from cardapio WHERE codigo='$id_item'";
            $result = $db_connect->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <h1 class="py-5"><?php echo $row['nome']; ?></h1>
                    <span class="py-5 fs-4">Apenas <?php echo $row['calorias']; ?> calorias</span>
                    <div class="cardapio_img cardapio_img-height" style="background-image: url('<?php echo $row['codigo']; ?>.png')"></div>
                    <div class="container">
                        <ul class="row py-2">
                            <li class="col"><i class="fa-solid fa-wheat-awn-circle-exclamation links p-2 item-padding"></i><span class="fs-5">glúten free</span></li>
                            <li class="col"><i class="fa-solid fa-egg links p-2 item-padding"></i><span class="fs-5">ovolactovegetariano</span></li>
                            <li class="col"><i class="fa-solid fa-leaf links p-2 item-padding"></i><span class="fs-5">vegano</span></li>
                        </ul>
                        <p class="pb-5 fs-4"><?php echo $row['descricao']; ?></p>
                    </div>
        <?php
                }
            } else {
                echo 'Não deu certo';
            }
        }
        ?>
    </div>
</section>
<?php include 'footer.php'; ?>