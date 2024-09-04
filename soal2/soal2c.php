<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['umur'] = $_POST['umur'];
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
    <form action="soal2d.php" method="POST">
        <div>
            <label for="hobi">Hobi Anda : </label>
        </div>
        <div>
            <input type="text" name="hobi" required>
        </div>

        <button onclick="submitName()">Submit</button>
    </form>

</body>

</html>