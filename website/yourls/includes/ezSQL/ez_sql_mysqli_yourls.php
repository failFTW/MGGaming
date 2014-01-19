<?php

class ezSQL_mysqli_YOURLS extends ezSQL_mysqli {

	/**
	 * Return MySQL server version
	 *
	 * @since 1.7
	 */
	function mysql_version() {
		return  mysqli_get_server_info( $this->dbh ) ;
	}
	
	/**
	 * Perform mySQL query
	 *
	 * Added to the original function: logging of all queries
	 *
	 * @since 1.7
	 */
	function query( $query ) {
	
		// Keep history of all queries
		$this->debug_log[] = $query;

		// Original function
		return parent::query( $query );
	}
	
}

