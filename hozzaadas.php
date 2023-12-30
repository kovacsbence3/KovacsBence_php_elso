<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitorok felvétele</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="container">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Monitorok</a>
        <a class="nav-link disabled" aria-disabled="true">Monitorok felvétele</a>
      </div>
    </div>
  </div>
</nav>
    <form class="container" action="Adatok_feldolgozasa.php" method="post">
    <div class="mb-3">
        <label class="form-label" for="Típus">Típus</label>
        <input class="form-control" type="text" id = "tipus" name="tipus" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="Kiadás éve">Kiadás éve</label>
        <input class="form-control" type="date" id = "date" name="date" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="Készlet">Készlet</label>
        <input class="form-control" type="number" id = "amount" name="amount" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="Ár">Ár</label>
        <input class="form-control" type="number" id = "price" name="price" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="Eladott darab">Eladott darab</label>
        <input class="form-control" type="number" id = "sold" name="sold" required>
    </div>   
    <button type="submit">Elküld</button>

    </form>
</body>
</html>