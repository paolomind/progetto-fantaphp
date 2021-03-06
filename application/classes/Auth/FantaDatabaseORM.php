<?php
class Auth_FantaDatabaseORM extends Auth {

	private $current_user;
	
	/**
	 * Constructor loads the user list into the class.
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);
	}
	
	/**
	 * Logs a user in.
	 *
	 * @param   string   $username  Username
	 * @param   string   $password  Password
	 * @param   boolean  $remember  Enable autologin (not supported)
	 * @return  boolean
	 */
	protected function _login($username, $password, $remember)
	{
		if (is_string($password))
		{
			// Create a hashed password
			$password = $this->hash($password);
		}
	
		$upassword = $this->password($username);

		if ($upassword!=null && $upassword === $password)
		{
			// Complete the login
			return $this->complete_login($username);
		}
	
		// Login failed
		return FALSE;
	}
	
	/**
	 * Forces a user to be logged in, without specifying a password.
	 *
	 * @param   mixed    $username  Username
	 * @return  boolean
	 */
	public function force_login($username)
	{
		// Complete the login
		return $this->complete_login($username);
	}
	/**
	 * Get the stored password for a username.
	 *
	 * @param   mixed   $username  Username
	 * @return  string
	 */
	public function password($username)
	{
		
		$model = Utils_Factory::getBusinessReadFacade(Utils_Factory::ORM_DB)->selezionaFantaUtente($username);
		if(!empty($model)) {
			$this->current_user = $model;
			return $model['password'];
		}
		return NULL;
	}
	
	/**
	 * Compare password with original (plain text). Works for current (logged in) user
	 *
	 * @param   string   $password  Password
	 * @return  boolean
	 */
	public function check_password($password)
	{
		$username = $this->get_user();
	
		if ($username === FALSE)
		{
			return FALSE;
		}
	
		return ($password === $this->password($username));
	}
}