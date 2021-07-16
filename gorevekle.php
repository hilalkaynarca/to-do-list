<?php
	require_once 'config.php';
	if(ISSET($_POST['ekle'])){
		if($_POST['icerik'] && $_POST['baslik']  && $_POST['bitis_tarihi']!= ""){
			$gorev = $_POST['icerik'];
			$baslik =$_POST['baslik'];
			$tarih = $_POST['bitis_tarihi'];
 
			$db->query("INSERT INTO gorevler VALUES('','$baslik', '2', '$gorev','$tarih')"); 
			header('location:index.php');
		}
	}
?>