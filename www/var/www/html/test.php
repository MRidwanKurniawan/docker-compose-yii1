<?php

function env($key, $default = null) {
	$value = getenv($key);
	if ($value === false) {
		$value = $default;
	}

	return $value;
}

#$db_host = env('MYSQL_PORT_3306_TCP_ADDR', 'mysql');
$db_host = 'mysql';
$db_name = env('MYSQL_ENV_MYSQL_DATABASE', 'test');
$db_user = env('MYSQL_ENV_MYSQL_USER', 'admin');
$db_password = env('MYSQL_ENV_MYSQL_PASSWORD', '123');
$pdo = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_password);
$resultSet = $pdo->query('SELECT id, name, age FROM student');
while ($row = $resultSet->fetch()) {
	echo "id = " . $row['id'] . ", name = " . $row['name'] . ", age = " . $row['age'] . "<br />";
}

?>