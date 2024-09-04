<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['hobi'] = $_POST['hobi'];
}

$nama = $_SESSION['nama'] ?? '';
$umur = $_SESSION['umur'] ?? '';
$hobi = $_SESSION['hobi'] ?? '';

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>

<body>
    <p>Nama: <?php echo htmlspecialchars($nama); ?></p>
    <p>Umur: <?php echo htmlspecialchars($umur); ?></p>
    <p>Hobi: <?php echo htmlspecialchars($hobi); ?></p>

</body>

</html>