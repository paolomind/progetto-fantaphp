<?php
class Controller_CreaSquadra extends Controller_AbstractActionManager {
	
	public $template = 'crea_squadra';
	
	public function before() {
		parent::before();
		$this->template->logged_in = Auth::instance()->logged_in();
		$this->template->username = Auth::instance()->get_user();
		$this->template->sessioni = $this->service_read->selezionaFantaSessioniDisponibili($this->template->username);
		$this->template->sessione = $this->sessione_attiva();
	}
	
	public function action_crea() {
		$this->service_write->salvaFantaPartito($this->request->post());
	}
	public function action_elimina() {
	}
	
	public function after() {
		$this->template->partiti = $this->service_read->selezionaFantaPartiti($this->template->username,$this->template->sessione['id']);
		parent::after();
	}
	
	private function sessione_attiva() {
		if(!is_null($this->request->post('scelta_sessione'))) {
			return $this->selezionaSessione($this->request->post('sessione'));
		} else if(!is_null($this->request->post('sessione'))) {
			return $this->selezionaSessione($this->request->post('sessione'));
		} else return reset($this->template->sessioni);
	}
	

	private function selezionaSessione($id) {
		foreach ($this->template->sessioni as $sessione) {
			if($id==$sessione['id']) {
				return $sessione;
			}
		}
		return null;
	}
}