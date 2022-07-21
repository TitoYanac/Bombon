<section class="h_s1">
    <div>
        <img src="img/modelo_portada.png" alt="modelo_portada.png">
        <div>
            <h4>Calidad y Precio</h4>
            <h1>DESTÁCATE</h1>
            <h4>con diseños modernos</h4>
            <a class="btn" href="catalogo.php">
                <div>
                    <p class="text-btn">Ver catálogo</p>
                </div>
            </a>
        </div>
    </div>
    <a href="#"><img src="icons/icon_wsp.png" alt="icon_wsp.png"></a>
</section>

<section class="h_s2">
    <h2>Tendencias</h2>
    <div class="tendencias">
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
                <a href="item.php"><p class="card_title">Cartera moderna para manos</p></a>
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
</section>

<section class="h_s3">
    <h2>Categorías</h2>
    <div class="categorias">
        <a href="catalogo.php">
            <figure id="catCartera">
                <img src="img/cartera-model.png" alt="cartera-model.png">
                <figcaption>
                    <h3><span>Descubre</span> <span>&nbsp la última &nbsp</span> <span>colección</span></h3>
                    <h3>Carteras</h3>
                </figcaption>
            </figure>
        </a>
        <a href="catalogo.php">
            <figure id="catMochila">
                <div><img src="img/mochila-model.png" alt="mochila-model.png"></div>
                <figcaption>
                    <h3>Mochilas</h3>
                </figcaption>
            </figure>
        </a>
        <a href="catalogo.php">
            <figure id="catBilletera">
                <div><img src="img/billetera-model.png" alt="billetera-model.png"></div>
                <figcaption>
                    <h3>Billeteras</h3>
                </figcaption>
            </figure>
        </a>
    </div>
</section>