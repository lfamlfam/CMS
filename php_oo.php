<?php
abstract class IMC{

	const BASE=2;
	private $peso;
	private $altura;
	public $imc;
	
	public function __construct(){
	
	}
	
	public function __call($metodo, $parametro){
		echo "<br><br>Me desculpe, o m&eacute;todo
				$metodo n&atilde;o existe!<br><br>";
	}
	
	public function __set($atributo, $val){
		$this->$atributo = $val;
	}
	
	public function __get($atributo){
		return $this->$atributo;
	}
	
	public function Calcula(){
		$this->imc = $this->peso / ($this->altura^self::BASE);
		echo $this->exibeParametro();
	}
	
	public function setPeso($peso){
		$this->peso = $peso;
	}
	
	public function getPeso(){
		return $this->peso;
	}
	
	public function setAltura($altura){
		$this->altura = $altura;
	}
	
	private function exibeParametro(){
		if(is_null($this->imc)){
			return 'Chame o m&eacute;todo calculaIMC($peso, $altura) antes';
		}
		if($this->imc < 18.5){
			return 'Voc&ecirc; est&aacute; abaixo do peso ideal';
		}elseif($this->imc >= 18.5 &&
				$this->imc <= 24.99){
			return 'Parab&eacute;ns, voc&ecirc; est&aacute no peso ideal';
		}else{
			return 'Voc&ecirc; est&aacute; acima do peso ideal';
		}
	}
	
	public function __destruct(){
		echo "\n".'Objeto foi destruido com sucesso!!';
	}
}
class IMCFilha extends IMC{
	private $var;
	
	function __construct(){
		parent::__construct();
		echo "<br>Classe Filha<br>";
	}
}

$objIMCFilha = new IMCFilha;
$objIMCFilha->peso = 90;
echo "<br>O peso &eacute;: ".
		$objIMCFilha->peso."<br>";

/*
$objIMC = new IMC;
$objIMC->__set('peso',75);
$objIMC->__set('altura',1.81);
$objIMC->nomeTeste();
echo "<br>Const: ".$objIMC::BASE."<br>";
echo "<br>Const: ".IMC::BASE."<br>";
//$objIMC->setPeso(78);
//$objIMC->setAltura(1.82);
$objIMC->Calcula();
echo "<br> O peso &eacute;: ".$objIMC->__get('peso');
echo "<pre>";
var_dump($objIMC);
unset($objIMC);

echo "\nTermino do script</pre>";
*/
?>
