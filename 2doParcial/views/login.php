<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 bg-black-alpha d-flex align-items-center justify-content-center">
                <div class="">

                    <h1 class="mb-5 text-center">LAB 4 - 2do. Parcial</h1>

                    <form class="" method="post" action="<?= FRONT_ROOT ?>login/login">
                        <div class="form-group">
                            <input type="email" name="user"class="form-control form-control-lg" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control form-control-lg" placeholder="Contraseña">
                        </div>
                        <button type="submit" name="button" class="btn btn-secondary btn-lg btn-block p-2">
                            Iniciar sesión
                        </button>
                    </form>
                    <form class="" action="<?= FRONT_ROOT ?>SignUp" method="post">
                      <button type="submit" name="button" class="btn btn-secondary btn-lg btn-block p-2">Registrarse</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
