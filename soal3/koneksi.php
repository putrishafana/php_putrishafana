<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : '';

$sql = "SELECT person.nama AS person_name, person.alamat AS alamat, hobi.hobi 
        FROM person 
        LEFT JOIN hobi ON person.id = hobi.person_id
        WHERE person.nama LIKE ? AND person.alamat LIKE ?";

$stmt = $conn->prepare($sql);
$searchNama = "%$nama%";
$searchAlamat = "%$alamat%";
$stmt->bind_param("ss", $searchNama, $searchAlamat);

$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>