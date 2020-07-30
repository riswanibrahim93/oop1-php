<?php 
class Animal
{
	private $nama;
	private $legs;
	private $cold_blooded; 

	public function __construct($nama,$legs='2',$cold_blooded='false')
	{
		$this->nama = $nama;
		$this->legs = $legs;
		$this->cold_blooded = $cold_blooded;
	}
	public function getNama()
	{
		return $this->nama;
	}
	public function getLegs()
	{
		return $this->legs;
	}
	public function getColdBlooded()
	{
		return $this->cold_blooded;
	}
}

 ?>