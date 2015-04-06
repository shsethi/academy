<?php 

require 'config.php';

try {
	echo "Hello Git";
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>