<?php
session_start();

require './lib/server/authorize.php';
require './lib/db/db.config.php';
require './lib/db/database.php';

$db = new Database(DBHOST, DBUSER, DBPASS);
$db->connect(DBNAME);

$user = authorizeLogin($db);
restrictUser($user);
// require './lib/util/header.php';
$db->disconnect();