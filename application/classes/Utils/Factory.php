<?php
class Utils_Factory {
	
	const ORM_DB = 'ORMDB';
	
	/**
	 * 
	 * @param string $type
	 * @return FantaBusinessReadFacade
	 */
	public static function getBusinessReadFacade($type=NULL) {
		$classname = "Utils_${type}_FantaBusinessReadFacadeImpl";
		return new $classname();
	}
	
	/**
	 * 
	 * @param string $type
	 * @return FantaBusinessWriteFacade
	 */
	public static function getBusinessWriteFacade($type=NULL) {
		$classname = "Utils_${type}_FantaBusinessWriteFacadeImpl";
		return new $classname();
	}
}