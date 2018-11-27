<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

        <div>

            <h1 class="mb-5 text-center">Agregar Vehículo</h1>

            <form class="add-form" method="post" action="<?= FRONT_ROOT ?>Vehicle/addVehicle">
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text"name="name" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea name="desc" class="form-control form-control-lg"></textarea>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Año</label>
                            <input name="year" type="text" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="text" name="precio" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Imagen Destacada</label>
                            <input type="file" name="image"class="d-block">
                        </div>
                    </div>
                </div>

                <button type="submit" name="button" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
            </form>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
