<?php 
function faktorial($x){
	$i = 1;
	$faktorial = 1;
	 while($i <= $x){
		 $faktorial = $faktorial * $i;
		 $i = $i + 1;
	 }
	  return $faktorial;
}
?>

<form method="post">
	<input type="number" name="angka" required>
	<button type="submit" name="hitung">Hitung Angka</button>
</form>

<?php

if(isset($_POST['hitung'])){
    $x = $_POST['angka'];
    echo "Hasil = ";
    echo faktorial($x);
}
    ?>