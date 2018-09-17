<?php 	
if (isset($_POST["upload"])) {
	$nama = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	$dir = "wallpaper/";

	$uploadStatus = move_uploaded_file($tmp, $dir.$nama);
	if ($uploadStatus) {
		echo "Upload berhasil";
		echo "<img src='".$dir.$nama."'>";
	}
	else{
		echo "Upload gagal";
	}
}
?> 