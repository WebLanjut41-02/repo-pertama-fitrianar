<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<h1>Kalkulator Berat Badan Ideal</h1>
<form action="isi.php" method="post">
<table>
	<tr>
		<td>Tinggi Badan</td>
		<td>:</td>
		<td><input type="text" name="tinggi_badan"></td>
	</tr>
	<tr>
		<td>Berat Badan</td>
		<td>:</td>
		<td><input type="text" name="berat_badan"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
			<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki<br>
			<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
		</td>
	</tr>
</table>
<input type="submit" name="submit" value="Submit">
</form>
</center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$tinggi = $_POST['tinggi_badan'];
	$berat = $_POST['berat_badan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];

	
		echo "BMI :";
		$kalkulator = new data();
		$kalkulator->hitung($tinggi, $berat, $jenis_kelamin);
	
}

class data{
	// public $tinggi;
	// public $berat;
	// public $jenis_kelamin;

	public function hitung($tinggi, $berat, $jenis_kelamin){
		
		$bmi = $berat/(($tinggi/100)*($tinggi/100));
		// echo $bmi.$jenis_kelamin;
		if ($jenis_kelamin=="Laki-laki") {
			if ($bmi<17) {
				echo "Termasuk kategori : Under Weight/Kurus";
			}
			elseif ($bmi>=17&&$bmi<=23) {
				echo "Termasuk Kategori : NNormal Weight/Normal";
			}
			elseif ($bmi>=24&&$bmi<=27) {
				echo "Termasuk Kategori : Over Wight/Kegemukan";
			}
			elseif ($bmi>27) {
				echo "Termasuk Kategori : Obesitas";
			}
		}

		if ($jenis_kelamin=="Perempuan") {
			if ($bmi<18) {
				echo "Termasuk kategori : Under Weight/Kurus";
			}
			elseif ($bmi>=19&&$bmi<=25) {
				echo "Termasuk Kategori : NNormal Weight/Normal";
			}
			elseif ($bmi>=26&&$bmi<=27) {
				echo "Termasuk Kategori : Over Wight/Kegemukan";
			}
			elseif ($bmi>27) {
				echo "Termasuk Kategori : Obesitas";
			}
		}
	}
}





?>