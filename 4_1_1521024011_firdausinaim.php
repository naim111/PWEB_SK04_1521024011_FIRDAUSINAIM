<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 4_1 Firdaus</title>
</head>
<body>
	<?php
		$a="89";
		echo "<p style=font-size:40px>Nilai = <b style=text-decoration:underline>$a</b>";
		echo "<br>";
		if (($a >= "0") && ($a <= "59")){
			echo "<p style=font-size:40px><b>Hasil = Cukup</p>";
		}
		else if (($a >= "59") && ($a <= "85")){
			echo "<p style=font-size:40px><b>Hasil = Baik</p>";
		}
		else if (($a >= "85") && ($a <= "100")){
			echo "<p style=font-size:40px><b>Hasil = Baik Sekali</p>";
		}
		else {
			echo "<p style=font-size:40px><b>input Salah</p>";
		}
	?>

</body>
</html>