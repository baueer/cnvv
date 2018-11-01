<!doctype html>
<html lang="en">
<head>
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' /> 
  <?php include('./inc/head.php') ?>
</head>
<body>
  <?php include('./inc/nav.php') ?>

  <div class="container wrapper">
    <div class="row">
      <div class="col text-center">
        <ul class="list-unstyled mt-3" id="list-contact">
          <li class="font-weight-bold" style="color: #4C2C2C; font-size: 18px;">Colegiul National Vlaicu Voda</li>
          <li><img src="email.png" alt="E-Mail" height="25"> cn_vlaicu_voda@yahoo.com</li>
          <li><img src="telephone.png" alt="Telefon" height="25"> 0248 721 553</li>
          <li><img src="fax.png" alt="Fax" height="25"> 0248 721 389</li>
          <li><img src="placeholder.png" alt="Adresa" height="25"> strada Negru Voda, numarul 131, Curtea de Arges, 115300</li>
        </ul>
      </div>
      <div class="col-lg">
        <div id="mapid"></div>
      </div>
    </div>
  </div>

  <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYmF1ZWVyIiwiYSI6ImNqbngwM2ZzcDAwMTUza28wcWF4eXlvMXMifQ.mZauGE4J9kbeCNja0F_pmw';
    const map = new mapboxgl.Map({
      container: 'mapid',
      style: 'mapbox://styles/mapbox/streets-v9',
      center: [24.676824, 45.133426],
      zoom: 16.0
    });
  </script>

  <?php include('./inc/footerfb.php') ?>
  <script src="js/responsive.js"></script>
</body>
</html>