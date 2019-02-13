
<?php
	
/**
* Main Database
*/
	class Database extends PDO {

		public function __construct( $dsn, $user, $pass ) {
			//new pdo();
			parent::__construct( $dsn, $user, $pass );

		// public function __construct( $dsn, $user, $pass ) End here...
		}

		public function select( $sql, $data = array(), $fetch_style = PDO::FETCH_ASSOC ) {

			$getcat = $this->prepare( $sql );
			foreach( $data as $key => $value ) {
				$getcat->bindValue( $key, $value );
			}
			$getcat->execute();
			$result = $getcat->fetchAll( $fetch_style );
			return $result;
		// public function select( $table ) End here..
		}

		public function insert( $table, $data = array() ) {
			
			$data_keys 		= implode( ', ', array_keys( $data ) );
			$data_values 	= ":" . implode( ', :', array_keys( $data ) );
			$sql = "INSERT INTO {$table}( $data_keys ) VALUES( $data_values )";
			$stmt = $this->prepare( $sql );
			
			foreach( $data as $key => $value ) {
				$stmt->bindValue( ":{$key}", $value );
			}
			return $stmt->execute();

		// public function insert( $table, $data = array() ) End here...	
		}

		public function update( $table, $data = array(), $cond ) {

			$updatekeys = NULL;
			foreach ( $data as $key => $value ) {
				$updatekeys .= "{$key} = :{$key}, ";
			}
			$updatekeys = rtrim( $updatekeys, ', ' );

			$sql = "UPDATE {$table} SET {$updatekeys} WHERE {$cond}";
			$stmt = $this->prepare( $sql );
			foreach( $data as $key => $value ) {
				$stmt->bindValue( ":{$key}", $value );
			}
			return $stmt->execute();
		// public function update( $table, $data = array() , $cond ) End here..
		}

		public function delete( $table, $cond, $limit = 1 ) {
			$sql = "DELETE FROM {$table} WHERE {$cond} LIMIT {$limit}";
			return $this->exec( $sql );
		// public function delete( $table, $cond, $limit = 1 ) End here..
		}

		public function affectedRows( $sql, $username, $password ) {
			$stmt = $this->prepare( $sql );
			$stmt->execute( array( $username, $password ) );
			return $stmt->rowCount();
		// public function affectedRows( $sql, $username, $password ) End here...
		}

		public function selectUser( $sql, $username, $password ) {
			$stmt = $this->prepare( $sql );
			$stmt->execute( array( $username, $password ) );
			return $stmt->fetchAll( PDO::FETCH_ASSOC );
		}


	// class Database End here...
	}

?>