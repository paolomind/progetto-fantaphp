<?php

/**
 * 
 * @author paolomind
 * @property string $username
 * @property string $password
 * @property Model_FantaPartito $partiti
 */
class Model_FantaUtente extends ORM {

	protected $_table_names_plural = FALSE;
	protected $_table_name = 'fanta_utente';
	

	protected $_has_many = array(
			'partiti' => array(
					'model'       => 'FantaPartito',
					'foreign_key' => 'utente_id',
			)
	);
}