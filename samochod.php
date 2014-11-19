
<?php

include_once('samochodInterface.php');

class Samochod implements SamochodInterface{
	
	private $marka;
	protected $waga;
	private $model;
	private $kolor;
	private $typ;


	public function Samochod($marka, $waga, $model, $kolor, $typ){
		$this->marka=$marka;
		$this->waga=$waga;
                $this->model=$model;
                $this->kolor=$kolor;
                $this->typ=$typ;
	}

	public function helloSamochod(){
		$opis="Witaj! To ja - Twój samochod: ".$this->kolor." ".$this->marka." ".$this->model."\n";
		return $opis; 
	}

        public function getModel(){
		return $this->model;
	}
        public function setModel($model){
		$this->model=$model;
	}
        public function getMarka(){
		return $this->marka;
	}
        public function setMarka($marka){
		$this->marka=$marka;
	}
        public function getKolor(){
		return $this->kolor;
	}
        public function setKolor($kolor){
		$this->kolor=$kolor;
	}
        public function getTyp(){
		return $this->typ;
	}
        public function setTyp($typ){
		$this->typ=$typ;
	}	
}
?>
