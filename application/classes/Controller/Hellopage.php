<?php
Class Controller_HelloPage extends Controller_Template {
	public $template = 'myhellopage';
	
	public function action_index() {
		$this->template->pippo='pippo';
	}
	
	public function action_insert() {
		$model = new Model_ENTITY01();
		$model->id=2;
		$model->nome='carico';
		$res = $model->save();
		echo Debug::vars($model);
		$this->template->pippo='inserito';
	}
	public function action_read() {
		$model = new Model_ENTITY01();
		$model->find(2);
		echo Debug::vars($model);
		$this->template->pippo='letto';
	}
	
/*
	public function action_insert2() {
		$model = new Model_ENTITY02();
		$model->id=1;
		$model->nome='carico';
		$res = $model->save();
		echo Debug::vars($model);
		$this->template->pippo='inserito';
	}
*/
	
	public function action_read2() {
		$model = new Model_ENTITY02();
		$model->find(1);
		echo Debug::vars($model);
		$model2 = $model->getEntity01();
		Debug::vars($model2);
		$this->template->pippo='letto';
	}
	
	public function action_login() {
		echo hash_hmac('sha256', 'utente01', '4');
		$v = Auth::instance()->login('utente01', 'utente01');
		$this->template->pippo=Debug::vars($v);
	}
}