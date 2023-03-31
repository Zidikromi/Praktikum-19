<?php
include 'lib/helper.php';
include 'lib/library.php';

checklogin(); 
$sql = 'SELECT * FROM siswa';

//searching

$search = @$_GET['searchh'];
if (!empty($search)) $sql .=" WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%' OR alamat LIKE '%$search%' OR golongan_darah LIKE '%$search%' OR ibu_kandung LIKE'%$search%'";

//ordering
$order_field = @$_GET['sort'];
$order_mode = @$_GET['order'];

if (!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode";

//reset
if (isset($_GET['reset'])) 
    $search = '';
    $order_field = '';
    $order_mode = '';


$listsiswa = $mysqli->query($sql);

include 'views/v_index.php';
?>