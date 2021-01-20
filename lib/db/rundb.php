<?php
require './database.php';
require './db.config.php';

$db = new Database(DBHOST, DBUSER, DBPASS);

// $db->connect(DBNAME);
$phone = '08137033531';
$db->insert('staff', ['fname' => 'Grace', 'lname' => 'Ojo', 'phone' => $phone, 'passwd' => sha1($phone), 'officeid' => 'REC', 'designation' => 'Records Officer']);
