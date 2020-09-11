<?php
// core_ext_sqlite_auth.php

// make connection
$conn = new SQLite3('sqlite:/tmp/phpcl.db');

// define authorizer
$auth = function (...$args) {
	// code to check authorization
	var_dump($args);
	return SQLite3::OK;
}
SQLite3::setAuthorizer($auth);

$sql = 'SELECT propertyKey, hotelName FROM hotels '
	 . "WHERE country = 'CA'";
$stm = $conn->query($sql);
var_dump($stm->fetchArray(SQLITE3_ASSOC));
