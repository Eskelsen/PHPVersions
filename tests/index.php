<?php

# Index Versions

# Dev Mode: Show Errors
ini_set('display_errors', true);
ini_set('display_startup_erros', true);
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', 'errors.log');

$_SERVER['HTTP_HOST'] = 'unotify.mfwks.com';

include dirname(dirname(__FILE__)) . '/unotify/index.php';
