<?php
	require_once 'config.php';


$bugun = date('Y-m-d'); 
$sorgu = $db->prepare("SELECT * FROM gorevler WHERE gorev_bitis_tarihi=:tarih AND durum=:durum");
$sorgu->execute([':tarih' => $bugun,':durum'=>2]);
if($sorgu->rowCount()){
    foreach($sorgu as $row){
$bildirimekle = $db->prepare("INSERT INTO bildirimler SET gorev_id=:gorev");
$bildirimekle->execute([':gorev' => $row['id']]);

}
}


?>