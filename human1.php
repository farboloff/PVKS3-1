<?php
	require_once "trait.php";

	abstract class Human {
		use Cancel;
		public $fake_balance;
		public $balance;
		public $card;
		public function buy($money) {
			$this -> balance -= $money;
		}

		public function info(){
			echo "Баланс: ", $this ->balance," рублей";
			echo "<br>";
			echo "Номер карты: ",$this->card;
			echo "<br>";
		}

		public function OstInfo(){
			echo "Остаточный баланс на карте: ", $this ->balance," рублей";
			echo "<br>";
			echo "Номер карты: ",$this->card;
			echo "<br>";
		}
		public function accept(){
			$this->fake_balance = $this->balance;
		}
		public function __construct($balance, $card) {
			$this->balance = $balance;
			$this->fake_balance = $this->balance;
			$this->card = $card;
		}
	}
?>