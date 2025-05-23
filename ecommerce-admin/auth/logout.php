<?php

require_once __DIR__ . '/../init.php';

// Clear all session variables
session_unset();

// Destroy Session
session_destroy();

// redirect to login or homepage
header('Location: login.php');
exit();
