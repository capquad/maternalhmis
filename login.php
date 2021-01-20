<?php
session_start();

require './lib/server/functions.php';
if (!isset($_POST['login'])) {
	require './lib/util/login.html';
	exit();
}
require './lib/db/db.config.php';
require './lib/db/database.php';

unset($_POST['login']);

$phone = validatePhoneNumber($_POST['phone']);
$password = validatePassword($_POST['password']);

if (!($phone)) {
	$_SESSION['flash'] = [
		'type' => 'danger',
		'message' => 'Invalid Phone Number. Should contain only numbers and should be 11 digits.',
	];
	header("Location: /login.php");
}

if (!$password) {
	createFlash("Invalid Password Format entered.", "/login.php");
}

$db = new Database(DBHOST, DBUSER, DBPASS);
if (!$db->connect(DBNAME)) {
	createFlash('Internal Server Error. Please try again later.', '/login.php');
}

if ($db->select('staff', 'phone, passwd', "phone='$phone' AND passwd = '".sha1($password)."'")) {
	$login_result = $db->getResults();
	if (count($login_result) > 0) {
		$_SESSION['loggedin'] = true;
		$_SESSION['user'] = $phone;
		header("Location: /");
	} else {
		createFlash('Invalid Login Details. Please try again.', '/login.php');
	}
}