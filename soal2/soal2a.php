<?php
session_start();
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
    <form action="soal2b.php" method="POST">
        <div style="margin-bottom: 5px">
            <label for="nama">Nama Anda : </label>
        </div>
        <div style="margin-bottom: 5px">
            <input type="text" name="nama" required>
        </div>
        <button type="submit">Submit</button>
    </form>

</body>

</html>