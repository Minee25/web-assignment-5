<?php

declare(strict_types=1);
function getConnection(): mysqli
{
  $hostname = 'localhost';
  $dbName = 'enrollment';
  $username = 'demo';
  $password = 'abc123';
  $conn = new mysqli($hostname, $username, $password, $dbName);

  if ($conn->connect_error) {
    throw new Exception("Database connection failed: " . $conn->connect_error);
  }

  $conn->set_charset("utf8mb4");

  return $conn;
}
