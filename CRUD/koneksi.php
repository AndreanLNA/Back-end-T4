<?php
	$koneksi = mysqli_connect('localhost','root','','brem01');

	if(!$koneksi)
	{
		die("Koneksi dengan database gagal : " .mysqli_connect_errno().mysqli_connect_error());
	}
?>	