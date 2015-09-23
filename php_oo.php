<?php
class IMC{
	private $peso;
	private $altura;
	public $imc;
	
	public function __construct($peso, $altura){
		$this->imc = $peso / ($altura^2);
		echo $this->exibeParametro();
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
$objIMC = new IMC(70,1.82);
echo "<pre>";
var_dump($objIMC);
unset($objIMC);

echo "\nTermino do script</pre>";
?>
