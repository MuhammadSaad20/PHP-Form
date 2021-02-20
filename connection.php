<?php

define('DB_SERVER','');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'practice');

$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if($conn==true){
	echo "True";
}
else{
	
	dir('Conneectio Fail');
}

?>
