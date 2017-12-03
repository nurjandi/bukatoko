<?php
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$rate = 0;
	$no_rekening = $_POST['no_rekening'];
	$no_telepon = $_POST['no_telepon'];
	$kota_kab = $_POST['kota_kab'];
	$kecamatan = $_POST['kecamatan'];
	$kelurahan_desa = $_POST['kelurahan_desa'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	$con = mysqli_connect("localhost","root","","bukatoko");
	$sql = "INSERT INTO user(
	nama, alamat, tgl_lahir, jenis_kelamin, rate, no_rekening, no_telepon, kota_kab, kecamatan, kelurahan_desa, username, password)
	VALUES ('".$nama."', '".$alamat."','".$tgl_lahir."','".$jenis_kelamin."','".$rate."','".$no_rekening."','".$no_telepon."','".$kota_kab."','".$kecamatan."','".$kelurahan_desa."','".$username."','".$password."');";
	if (mysqli_query($con,$sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: ";
	}
	
?>