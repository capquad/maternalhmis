<?php
session_start();

if (!$_SESSION['loggedin']) {
	exit();
}

require '../db/db.config.php';
require '../db/database.php';
require '../server/functions.php';

$db = new Database(DBHOST, DBUSER, DBPASS);
$db->connect(DBNAME);

$db->join('patients as p', 'patient_details as pd', 'p.id = pd.id', '*', 'LEFT');

$result = $db->getResults();
echo json_encode($result);