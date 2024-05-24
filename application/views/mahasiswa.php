<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi crud data mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="container">
        <h1>Form Data Mahasiswa</h1>
        <form action="<?php echo base_url('mahasiswa/simpan')?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($data_edit) ? $data_edit->id:''; ?>">
            <div class="form-group col-4">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control"
                    value="<?php echo isset($data_edit) ? $data_edit->nama:''; ?>">
            </div>
            <div class="form-group col-4">
                <label>Alamat</label>
                <textarea name="alamat"
                    class="form-control"><?php echo isset($data_edit) ? $data_edit->alamat:''; ?></textarea>
            </div>
            <div class="form-group col-4">
                <label>Nomor Hp</label>
                <input type="text" name="nomor_hp" class="form-control"
                    value="<?php echo isset($data_edit) ? $data_edit->nomor_hp:''; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <h1>Data Mahasiswa</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
					$no = 1;
					foreach ($data_mahasiswa as $key => $value) {?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value->nama; ?></td>
                    <td><?php echo $value->alamat; ?></td>
                    <td><?php echo $value->nomor_hp ?></td>
                    <td>
                        <a href="<?php echo base_url('mahasiswa/edit/'.$value->id)?>">Edit</a>
                        <a href="<?php echo base_url('mahasiswa/hapus/'.$value->id)?>">Hapus</a>
                    </td>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>