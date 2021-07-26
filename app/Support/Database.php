<?php 

	namespace Edu\Board\Support;
	use PDO;

	include_once "../../config.php";


	/**
	 * Database management
	 */
	abstract class Database
	{

		/**
		 * Server information
		 */
		private $host   = HOST;
		private $user   = USER;
		private $pass   = PASS;
		private $db_nam = DB;
		private $connection;

		/**
		 * Database connection
		 */
		private function connection()
		{
			$connection = PDO("mysql: host=".$this -> host.";db_name=".$this -> db_nam, $this -> user, $this -> pass);
		}
		
		
	}