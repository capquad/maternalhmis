<?php
// Path Configuration
$path = $_SERVER['DOCUMENT_ROOT'];
define('INFO_LOG', $path . 'lib/log/info.log');
define('ERROR_LOG', $path . 'lib/log/error.log');

unset($path);

// User Sidebar Configration
define(
	'ASIDE',
	[
		'ICT' => [
			[
				'name' => 'Logs', 'type' => 'drop', 'dropdown' => [
					['name' => 'View Error Log', 'link' => "log.php?log=error"],
					['name' => 'View User Log', 'link' => 'log.php?log=user'],
					['name' => 'View Complaints', 'link' => 'complaints.php'],
					['name' => 'View Requests', 'link' => 'requests.php'],
				],
			],
			['name' => 'Maintenance', 'type' => 'link', 'link' => 'maintenance.php']
		],
		'REC' => [
			[
				'name' => 'Patients', 'type' => 'drop', 'dropdown' => [['name' => 'View Patients', 'link' => 'patients.php',]]
			],
			['name' => 'Statistics', 'link' => 'stats.php', 'type' => 'link']
		],
		'FHR' => [],
		'DOC' => [],
	]
);
