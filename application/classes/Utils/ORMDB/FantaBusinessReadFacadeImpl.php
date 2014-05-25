<?php
class Utils_ORMDB_FantaBusinessReadFacadeImpl implements FantaBusinessReadFacade {
	
	public function selezionaFantaSessioniDisponibili($username=NULL) {
		$sessione_model = new Model_FantaSessione();
		/*
		$sessione_model->where('utente', 'IS', 'NULL');
		if (isset($username)) {
			$utente_model = new Model_FantaUtente();
			if(is_numeric($username)) {
				$utente_model->where('id','=', $username);
			} else {
				$utente_model->where('username','=', $username);
			}
			$utente_model->find();
			$sessione_model->or_where('utente_id', '=', $utente_model->id);
		}
		*/
		$sessione_model = $sessione_model->find_all();
		$res = array();
		foreach ($sessione_model as $sessione) {
			$res[$sessione->id] = array (
				'id' => $sessione->id,
				'nome' => $sessione->nome,
			);
		}
		return $res;
	}
	
	public function selezionaFantaUtente($username) {
		$utente_model = new Model_FantaUtente();
		if(is_numeric($username)) {
			$utente_model->where('id','=', $username);
		} else {
			$utente_model->where('username','=', $username);
		}
		$utente_model->find();
		if(isset($utente_model->id)) {
			return array(
				'id' => $utente_model->id,
				'username' => $utente_model->username,
				'password' => $utente_model->password,
			);
		}
		return null;
	}
	
	public function selezionaFantaPartiti($username=NULL,$sessione=NULL) {
		$partiti_model = new Model_FantaPartito();
		if(isset($username)) {
			$utente_model = new Model_FantaUtente();
			if(is_numeric($username)) {
				$utente_model->where('id','=', $username);
			} else {
				$utente_model->where('username','=', $username);
			}
			$utente_model->find();
			$partiti_model->where('utente_id', '=', $utente_model->id);
		}
		
		if(isset($sessione)) {
			$sessione_model = new Model_FantaSessione();
			if(is_numeric($sessione)) {
				$sessione_model->where('id','=', $sessione);
			} else {
				$sessione_model->where('nome','=', $sessione);
			}
			$sessione_model->find();
			$partiti_model->and_where('sessione_id', '=', $sessione_model->id);
		}
		
		$partiti_model_list = $partiti_model->find_all();
	
		$res = array();
		foreach ($partiti_model_list as $partito_model) {
			$res[$partito_model->id] = array(
				'id' => $partito_model->id,
				'nome' => $partito_model->nome,
				'sessione' => $partito_model->sessione->nome,
				'giocatore' => $partito_model->giocatore->username,
				'punteggio' => '4',
				);
		}
		return $res;
	}
	

	/**
	 * @return array ( 'nome1', 'nome2')
	 */
	public function selezionaIntestazioniAttivitaDeputato() {
// 		@TODO implementare
	}
	
	/**
	 * @param string $username
	 * @param string $sessione
	 * @param string $partito
	 * @return array ( array ('uri'=>,'nome'=>,'cognome'=>,'valore'=>),.. )
	*/
	public function selezionaFantaDeputati($username=NULL, $sessione=NULL, $partito=NULL) {
		if(isset($username)) {
			$utente_model = new Model_FantaUtente();
			if(is_numeric($username)) {
				$utente_model->where('id','=', $username);
			} else { 
				$utente_model->where('username','=', $username);
			}
			$utente_model = $utente_model->find();
		}
		if (isset($sessione)) {
			$sessione_model = new Model_FantaSessione();
			if(is_numeric($sessione)) {
				$sessione_model->where('id','=', $sessione);
			} else {
				$sessione_model->where('nome','=', $sessione);
			}
			$sessione_model=$sessione_model->find();
		}
		if (isset($partito)) {
			$partito_model = new Model_FantaPartito();
			if(is_numeric($partito)) {
				$partito_model->where('id','=', $partito);
			} else {
				$partito_model->where('nome','=', $partito);
			}
			if(isset($utente_model) && isset($utente_model->username)) {
				$partito_model = $partito_model->and_where('utente_id', '=', $utente_model->id);
			}
			if(isset($sessione_model) && isset($sessione_model->nome)) {
				$partito_model = $partito_model->and_where('sessione_id', '=', $sessione_model->id);
			}
			$partito_model=$partito_model->find();
		}
		if(isset($partito_model) && isset($partito_model->nome)) {
			$deputati_model = $partito_model->deputati;
		} else if(isset($utente_model) && isset($utente_model->username) || isset($sessione_model) && isset($sessione_model->nome)) {
			$deputati_model = new Model_FantaDeputato();
			$partito_model = new Model_FantaPartito();
			$deputati_model
				->join('fanta_deputati_partito','INNER')
				->on('deputato_id', '=', $deputati_model.'.id')
				->join($partito_model->table_name(),'INNER')
				->on('partito_id', '=', $partito_model->table_name().'.id');
			if (isset($sessione_model) && isset($sessione_model->nome)) {
				$deputati_model 
					->and_where($partito_model->table_name().'sessione_id', '=', $sessione_model->id);
			}
			if(isset($utente_model) && isset($utente_model->username)) {
				$deputati_model
					->and_where($partito_model->table_name().'.utente_id', '=', $utente_model->id);
			}
		}
		if (!isset($deputati_model)) {
			$deputati_model = new Model_FantaDeputato();
		}
		$deputati_model->limit(10);
		$deputati_model=$deputati_model->find_all();
		$res = array();
		foreach ($deputati_model as $value) {
			array_push($res,array(
			'id' => $value->id,
			'uri' => $value->uri,
			'nome' => $value->nome.' '.$value->cognome,
			'valore' => '4',
			));
		}
		return $res;
	}
	
	/**
	 *
	 * @param string $uri
	 * @return array ('uri'=>,'nome'=>,'conteggi'=>array('attivita1'=>,..),'valore'=>)
	*/
	public function selezionaFantaDeputato($uri) {
// 		@TODO implementare
	}
	
	public function selezionaFantaPartito($id_nome,$username=NULL,$sessione=NULL) {
// 		@TODO implementare
	}
}