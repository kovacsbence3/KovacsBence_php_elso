<?php
if ($_SERVER["REQUEST_METHOD"] != "POST"){
    http_response_code(405);
    die();
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatok feldolgozasa</title>
</head>
<body>


    <?php
    $data = [];
    $errors = [];
    if (isset($_POST["Típus"])|| empty($_POST["Típus"])){
        $errors[] = "Kérlek add meg a monitor típusát";
    }
    if (isset($_POST["Kiadás éve"])|| empty($_POST["Típus"])){
        $errors[] = "Kérlek add meg a monitor típusát";
    }
    if (isset($_POST["Készlet"])|| empty($_POST["Típus"])){
        $errors[] = "Kérlek add meg a monitor típusát";
    }
    if (isset($_POST["Ár"])|| empty($_POST["Típus"])){
        $errors[] = "Kérlek add meg a monitor típusát";
    }
    if (isset($_POST["Eladott darab"])|| empty($_POST["Típus"])){
        $errors[] = "Kérlek add meg a monitor típusát";
    }
    if (empty($errors)){
        require_once "MonitorClass.php";
        $database = new MonitorClass();
        $database->create($_POST);
    }
    ?>

</body>
</html>