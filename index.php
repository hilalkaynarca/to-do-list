<?php
require_once "config.php"; 
?>
<html> 
    <head>
        <title> TODO LİST UYGULAMASI </title>
        <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
    <style>
        .heading{
	width: 50%;
	margin: 30px auto;
	text-align: center;
	color: 	#6B8E23;
	background: #FFF8DC;
	border: 2px solid #6B8E23;
	border-radius: 20px;
}
form {
	width: 50%; 
	margin: 30px auto; 
	border-radius: 5px; 
	padding: 10px;
	background: #FFF8DC;
	border: 1px solid #6B8E23;
}
form p {
	color: red;
	margin: 0px;
}
.task_input {
	width: 75%;
	height: 15px; 
	padding: 10px;
	border: 2px solid #6B8E23;
}
.task_input1 {
	width: 75%;
	height: 150px; 
	padding: 10px;
	border: 2px solid #6B8E23;
}
.add_btn {
	height: 39px;
	background: #FFF8DC;
	color: 	#6B8E23;
	border: 2px solid #6B8E23;
	border-radius: 5px; 
	padding: 5px 20px;
}

table {
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
}

tr {
	border-bottom: 1px solid #cbcbcb;
}

th {
	font-size: 19px;
	color: #6B8E23;
}

th, td{
	border: none;
    height: 30px;
    padding: 2px;
}

tr:hover {
	background: #E9E9E9;
}

.task {
	text-align: left;
}

.delete{
	text-align: center;
}
.delete a{
	color: white;
	background: #a52a2a;
	padding: 1px 6px;
	border-radius: 3px;
	text-decoration: none;
}
    </style>
        <body>
            <center>
                
        <form action="gorevekle.php" method="post">
        <div class="heading">
            
            <h3>TODO LİST UYGULAMASI</h3>
</div>
            <fieldset>
              <input name="baslik" type="text" id="name" placeholder="Görev Başlığı" required="" class="task_input"> 
                </fieldset>
            <fieldset>
              <textarea name="icerik" type="text" id="name" placeholder="Görev İçeriği" required="" cols="30" rows="10" class="task_input1"></textarea> 
                </fieldset>
                <fieldset>
                Görev Bitiş Tarihi </br>
              <input name="bitis_tarihi" type="date" id="name" required="" class="task_input"> 
                </fieldset>
            <fieldset>
</br>
                
            <fieldset>
               <button name="ekle" type="submit" id="add_btn" class="add_btn">Görev Ekle</button>
                </fieldset>
        </form>
   
</center>
<h3><font color=red><b>UYARILAR</b></font></h3>
<?php
        $sorgu = $db->prepare("SELECT * FROM bildirimler 
INNER JOIN gorevler ON gorevler.id = bildirimler.gorev_id");

$sorgu->execute();
if($sorgu->rowCount()){
foreach($sorgu as $pow){
 echo " * ".$pow['gorev_basligi']." adlı görevin bitiş tarihi bugündür..";
}
}
?> 
       
<div class="table-responsive table-hover">

    <table class="table">
			<thead>
				<tr>
					<th>#</th>
                    <th>Görev Başlığı</th>
                    <th>Görev İçeriği</th>
                    <th>Görev Bitiş Tarihi</th>
					<th>Durumu</th>
					<th>İşlemler</th>
				</tr>
			</thead>

            <?php

$gorevler = $db->query("SELECT * FROM gorevler ORDER BY 'id' ASC");
$count = 1;
while($fetch = $gorevler->fetch()){

?>

<tr>
    <td><?php echo $count++;?></td>
    <td><?php echo $fetch['gorev_basligi']?></td>
    <td><?php echo $fetch['gorev_icerigi']?></td>
    <td><?php echo $fetch['gorev_bitis_tarihi']?></td>
    <td><?php  if($fetch['durum'] == 1)
{
echo "yapıldı";
}else{
    echo "yapılmadı";
}?></td>
    
    <td colspan="2">



	<?php
    
	if($fetch['durum'] != 1){
	echo 
      '<a href="gorevguncelle.php?id='.$fetch['id'].'" class="btn btn-success">Güncelle<span class="glyphicon glyphicon-check"></span></a> |';
								}
	?>
	<a href="gorevsil.php?id=<?php echo $fetch['id']?>" class="btn btn-danger">Sil<span class="glyphicon glyphicon-remove"></span> </a>
						
                        </td>
</tr>
<?php
					}
				?>
		</table>
            </div>


            
        </body>
</html>