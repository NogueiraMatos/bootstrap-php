<footer>
    <div class="container px-0 w-100">
        <div class="d-flex justify-content-center flex-wrap">
            <div class="p-2 mb-5 d-flex row text-center">
                <h5 class="footer_topics pb-1">Siga-nos</h5>
                <a href="https://github.com/NogueiraMatos" class="col"><i class="fa-brands fa-facebook fs-2 col"></i></a>
                <a href="https://github.com/NogueiraMatos" class="col"><i class="fa-brands fa-instagram fs-2 col"></i></a>
            </div>
            <div class="p-2 footer_topics footer_contact text-center">
                <h5 id="contato">Contato</h5>
                <p>Esplanada dos Ministérios lote 12 - Brasília, DF, 70050-000</p>
                <p>(61) 3333-2222</p>
                <p class="text-wrap">contato@restaurantenogueira.com.br</p>
            </div>
            <div class="p-2 footer_topics">
                <h5>Horários</h5>
                <?php
                $weekday = date('w');
                $now = strtotime('now');
                $aurora = strtotime('today');
                $time = $now - $aurora;
                if ($weekday >= 2 && $weekday <= 6) {
                    if ($time >= 41400 && $time <= 79200) {
                        echo '<p style="color: #B6F431">Estamos abertos agora!</p>';
                    } else {
                        echo '<p style="color: #AC1216">Estamos fechados agora!</p>';
                    }
                } elseif ($weekday = 7) {
                    if ($time >= 41400 && $time <= 50400) {
                        echo '<p style="color: #B6F431">Estamos abertos agora!</p>';
                    } else {
                        echo '<p style="color: #AC1216">Estamos fechados agora!</p>';
                    }
                }
                ?>
                <p>Ter-Sab: 11h30 - 22h00</p>
                <p>Domingo 11h30 - 14h</p>
            </div>
            <div class="p-2 sm-media-hidden">
                <h5 class="footer_topics">Como chegar</h5>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6456.517133600096!2d-47.87604230568438!3d-15.800365075410953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55fbb231e9698d19!2sCatedral%20Metropolitana%20Nossa%20Senhora%20Aparecida!5e0!3m2!1spt-PT!2sbr!4v1658411979721!5m2!1spt-PT!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div>
            <p class="text-center mb-1 footer_topics">
                <?php
                $ano_atual = date("Y");
                echo $ano_atual;
                ?> © Todos os direitos reservados</p>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/797e057ed0.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
    $(document).ready(function() {
        var $tel = $("#inputTel");
        $tel.mask('00 - 00000-0000', {
            reverse: true
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>