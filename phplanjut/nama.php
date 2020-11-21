<?php
    function bar($color="red",$n,$t){
        echo '<font color="'.$color.'">NAMA = '.$n.'  HARGA TOTAL = Rp. '.$t.' </font>';
        
    }
    function ngitung($a){
        if($a <= 10 ){
            $a=$a*300;
        }
        else if ($a>10 && $a<=20){
            $a=$a*500;
        }
        else{
            $a=$a*700;
        }
        return $a;
    }
?>

<form method="post">
	NAMA  :  <input type="type" name="nama" required><br>
    WARNA : <input type="type" name="warna" required><br>
	<button type="submit" name="oke">Submit</button>
</form>

<?php

if(isset($_POST['oke'])){
    $x = $_POST["nama"];
    $w = $_POST["warna"];
    $a=strlen($x);
    $total=ngitung($a);
    bar($w,$x,$total);
 
}
    ?>
    