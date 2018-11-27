<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

  <?php include('nav.php'); ?>

  <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

    <div>

      <h1 class="mb-5 text-center">Agregar Propiedad</h1>

      <form class="add-form" method="post" action="<?= FRONT_ROOT ?>RealState/addRealState">

        <div class="form-group">
          <label for="">Título</label>
          <input type="text" name="name" class="form-control form-control-lg">
        </div>

        <div class="form-group">
          <label for="">Descripción</label>
          <textarea class="form-control form-control-lg" name="desc"></textarea>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label for="">Habitaciones</label>
              <input type="text" name="bedrooms" class="form-control form-control-lg">
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
              <label for="">Parking</label>
              <div class="form-check mt-3">
                <input class="form-check-input" name="parking" type="radio" value="1" checked id="defaultCheck1"> si
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" name="parking" type="radio" value="0" id="defaultCheck2"> no
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
              <label for="">Precio</label>
              <input type="text" name="precio" class="form-control form-control-lg">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="">Imagen Destacada</label>
          <input type="file" name="imagen" class="d-block">
        </div>

        <button type="submit" name="" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
      </form>
    </div>

  </div>

</body>

<?php include('footer.php'); ?>
