<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Multiple Delete Data via Checkbox Dengan PHP + Javascript</title>
<style>
body{
font-family:Tahoma,Arial;
font-size:12px;
}
a{
text-decoration:none;
color:#FF9900;
}
a:hover{
text-decoration:underline;
color:#FF0000;
}
</style>
</head>

<body>
<form method="post" action="hapus.php">
<?php
	include('koneksi.php');
	$q = mysql_query("select * from tbl_data");
	$no = 1;
	while($row=mysql_fetch_array($q))
	{
	echo"<table border='0'><tr>
	<td><input type=checkbox name=cek[] value=".$row[id_notifications]." id=id-".$no.">".$no." . </td>
	<td>".$row[notifications]."</td>
	</tr></table>";
	$no++;
	}
?>
	<input type=radio name=pilih onClick='for (i=1;i<<?php echo $no; ?>;i++){document.getElementById("id-"+i).checked=true;}'>
	Centang Semua
	<input type=radio name=pilih onClick='for (i=1;i<<?php echo $no; ?>;i++){document.getElementById("id-"+i).checked=false;}'>
	Hapus Semua Centang
	<input type='submit' value='Hapus' class='hapusButton hapus' 
	onClick='return confirm("Anda yakin ingin menghapus data yang terpilih???")'></form>
</body>
</html>
