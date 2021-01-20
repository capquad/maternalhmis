<?php

function authorizeLogin($db = null)
{
	if (!isset($_SESSION['loggedin']) or $_SESSION['loggedin'] !== true) {
		header("Location: /login.php");
		exit();
	}
	$user = $_SESSION['user'];
	if ($db !== null) {
		if ($db->select("staff", "*", "phone = '$user'")) {
			$user = $db->getResults()[0];
			$user['name'] = join(' ', [$user['lname'], $user['fname'], $user['mname']]);
			unset($user['passwd']);
		}
	}
	return $user;
}

function restrictUser($user)
{
	$allowed = strtolower($user['officeid']);
	if ($allowed !== explode('/', $_SERVER['SCRIPT_NAME'])[1]) {
		header("Location: /$allowed/");
		// logEvent();
		exit();
	}
}
