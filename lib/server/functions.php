<?php

function validatePhoneNumber($input)
{
	$input = trim(strip_tags(htmlspecialchars($input)));
	if (!empty($input)) {
		if (!preg_match("/^[0-9]{11}$/", $input)) {
			return false;
		}
		return $input;
	}
	return false;
}

function validatePassword($input)
{
	$input = trim(strip_tags(htmlspecialchars($input)));
	if (!empty($input)) {
		if (!preg_match("/^[0-9a-zA-Z_]{8,}$/", $input)) {
			return false;
		}
		return $input;
	}
	return false;
}

function createFlash($message, $redirect, $category = 'danger')
{
	$_SESSION['flash'] = [
		'type' => $category,
		'message' => $message,
	];
	header("Location: $redirect");
	exit();
}

function getFlash()
{
	if (isset($_SESSION['flash'])) {
		$flash = $_SESSION['flash'];
		unset($_SESSION['flash']);
		echo "<div class='alert alert-dismissible alert-" . $flash['type'] . "'>";
		echo "<p>" . $flash['message'] . "</p>";
		echo "<button class='close' data-dismiss='alert'>&times;</button>";
		echo "</div>";
	}
}

function createAside ($aside) {
	$text = '';
	foreach ($aside as $row) {
		$text .= "<li class='aside-item'>";
		if ($row['type'] !== 'drop') {
			$text .= "<a href='".$row['link']."'>".$row['name']."</a>";
		} else {
			$text .= "<div class='dropdown'>
				<div class='dropdown-toggle' data-toggle='dropdown'><a href='#!'>".$row['name']."</a></div>";
			$text .= "<div class='dropdown-menu'>";
			foreach ($row['dropdown'] as $drop) {
				// echo $drop;
				$text .= "<a href='".$drop['link']."' class='dropdown-item'>".$drop['name']."</a>";
			}
			$text .= "</div></div>";
		}
		$text .= "</li>\n";
	}
	echo $text;
}

function logEvent($message, $level = 'info') {
	switch ($level) {
		case 'error': $filename = ERROR_LOG;break;
		default: $filename = INFO_LOG;
	}
	echo $filename;exit();
}