<?php

	abstract class products {
		public $fake_balance;
		public $prod;
		public $card;
		public function buy($money) {
			$this -> balance -= $money;
		}

		public function info(){
			echo "Наш продукт ", $this ->prod;
			echo "<br>";
			echo "Его кол-во на складе: ",$this->;
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