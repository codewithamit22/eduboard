## Education Board Result System

This is a learning purpose project for student result calculation. We use some programming langulage here.

#### Langulage list
- HTML 5
- CSS 3
- javaScript
- jQuery
- PHP
- MySQL
- OOP
- PDO


```php 

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

```