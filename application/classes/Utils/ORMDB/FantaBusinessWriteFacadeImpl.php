<?php
class Utils_ORMDB_FantaBusinessWriteFacadeImpl implements FantaBusinessWriteFacade {

	/**
	 *
	 * @param array $params (default $_REQUEST)
	 * @return
	 */
	public function salvaFantaUtente($params) {
// 		@TODO implementare
	}
	
	/**
	 *
	 * @param array $params ('nome'=>,'sessione'=>,'utente'=>)
	 * @return
	*/
	public function salvaFantaPartito($params) {
		$partito_model = new Model_FantaPartito();
		$partito_model->nome=$params['nome'];
		if(is_numeric($params['sessione'])) {
			$partito_model->sessione_id=$params['sessione'];
		} else {
			$sessione_model = new Model_FantaSessione();
			$sessione_model->where('nome', '=', $params['sessione'])->find();
			$partito_model->sessione_id=$sessione_model->id;
		}
		if(is_numeric($params['utente'])) {
			$partito_model->utente_id=$params['utente'];
		} else {
			$utente_model = new Model_FantaUtente();
			$utente_model->where('username', '=', $params['utente'])->find();
			$partito_model->utente_id=$utente_model->id;
		}
		$partito_model->save();
	}
	
	public function aggiungiDeputatiAlPartito($partito,$lista_deputati) {
// 		@TODO implementare
		$id_partito = is_array($partito) ? $partito['id'] : $partito;
			$query = DB::insert('fanta_deputati_partito',array('partito_id','deputato_id'));
		foreach ($lista_deputati as $deputato) {
			$id_deputato = is_array($deputato) ? $deputato['id'] : $deputato;
			$query->values(array($id_partito,$id_deputato));
		}
			$query->execute();
	}
	
}