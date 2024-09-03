<?php

# Microframeworks Build Config

# Dev Mode: Show Errors
ini_set('display_errors', true);
ini_set('display_startup_erros', true);
error_reporting(E_ALL);
error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('log_errors', 1);
ini_set('error_log', 'errors.log');

# XDebug
ini_set('xdebug.var_display_max_depth', 7);

# Database Conection
define('HOST',  'localhost');
define('DB',    'database');
define('USER',  'username');
define('PSW',   'password');

# Execution Time Limit
set_time_limit(0);

# Session Parameters
session_set_cookie_params([
    'lifetime' => 60*60*24*30,
    'path' => '/',
    'domain' => '',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'lax'
]);

# Timezone
date_default_timezone_set('America/Sao_Paulo');
