<?php 
 class ratarata{
 	public $nilai1,$nilai2,$nilai3,$nilai4;

 	function set_ratarata($bilangan1, $bilangan2 , $bilangan3, $bilangan4){
 		$this->nilai1 = $bilangan1;
 		$this->nilai2 = $bilangan2;
 		$this->nilai3 = $bilangan3;
 		$this->nilai4 = $bilangan4;


 	}

 	function get_ratarata(){
 		return $this->nilai1 + $this->nilai2 + $this->nilai3 + $this->nilai4;
 	}
 }

$ratarata1 = new ratarata;
$ratarata1->set_ratarata(80 , 90 , 78 , 88);
echo "<h3>Rata-Rata Nilai : </h3>";
echo $ratarata1->get_ratarata() / 4;


 ?>