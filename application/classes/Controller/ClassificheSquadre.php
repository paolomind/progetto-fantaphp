<?php
class Controller_ClassificheSquadre extends Controller_AbstractActionManager {
	public $template = 'classifiche_squadre';
	
	public function before() {
		parent::before();
		$this->template->logged_in = Auth::instance()->logged_in();
		$this->template->username = Auth::instance()->get_user();
		$this->template->sessioni=$this->service_read->selezionaFantaSessioniDisponibili($this->template->username);
		$this->template->sessione = $this->sessione_attiva();
		$this->template->squadre=$this->service_read->selezionaFantaPartiti(null,$this->template->sessione['id']);
		$this->template->n_pagine = 10;
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