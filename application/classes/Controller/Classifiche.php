<?php
class Controller_Classifiche extends Controller_AbstractActionManager {
	
	public $template = 'classifiche';
	
	public function before() {
		parent::before();
		$this->template->logged_in = Auth::instance()->logged_in();
		$this->template->username = Auth::instance()->get_user();
		$this->template->deputati_all = $this->service_read->selezionaFantaDeputati();
		$this->template->partiti_utente=$this->service_read->selezionaFantaPartiti($this->template->username);
		$this->template->n_pagine = 10;

		$this->template->partito_selezionato = $this->partito_attivo();
	}
	
	public function after() {
		$this->template->deputati_partito = $this->service_read->selezionaFantaDeputati($this->template->username,null,$this->template->partito_selezionato['id']);
		parent::after();
	}
	
	private function partito_attivo() {
		if(!is_null($this->request->post('scelta_partito'))) {
			return $this->selezionaPartito($this->request->post('partito_da_selezionare'));
		} else if(!is_null($this->request->post('partito_selezionato'))){
			return $this->selezionaPartito($this->request->post('partito_selezionato'));
		} else return reset($this->template->partiti_utente);
	}
	
	private function selezionaPartito($id) {
		foreach ($this->template->partiti_utente as $partito) {
			if($id==$partito['id']) {
				return $partito;
			}
		}
		return null;
	}
	
	public function action_aggiungi_deputato() {
		if(!is_null($this->request->post('deputati_da_includere')) && is_array($this->request->post('deputati_da_includere'))) {
			$partito = $this->template->partito_selezionato;
			$deputati = $this->request->post('deputati_da_includere');
			$this->service_write->aggiungiDeputatiAlPartito($partito, $deputati);
		}
	}
}