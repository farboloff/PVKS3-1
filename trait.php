<?php
	trait Cancel{
		public function cancel(){
			$this->balance = $this->fake_balance;
			echo "Покупка отменена!<br>";
		}
	}
?>	