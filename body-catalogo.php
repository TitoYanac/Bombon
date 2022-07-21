<section class="c_s1">
    <div id="search">
        <form action="controller/buscar_producto.php" method="POST" autocomplete="off">
            <input type="text" name="item" placeholder="Escribe lo que buscas..." required>
            <input type="image" src="icons/lupa.png" name="btn_item_search" autocomplete="off">
        </form>
    </div>
    <div id="filtros">
        <form action="controller/buscar_producto.php" method="POST">
        <div class="btn">
                <div>
                    <input class="text-btn" type="submit" value="Lo último en moda <?php echo date('Y', time()); ?>" name="moda_<?php echo date('year'); ?>">
                </div>
            </div>
            <div class="btn">
                <div>
                <input  class="text-btn" type="submit" value="Carteras" name="carteras">
                </div>
            </div>
            <div class="btn">
                <div>
                <input  class="text-btn" type="submit" value="Mochilas" name="mochilas">
                </div>
            </div>
            <div class="btn">
                <div>
                <input  class="text-btn" type="submit" value="Billeteras" name="billeteras">
                </div>
            </div>
        </form>
    </div>
    <h1>Catálogo</h1>

</section>
<section class="c_s2">

    <div class="h_s2">
        <div class="catalogo">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="card">
                    <a href="item.php">
                        <div class="carousel" id="h_carousel<?php echo ($i); ?>">
                            <?php
                            $rand = range(0, 5);
                            shuffle($rand);
                            for ($j = 0; $j < 3; $j++) {
                            ?>
                                <figure class="item_carousel">
                                    <img src="<?php echo ('img/Cartera' . $rand[$j] . '.png'); ?>" alt="<?php echo ('img/Cartera' . $i . '.png'); ?>">
                                </figure>
                            <?php }
                            ?>
                        </div>
                    </a>
                    <a href="item.php">
                        <p class="card_title">Cartera moderna para manos</p>
                    </a>
                    <div class="card_body">
                        <div class="controls">
                            <div class="indicator active" value="1"></div>
                            <div class="indicator" value="2"></div>
                            <div class="indicator" value="3"></div>
                        </div>
                        <div class="detalle">
                            <p>S/.999.99</p>
                            <p>a partir de 10 unid.</p>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>