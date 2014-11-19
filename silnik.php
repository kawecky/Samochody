<?php
include_once('silnikInterface.php');

class Silnik implements SilnikInterface{
	protected $moc;
	
	public function Silnik($moc)
	{
		$this->moc = $moc;
	}
	
	public function getMoc(){
		return $this->moc;
	}
}
?>