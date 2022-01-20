<!DOCTYPE html>
<html lang="en">

<head>
  <meta charshet="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=devide-width, initial-scale=1.0">
  <link href=<?= base_url("assets/css/bootstrap.min.css"); ?> rel="stylesheet">
  <title>PENDUDUK</title>
</head>

<body>

  <div class="container mt-3">
    <a href="Tambah" type="button" class="btn btn-dark">Tambah</a>

    <h1 align="center">DATA PENDUDUK</h1>
    <table class="table table-scripet table-hover">
      <thead class="table-dark">
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Pekerjaan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hasil as $baris) { ?>
          <td><?= $baris['nama']; ?></td>
          <td><?= $baris['alamat']; ?></td>
          <td><?= $baris['pekerjaan']; ?></td>
          <td>
            <div class="row">
              <div class="col d-flex justify-content-center"><a href="<?= base_url("Berandi/edit/" . $baris['id']); ?>" class="btn btn-sm btn-warning">

                  <div class="col d-flex justify-content-center"><a href="<?= base_url("Berandi/hapus/" . $baris['id']); ?>" class="btn btn-sm btn-danger">

          </td>




      </tbody>
    <?php } ?>

    </table>

</body>

</html>