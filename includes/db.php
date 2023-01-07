<?php

const DB_CONNECT = [
  'hostname' => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'cms'
];

$mysqli = new mysqli(...DB_CONNECT);

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}