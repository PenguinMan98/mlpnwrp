<?php
include_once 'OperationBase.php';
class Operation_Sroll extends OperationBase {
	public $operator;
	public $data;
	public static $args = 1;
	public $messages = array();

	function __construct( $args ){
		if(self::$args != count($args)){
			return (implode(" ", $args));
		}

		$this->data = $args;
	}

	public function getValue() {
		try {
			return $this->roll();
		} catch (Exception $e) {
			throw $e;
		}
	}

	private function roll(){
		$matches = array();
		$test = preg_match("/^(\d*)d(\d*)(\s?(\+|-)(\d*))?/i", $this->data[0], $matches);
		$result = "";

		if( $test === false){
			throw new Exception("An error occurred parsing the string.");
		}elseif( $test === 0 ){
			$this->messages[] = "Usage: /sroll XdX+X or XdX-X where X is any integer number.";
		}else{
			$howMany = $matches[1];
			$howBig = $matches[2];
			
			if(count($matches > 5)){
				$modifierOp = $matches[4];
				$modifier = $matches[5];
			}else{
				$modifierOp = false;
				$modifier = false;
			}
			
			$result = "{{ {$howMany}d{$howBig}";
			if($modifier && $modifierOp == "+") $result .= "+$modifier";
			elseif($modifier) $result .= "-$modifier";
			$result .= ": ";
			$sum = 0;
				
			if($howMany > 50 || $howBig > 100 || $howMany < 1 || $howBig < 2 ){
				$result .= "Don't be silly.";
			}else{
				for($i = 0; $i < $howMany; $i++){
					if($i > 0) $result .= " ";
					$rand = mt_rand(1, $howBig);
					$result .= $rand;
					$sum += $rand;
				}
			}
				
			if($modifier && $modifierOp == "+") $result .= " +$modifier";
			elseif($modifier) $result .= " -$modifier";
			if($howMany > 1 || $modifier > 0)
				$result .= " = " . (($modifierOp == "+")? $sum + $modifier : $sum - $modifier );
			$result .= " }} ". $matches[6];
		}
		
		$this->messages[] = $result;
		return "{{ Rolls Dice Privately }}";
	}
}