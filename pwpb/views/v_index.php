<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<!-- toast plugin -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th {
  background-color: #0077B6;
  color: white;
  font-weight: bold;
  text-align: center;
  padding: 10px;
}

td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

tr:nth-child(odd) {
  background-color: #f2f2f2;
}

a {
  display: inline-block;
  background-color: #0077B6;
  color: white;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
  margin-bottom: 20px;
}

a:hover {
  background-color: #004365;
}
form {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 20px;
}

input[type="search"] {
  padding: 10px;
  border-radius: 5px;
  border: 1;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  font-size: 16px;
  width: 200px;
}

button[type="submit"] {
  margin-left: 10px;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
}

button[type="submit"]:hover {
  background-color: #0062cc;
}

button[name="reset"] {
  margin-left: 10px;
  padding: 10px 20px;
  background-color: #f8f9fa;
  color: #343a40;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
}

button[name="reset"]:hover {
  background-color: #e2e6ea;
}

</style>
</head>
<body>
    <div style="display: flex; justify-content: space-between; margin-right:10px; margin-left:10px">
  <a class="btn btn-primary bi bi-clipboard2-plus btn-hover mt-3 mb-1.5 btn-lg " href="tambah.php" role="button" title="tambah data">Tambah Data</a>
  <a class="btn btn-primary bi bi-door-closed-fill btn-hover mt-3 mb-1.5 btn-lg" href="logout.php" role="button" title="Logout">LOGOUT</a>
</div>

<form method="GET" action="index.php">
  Cari Berdasarkan NIS dan NAMA
  <input type="search" name="searchh" value="<?= @$search ?>">
  <button type="submit">Cari</button>
  <button type="submit" name="reset" value="1">Reset</button>
</form>
    <table border ="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>NIS
                  <a href="index.php?sort=nis&order=asc">▲</a>
                  <a href="index.php?sort=nis&order=desc">▼</a>
                </th>
                <th>Nama Lengkap
                  <a href="index.php?sort=nama_lengkap&order=asc">▲</a>
                  <a href="index.php?sort=nama_lengkap&order=desc">▼</a>
                </th>
                <th>Jenis Kelamin
                <a href="index.php?sort=jenis_kelamin&order=asc">▲</a>
                <a href="index.php?sort=jenis_kelamin&order=desc">▼</a>
                </th>
                <th>Kelas
                <a href="index.php?sort=kelas&order=asc">▲</a>
                <a href="index.php?sort=kelas&order=desc">▼</a>
                </th>
                <th>Jurusan
                <a href="index.php?sort=jurusan&order=asc">▲</a>
                <a href="index.php?sort=jurusan&order=desc">▼</a>
                </th>
                <th>Alamat
                <a href="index.php?sort=alamat&order=asc">▲</a>
                <a href="index.php?sort=alamat&order=desc">▼</a>
                </th>
                <th>Golongan Darah
                <a href="index.php?sort=golongan_darah&order=asc">▲</a>
                <a href="index.php?sort=golongan_darah&order=desc">▼</a>
                </th>
                <th>Nama Ibu Kandung
                <a href="index.php?sort=ibu_kandung&order=asc">▲</a>
                <a href="index.php?sort=golongan_darah&order=desc">▼</a>
                </th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $i = 1;
                while ($siswa = $listsiswa->fetch_array()) {
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td>
                        <img src="<?php echo base_url() ?>/media/images/<?= $siswa['file']?>" width="120px" height="150px" alt="foto">                        </td>
                        <td><?= $siswa['nis'] ?></td>
                        <td><?= $siswa['nama_lengkap'] ?></td>
                        <td><?= $siswa['jenis_kelamin'] ?></td>
                        <td><?= $siswa['kelas'] ?></td>
                        <td><?= $siswa['jurusan'] ?></td>
                        <td><?= $siswa['alamat'] ?></td>
                        <td><?= $siswa['golongan_darah'] ?></td>
                        <td><?= $siswa['ibu_kandung'] ?></td>
                        <td>
                          <a href="edit.php?nis=<?=$siswa['nis'] ?>"  class="btn btn-outline-warning bi bi-pencil-square me-2 mt-3" title="edit"></a>
                          <a href="delete.php?nis=<?=$siswa['nis'] ?>"class="btnDelete btn btn-outline-danger bi bi-trash3 mt-3 " title="delete"></a>
                        </td>
                    </tr>
                    <?php } ?>
        </tbody>
    </table>
    <div class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"></h4>
          </div>

          <div class="modal-body">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btnYa">Ya</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
          </div>
        </div>
      </div>
    </div>
        <!-- JS BOOTSTRAP  -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- JQUERY  -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- JS TOASTR  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
      $(() => {
        $(".btnDelete").on("click", function(e){
          e.preventDefault();

          var nama = $(this).parent().parent().children()[2];
          nama = $(nama).html();

          var tr = $(this).parent().parent();

          $(".modal").modal('show');
          $(".modal-title").html('Konfirmasi');
          $(".modal-body").html('Anda yakin ingin menghapus data <b>' + nama + '</b> ?');

          var href = $(this).attr("href");
          $('.btnYa').off();
          $('.btnYa').on('click', function(){
            $.ajax({
              'url'     : href,
              'type'    : 'GET',
              'success' : function(result) { 
                if(result == 1) {
                  $(".modal").modal('hide');
                  tr.fadeOut();

                  toastr.success('Data berhasil dihapus', 'Informasi');
                } else {
                                toastr.error(`Data ${nama} gagal dihapus`, 'GAGAL')
                            }
              }
            })
          })

        })
      })
    </script>
</body>
</html>