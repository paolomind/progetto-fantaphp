<?php 
abstract class Controller_AbstractActionManager extends Controller_Template {
	

	/**
	 * @var FantaBusinessReadFacade
	 */
	protected $service_read = null;
	
	/**
	 *
	 * @var FantaBusinessWriteFacade
	 */
	protected $service_write = null;
	
	public function __construct($request, $response) {
		parent::__construct($request, $response);
		$this->service_read = Utils_Factory::getBusinessReadFacade(Utils_Factory::ORM_DB);
		$this->service_write = Utils_Factory::getBusinessWriteFacade(Utils_Factory::ORM_DB);
	}
	
	
	public function action_index() {
		if(!is_null($this->request->post('action'))) {
			$callmethod = 'action_'.$this->request->post('action');
			$this->$callmethod();
		}
	}
	
	function __call($name,$parmas) {
		throw new Kohana_HTTP_Exception_404();
	}
}