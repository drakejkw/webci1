<!DOCTYPE html>
<html lang="en">

<head>
    <meta charshet="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link href=<?= base_url("assets/css/bootstrap.min.css"); ?> rel="stylesheet">
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        </div class="card-body p-0">

        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Mendaftar</h1>

                    </div>
                    <div class="user">

                        <div class="form-group">
                            <form method="post" action="<?= base_url('Tambah/adddata'); ?>">
                                <div class="card">
                                    <div class="card-body">
                                        Nama penduduk
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Nama penduduk" aria-label="Username" aria-describedby="basic-addon1" name="nama">
                                        </div>
                                        Alamat penduduk
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Alamat penduduk" aria-label="Username" aria-describedby="basic-addon1"name="alamat">
                                        </div>
                                        Pekerjaan penduduk
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Pekerjaan penduduk" aria-label="Username" aria-describedby="basic-addon1"name="pekerjaan">
                                        </div>
                                        <button type="submit" class="btn btn-dark">Simpan Data</button>
                                    </div>
                                </div>
                            </form>


                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>

</body>