<?php

/**
 * @property string $nome
 * @property string $cognome
 * @property string $uri
 * @property int $valore_complessivo
 * @property Model_FantaPunteggioDeputato $punteggi
 * 
 * @author paolomind
 *
 */
class Model_FantaDeputato extends ORM {
	protected $_table_names_plural = FALSE;

	protected $_table_name = 'fanta_deputato';
	
	protected $_has_many = array(
			'punteggi' => array(
			'model'       => 'FantaPunteggioDeputato',
			'foreign_key' => 'deputato_id',
			)
	);
}