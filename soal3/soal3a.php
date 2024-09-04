<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hobi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body class="p-5">
    <div class="container-fluid mt-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Hobi</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#searchData"
        data-bs-whatever="@mdo">Search Data</button>

    <div class="modal fade" id="searchData" tabindex="-1" aria-labelledby="searchDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Search Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="searchForm">
                        <div class="mb-3">
                            <label for="nama" class="col-form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="col-form-label">Alamat:</label>
                            <textarea class="form-control" id="alamat"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="searchData()">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('koneksi.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('tbody');
            tableBody.innerHTML = '';

            data.forEach(row => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                            <td>${row.person_name}</td>
                            <td>${row.alamat || 'Data Alamat Belum Tersedia'}</td>
                            <td>${row.hobi || 'Data Hobi Belum Tersedia'}</td>
                        `;
                tableBody.appendChild(tr);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

function searchData() {
    const nama = document.getElementById('nama').value;
    const alamat = document.getElementById('alamat').value;

    fetch(`koneksi.php?nama=${encodeURIComponent(nama)}&alamat=${encodeURIComponent(alamat)}`)
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('tbody');
            tableBody.innerHTML = '';

            data.forEach(row => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                            <td>${row.person_name}</td>
                            <td>${row.alamat || 'Data Alamat Belum Tersedia'}</td>
                            <td>${row.hobi || 'Data Hobi Belum Tersedia'}</td>
                        `;
                tableBody.appendChild(tr);
            });
            const modal = bootstrap.Modal.getInstance(document.getElementById('searchData'));
            modal.hide();
        })
        .catch(error => console.error('Error fetching data:', error));
}
</script>