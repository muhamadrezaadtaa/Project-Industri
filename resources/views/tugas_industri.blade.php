<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Produk Penjualan</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-light">
  <div class="container py-5">
    <h2 class="text-center mb-4">📦 DATA PRODUK PENJUALAN</h2>

    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped mx-auto" style="width: 80%;">
        <thead class="table-primary text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
          </tr>
        </thead>
        <tbody class="text-center fw-bold">
          @foreach ($tugas_products as $index => $a)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->description }}</td>
            <td>Rp {{ number_format($a->price, 0, ',', '.') }}</td>
            <td>{{ $a->stock }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
