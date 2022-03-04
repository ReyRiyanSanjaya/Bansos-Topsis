<?php
	$host="localhost";
	$user="root";
	$pass="";
	$dbase="topsis";
	
	$koneksi=mysqli_connect($host,$user,$pass);
	if(!$koneksi){
		die("Database mysqli tidak terkoneksi");
	} else {
	echo "bisa"; }
	
	$seleksi=mysqli_select_db($koneksi,$dbase);
	if(!$seleksi){
		die("Database tidak terseleksi");
	}
?>
