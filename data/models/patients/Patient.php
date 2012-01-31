<?php
	abstract class Model_Patient extends RedBean_SimpleModel{
		public $name;
		public $age;
		public $gender;
		public $allergies;
		
		public function open() {}
	    public function dispense(){}
	    public function update() {}
	    public function after_update(){}
	    public function delete() {}
	    public function after_delete() {}
	}
?>