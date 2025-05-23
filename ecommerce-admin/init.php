<?php

// init
require_once 'config.php';

// Start Session
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
