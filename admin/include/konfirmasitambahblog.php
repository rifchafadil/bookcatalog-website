<?php 
$id_user = $_SESSION['id_user'];
// kurang user
$id_kategori_blog = $_POST['kategori_blog'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tanggal = $_POST['tanggal'];

if(empty($id_kategori_blog)){
	header("Location:index.php?include=tambah-blog&notif=tambahkategorikosong");
}else if(empty($judul)){
	header("Location:index.php?include=tambah-blog&notif=tambahjudulkosong");
}else if(empty($isi)){
	header("Location:index.php?include=tambah-blog&notif=tambahisikosong");
}else{
	$sql = "INSERT INTO `blog` (`id_user`, `id_kategori_blog`, `judul`, `tanggal`, `isi`) VALUES ('$id_user', '$id_kategori_blog', '$judul', '$tanggal', '$isi')";
	echo $sql;
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=buku&notif=tambahberhasil");	
}
?>