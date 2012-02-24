<?php
class Model_Category extends RedBean_SimpleModel{
	public function get_absolute_url() {
		if ($this->id){
			global $BASE_URL;
			return $BASE_URL."/categories/$this->id/";
		}
		return '#';
	}
}	
?>
