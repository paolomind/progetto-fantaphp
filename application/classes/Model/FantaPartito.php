<?php

/**
 * @property string $nome
 * @property Model_FantaUtente $giocatore
 * @property Model_FantaSessione $sessione
 * @property Model_FantaDeputato $deputati
 * @author paolomind
 *
 */
class Model_FantaPartito extends ORM {
	protected $_table_names_plural = FALSE;
	
	protected $_table_name = 'fanta_partito';
	/*
	 * attributi: owner, lista deputati
	*/
	

	protected $_has_many = array(
			'deputati' => array(
					'model'       => 'FantaDeputato',
					'through' => 'fanta_deputati_partito',
					'far_key' => 'deputato_id',
					'foreign_key' => 'partito_id',
			)
	);
	
	protected $_belongs_to = array(
			'giocatore' => array(
					'model'       => 'FantaUtente',
					'foreign_key' => 'utente_id',
			),
			'sessione' => array(
					'model'       => 'FantaSessione',
					'foreign_key' => 'sessione_id',
			),
	);
}