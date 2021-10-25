<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Soal 1 Palindrom</title>
</head>
<body>
	<h2>Cek Kata Termasuk Palindrom atau Bukan </h2>
<form action="" method="post">
	<label>Masukkan Kata<label>
		<input type="text" name="textbox" />
		<input type="submit" value="CEK"/>
</form>
</body>
</html>
</body>
</html>


<?php
if($_POST){

$kata = $_POST['textbox'];
$cekInputan="/^[a-zA-Z0-9]*$/";

if(!preg_match($cekInputan,$kata)){
	    echo 'Harap Diisi dengan huruf tanpa spasi';
}else{
 
	//merubah menjadi ke huruf kecil semua
	$lower = strtolower($kata);
	 
	//membalikkan kata
	$reverse = strrev($kata);
	 
	//check palindrome
	if($kata == $reverse)
	{

	echo '<p><b> Benar, Termasuk palindrome</p>';

	}else
	{
		echo '</p><b>Salah, Bukan Termasuk palindrome</p>';
	}
}
 


}
?>