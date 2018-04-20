 <?php
 /*
  * Stephanie Marcellin, Tam Tran
  * Final Project - Mini D2L Class website
  */
	class DatabaseAdaptor {
 		// Taken from Prof. Mercer
		private $DB;
	  	public function __construct() {
	    	$db = 'mysql:dbname=ece220;host=127.0.0.1;charset=utf8';
	    	$user = 'root';
	    	$password = '';
	    	
	    	try {
	      		$this->DB = new PDO ( $db, $user, $password );
	      		$this->DB->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	    	} catch ( PDOException $e ) {
	      		echo ('Error establishing Connection');
	      		exit ();
	    	}
	  	}
	  	
	  	// TODO Determine functions
	  	
	} // End class DatabaseAdaptor

	// Create the instance
	$theDBA = new DatabaseAdaptor ();
?>