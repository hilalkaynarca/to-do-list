<?php
	require_once 'config.php';
	if($_GET['id']){
      $gorev_id = $_GET['id'];
 
			$db->query("DELETE FROM gorevler WHERE id = $gorev_id");
			header('location:index.php');
		}

?>