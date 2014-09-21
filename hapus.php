<?php
	if(count($_POST['cek']) < 1)
	{
		?>
			<meta http-equiv='refresh' content='0; url=index.php'>
			<script type="text/javascript">
				alert("Tidak ada data yang terpilih...!!!");
			</script>
		<?php
	}
	else
	{
		//---- query mysql disini -----///
		/*include('koneksi.php');
		$cek = $_POST['cek'];
		for($i=0;$i<count($_POST['cek']);$i++){
		  $hapus=mysql_query("DELETE FROM tbl_data WHERE id_notifications='$cek[$i]'");
		}*/
		?>
			<meta http-equiv='refresh' content='0; url=index.php'>
			<script type="text/javascript">
				alert("Data yang terpilih berhasil dihapus..!!!");
			</script>
		<?php
	}
?>