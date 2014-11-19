<?php
include_once('samochodWyscigowyInterface.php');
class SamochodWyscigowy extends Samochod implements SamochodWyscigowyInterface{
	
	private $silnik;
	
	public function SamochodWyscigowy($marka,$waga, $model, $kolor, $typ, Silnik $a){
		 parent::Samochod($marka,$waga, $model, $kolor, $typ);
		$this->silnik=$a;
	}
	public function getPredkoscMaksymalna(){
		return ($this->waga/$this->silnik->getMoc())*15;
	}
	public function getPrzyspieszenie(){
		return $this->waga/$this->silnik->getMoc();
	}
}
?>
