<?php
if (session_status() == 1) session_start();
?>

<body>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-sm">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="../img/top.png" class="img-fluid" alt="...">
                        <h3 style="text-align: center">Nosotros</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="../img/top.png" class="img-fluid" alt="...">
                        <h3 style="text-align: center">Nuestra Misión</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="../img/top.png" class="img-fluid" alt="...">
                        <h3 style="text-align: center">Nuestra Visión</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="col text-center">
                            <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container">
        <h1 class="text-center" id="catalogo">CATÁLOGO</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="../img/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                        <h3>10$</h3>
                        </p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col text-center">
                                <form method="post">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                    <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                                    <?php
                                    if ($_POST) {
                                        $obj = new seg();
                                        $h = $obj->compras();
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>