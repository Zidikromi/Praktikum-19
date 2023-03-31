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

body {
  font-family: sans-serif;
  background-color: #f2f2f2;
}

form {
  background-color: white;
  max-width: 600px;
  margin: auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

input[type="text"],
select {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  border: none;
  border-radius: 3px;
  box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

input[type="radio"] {
  margin: 5px 10px 5px 0;
}

label {
  font-weight: bold;
  margin-top: 10px;
}

select {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='%23333' d='M467.1 146.6l-9.9 9.9c-6.3 6.3-16.4 6.3-22.6 0l-54.3-54.3V344c0 8.8-7.2 16-16 16H128c-8.8 0-16-7.2-16-16V101.2L58.8 155c-6.3 6.3-16.4 6.3-22.6 0l-9.9-9.9c-6.3-6.3-6.3-16.4 0-22.6L237.3 3.4c6.3-6.3 16.4-6.3 22.6 0l221.8 221.8c6.2 6.2 6.2 16.3 0 22.6z'%3E%3C/path%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: calc(100% - 10px) center;
  background-size: 10px;
}

input[type="submit"] {
  background-color: #008CBA;
  color: white;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
  margin-top: 20px;
  cursor: pointer;
}

input[type="file"] {
  margin: 10px 0;
  display: block;
}

.img-preview {
  max-width: 200px;
  max-height: 200px;
  margin-top: 10px;
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
    <?php if ($action == 'edit.php') : ?>
      <img src="media/images/<?= @$siswa['file'] ? $siswa['file'] :'default_picture.jpg' ?>" class="mb-3" width="100">
      <input type="hidden" name="foto" value="<?= @$siswa['file'] ?>">
    <?php endif ?>
    <input class="form-control" type="file" name="foto" accept="image/*" onchange="previewFile(this)">
    <img id="previewImg" src="<?php echo @$siswa['file'] ? 'media/images/'.$siswa['file'] : '' ?>" alt="Preview Image" class="mt-3" style="max-width: 200px;">
  </div>
</div>

<script>
  function previewFile(input) {
    var preview = document.getElementById('previewImg');
    preview.style.display = "block";
    var reader = new FileReader();
    reader.onload = function() {
      preview.src = reader.result;
    }
    reader.readAsDataURL(input.files[0]);
  }
</script>


      <br>
      <input type="submit" value="Simpan">
    </form>
</body>
</html>