<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nama'] = $_POST['nama'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<style>

</style>

<body>
    <form action="soal2c.php" method="POST">
        <div style="margin-bottom: 5px">
            <label for="umut">Umur Anda : </label>
        </div>
        <div style="margin-bottom: 5px">
            <input type="text" name="umur" required>
        </div>
        
        <button onclick="submitName()">Submit</button>
    </form>

</body>

</html>