<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
select {
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  width: 100%;
}

input[type="radio"] {
  margin: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

form {
  width: 400px;
  margin: 0 auto;
}

    </style>
</head>
<body>
  <?php
      $action = 'tambah.php';
      if (!empty($siswa)) $action = 'edit.php';
  ?>
      <form action="<?= $action ?>" method="POST" enctype="multipart/form-data">
        NIS <input type="text" name="nis" value="<?= @$siswa['nis']?>"><br>
        Nama Lengkap <input type="text" name="nama_lengkap" value="<?= @$siswa['nama_lengkap']?>"><br>
        Jenis Kelamin <br>
        <input type="radio" name="jenis_kelamin" value="L"<?=@$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="P"<?=@$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan <br>
        Kelas <select name="kelas">
            <option value="XI-RPL1" <?=@$siswa['kelas'] == 'XI-RPL1' ? 'selected' : '' ?>>XI-RPL1</option>
            <option value="XI-RPL2" <?=@$siswa['kelas'] == 'XI-RPL2' ? 'selected' : '' ?>>XI-RPL2</option>
            <option value="XI-RPL3" <?=@$siswa['kelas'] == 'XI-RPL3' ? 'selected' : '' ?>>XI-RPL3</option>
        </select>
        Jurusan <input type="text" name="jurusan" value="<?= @$siswa['jurusan']?>"> <br>
        Alamat <input type="text" name="alamat" value="<?= @$siswa['alamat']?>"><br>
        Golongan Darah <select name="golongan_darah">
            <option value="A" <?=@$siswa['golongan_darah'] == 'A' ? 'selected' : '' ?>>A</option>
            <option value="B" <?=@$siswa['golongan_darah'] == 'B' ? 'selected' : '' ?>>B</option>
            <option value="AB" <?=@$siswa['golongan_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
            <option value="O" <?=@$siswa['golongan_darah'] == 'O' ? 'selected' : '' ?>>O</option>
        </select> <br>
        Nama Ibu Kandung <input type="text" name="ibu_kandung" value="<?= @$siswa['ibu_kandung']?>"> <br>
  

        <div class="form-group">
  <label class="col-sm-2 control-label">Foto</label>
  <div class="col-sm-6">
  <?php if ($action == 'edit') : ?>
                        <img src="media/images/<?= @$siswa['file'] ? $siswa['file'] :'default_picture.png' ?>" class="mb-3" width="100">
                        <input type="hidden" name="foto" value="<?= @$siswa['file'] ?>">
                    <?php endif ?>
    <input type="file" name="foto">
  </div>
</div>

      <br>
      <input type="submit" value="Simpan">
    </form>
</body>
</html>