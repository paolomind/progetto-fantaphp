<?php
interface FantaBusinessWriteFacade {
	
	/**
	 * 
	 * @param array $params (default $_REQUEST)
	 * @return 
	 */
	public function salvaFantaUtente($params);

	/**
	 *
	 * @param array $params (default $_REQUEST)
	 * @return 
	 */
	public function salvaFantaPartito($params);
	
	/**
	 * 
	 * @param mixed $partito
	 * @param array $lista_deputati
	 */
	public function aggiungiDeputatiAlPartito($partito,$lista_deputati);
}