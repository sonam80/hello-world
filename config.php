<?php

/**
 * Configuration for database connection
 *
 */
echo "hi";
$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "service";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
