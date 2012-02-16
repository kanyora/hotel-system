<?php

class Model_Licence extends RedBean_SimpleModel{
	public function open() {
        echo " called open: ".$this->id;
		exit;
    }
    
    public function dispense(){
        echo " called dispense() ".$this->bean;
		exit;
    }
	
    public function update() {
        
        echo " called update() ".$this->bean;
    }
	
	public function after_update(){
        
		echo " called after_update() ".$this->bean;
	}
    public function delete() {
        
		echo " called delete() ".$this->bean;
    }
    public function after_delete() {
		echo " called after_delete() ".$this->bean;
    }
	
	public function is_expired() {
		$payments_made = $this->ownPayments();
		
		echo "NES", exit;
		
		if(count($payments_made) > 0){
			return $payments_made[count($payments_made) - 1]->time_of_transaction < time();
		}
		return true;
	}
}
?>
