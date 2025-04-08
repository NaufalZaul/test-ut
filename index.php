<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

  <div class="container py-5">

    <!-- <h1 class="fs-1 mb-5">Selamat datang di tambah leads</h1> -->

    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

        include 'views/' . $page . '.php';

        // isset($_GET['page']) ? include 'views/tambah_lead.php' : include 'views/dashboard.php';
        // include 'views/tambah_lead.php';
        // include 'views/dashboard.php';
    ?>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
</body>

</html>