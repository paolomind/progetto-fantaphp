<?php

/**
 * @property string $nome
 * @property Model_FantaUtente $amministratore
 * @author paolomind
 *
 */
class Model_FantaSessione extends ORM {
	protected $_table_names_plural = FALSE;
	
	protected $_table_name = 'fanta_sessione';

	protected $_has_many = array(
			'partiti' => array(
					'model'       => 'FantaPartito',
					'foreign_key' => 'sessione_id',
			)
	);

	protected $_belongs_to = array(
			'amministratore' => array(
					'model'       => 'FantaUtente',
					'foreign_key' => 'utente_id',
			),
	);
}