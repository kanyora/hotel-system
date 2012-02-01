<?php
	class Model_Product extends RedBean_SimpleModel{
		public $name;
		public $description;
		public $price;
		public $date_created;
		
		public function open() {}
	    public function dispense(){}
	    public function update() {}
	    public function after_update(){}
	    public function delete() {}
	    public function after_delete() {}
	}
?>