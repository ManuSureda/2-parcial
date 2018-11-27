<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-3 bg-black-alpha d-flex align-items-center justify-content-center px-5">

                <div class="">

                    <span class="mb-5 text-center h1 d-block">Filtro</span>

                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">¿Qué estas buscando?</em>
                        </header>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-outline-light btn-lg mr-1" href="#">
                                <i class="fas fa-home"></i>
                            </a>
                            <a class="btn btn-outline-light btn-lg mx-1" href="#">
                                <i class="fas fa-car"></i>
                            </a>
                            <a class="btn btn-outline-light btn-lg mx-1" href="#">
                                <i class="fas fa-tv"></i>
                            </a>
                            <a class="btn btn-outline-light btn-lg ml-1" href="#">
                                <i class="fas fa-plane"></i>
                            </a>
                        </div>
                    </div>


                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">Precio</em>
                        </header>

                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Min</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Max</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-outline-light btn-lg btn-block">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">Habitaciones</em>
                        </header>

                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Min</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Max</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-outline-light btn-lg btn-block">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <main class="col-lg-9 bg-white">

                <div class="row py-3">
                  <?php if (!empty($vehicles)) {
                    foreach ($vehicles as $key => $value) { ?>
                    <article class="col-lg-3 mb-5">
                        <img src="/Parcial/assets/images/products/real-estates/house-1.jpg" class="img-fluid mb-2" alt="">
                        <h2 class="h5"><?= $value->getName(); ?></h2>
                        <div class="description">
                            <small><?= $value->getDesc();  ?></small>
                        </div>
                        <div class="price text-right">
                            <em class="h3">$ <?= $value->getPrice(); ?></em>
                        </div>
                    </article>
                  <?php }
                } ?>

                <?php if (!empty($realstates)) {
                  foreach ($realstates as $key => $value) {?>
                  <article class="col-lg-3 mb-5">
                      <img src="/Parcial/assets/images/products/real-estates/house-1.jpg" class="img-fluid mb-2" alt="">
                      <h2 class="h5"><?= $value->getName(); ?></h2>
                      <div class="description">
                          <small><?= $value->getDesc();  ?></small>
                      </div>
                      <div class="price text-right">
                          <em class="h3">$ <?= $value->getPrice(); ?></em>
                      </div>
                  </article>
                <?php }
               } ?>

                </div>

            </main>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
