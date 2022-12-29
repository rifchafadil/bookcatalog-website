<?php 

	if(isset($_SESSION['id_blog'])){
	  $id_blog = $_SESSION['id_blog'];
	  $isi = $_POST['isi'];
	  $judul = $_POST['judul'];
      $tanggal = $_POST['tanggal'];
	 
	   if(empty($judul) && empty($isi)){
	 	    header("Location:index.php?include=edit-blog&data=$id_blog&notif=editkosong");
	    }else{
		$sql = "UPDATE `blog` SET `judul` = '$judul', `tanggal` = '$tanggal', `isi` = '$isi' WHERE `blog`.`id_blog` = $id_blog ";
		mysqli_query($koneksi,$sql); 
		unset($_SESSION['id_blog']);
		header("Location:index.php?include=blog&notif=editberhasil");	
	  }
	}
?>