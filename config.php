<?php
ob_start();

try {

	$con = new PDO("mysql:dbname=id13870298_aha;host=localhost", "id13870298_aha_db", "NVWxmyzOzdy%85a$*bl!");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
