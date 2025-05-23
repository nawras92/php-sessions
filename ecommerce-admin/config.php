<?php

// Base url
define('BASE_URL', 'http://localhost:8000/php-sessions/ecommerce-admin/');
define('BASE_DIR', dirname(__FILE__));

// Database Configuration
/* define('DB_HOST', 'localhost'); */
define('DB_HOST', 'db:3306');
define('DB_NAME', 'store-dashboard');
define('DB_USER', 'storeDashboardAdmin');
define('DB_PASS', '123');

// Connect to db
try {
  /* mysql:host=localhost;dbname=Mydatabase;charset=ut8mb4 */
  $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
  $pdo = new PDO($dsn, DB_USER, DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Database connection failed: ' . $e->getMessage());
}
