<?php 
 class aritmatika{
 	public $bil1,$bil2;

 	function set_penjumlahan($bilangan1, $bilangan2){
 		$this->bil1 = $bilangan1;
 		$this->bil2 = $bilangan2;

 	}
 	function get_penjumlahan(){
 		return $this->bil1 + $this->bil2;
 	}


 	function set_pengurangan($bilangana, $bilanganb){
 		$this->bil1 = $bilangana;
 		$this->bil2 = $bilanganb;

 	}
 	function get_pengurangan(){
 		return $this->bil1 - $this->bil2;
 	}


 	function set_perkalian($bilanganc, $bilangand){
 		$this->bil1 = $bilanganc;
 		$this->bil2 = $bilangand;

 	}
 	function get_perkalian(){
 		return $this->bil1 * $this->bil2;
 	}


 	function set_pembagian($bilangane, $bilanganf){
 		$this->bil1 = $bilangane;
 		$this->bil2 = $bilanganf;

 	}
 	function get_pembagian(){
 		return $this->bil1 / $this->bil2;
 	}
 }

$penjumlahan1 = new aritmatika;
$penjumlahan1->set_penjumlahan(21,3);
echo "<h3>Penjumlahan</h3>";
echo "Hasilnya = ".$penjumlahan1->get_penjumlahan().'<br>';
echo "<h3>Pengurangan</h3>";
echo "Hasilnya = ".$penjumlahan1->get_pengurangan().'<br>';
echo "<h3>Perkalian</h3>";
echo "Hasilnya = ".$penjumlahan1->get_perkalian().'<br>';
echo "<h3>Pembagian</h3>";
echo "Hasilnya = ".$penjumlahan1->get_pembagian().'<br>';



 ?>