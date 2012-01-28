<?php
class Model_User extends RedBean_SimpleModel{
	public $username;
	public $username_clean;
	public $password;
	public $email;
	public $activation_token;
	public $last_activation_request;
	public $lost_password_request;
	public $is_active;
	public $sign_up_date;
	public $last_sign_in;
	
	public function open() {}
    public function dispense(){}
    public function update() {}
    public function after_update(){}
    public function delete() {}
    public function after_delete() {}
}
?>