<?php
/**
 * @property Model_FantaPunteggio $tipo_punteggio
 * @property Model_FantaDeputato $deputato
 * @property int $valore
 * 
 * @author paolomind
 *
 */
class Model_FantaPunteggioDeputato extends ORM {
	protected $_table_names_plural = FALSE;

	protected $_table_name = 'fanta_deputato_punteggi';
	
	protected $_has_one = array(
			'tipo_punteggio' => array(
					'model'       => 'FantaPunteggio',
					'foreign_key' => 'punteggio_id',
			),
	);
	protected $_belongs_to = array(
			'deputato' => array(
					'model'       => 'FantaDeputato',
					'foreign_key' => 'deputato_id',
			),
	);

}