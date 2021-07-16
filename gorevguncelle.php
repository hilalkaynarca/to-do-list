<?php
	require_once 'config.php';

	echo $_GET["id"];
 
	if($_GET['id'] != ""){
		$gorev_id = $_GET['id'];
 
		$db->query("UPDATE gorevler SET durum = 1 WHERE id = $gorev_id");
		header('location: index.php');
	}
?>