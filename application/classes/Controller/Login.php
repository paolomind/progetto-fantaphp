<?php
class Controller_Login extends Controller_Classifiche {
	
	public $template = 'login';

	public function action_login() {
		$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
		$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
		if(Auth::instance()->login($username, $password))
			Controller::redirect('/classifiche');
		else 
			Controller::redirect('/login');
	}
}