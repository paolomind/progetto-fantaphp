<?php
interface FantaBusinessReadFacade {
	
	/**
	 * @return array( array ('id'=>, 'nome'=>),.. )
	 */
	public function selezionaFantaSessioniDisponibili($username=NULL);
	
	/**
	 * 
	 * @param string $username
	 * @return array ('id'=>,'username'=>,'password'=>)
	 */
	public function selezionaFantaUtente($username);

	/**
	 *
	 * @param string $id_nome
	 * @param string $username
	 * @param string $sessione
	 * @return array ('id'=>, 'sessione'=>,'giocatore'=>,'nome'=>)
	 */
	public function selezionaFantaPartito($id_nome,$username=NULL,$sessione=NULL);
	
	/**
	 *
	 * @param string $username
	 * @param string $sessione
	 * @return array ( 'id'=> array ('id'=>,'sessione'=>,'giocatore'=>,'nome'=>),..)
	 */
	public function selezionaFantaPartiti($username=NULL,$sessione=NULL);
	
	/**
	* @return array ( 'nome1', 'nome2')
	*/
	public function selezionaIntestazioniAttivitaDeputato();
	
	/**
	 * 
	 * @param string $partito
	 * @return array ( array ('uri'=>,'nome'=>,'valore'=>),.. )
	 */
	public function selezionaFantaDeputati($partito=NULL);
	
	/**
	 * 
	 * @param string $uri
	 * @return array ('uri'=>,'nome'=>,'conteggi'=>array('attivita1'=>,..),'valore'=>)
	 */
	public function selezionaFantaDeputato($uri) ;
}