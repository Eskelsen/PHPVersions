<?php

# Axis

include dirname(__FILE__) . '/config.php';

$versions = 'php52,php53,php54,php55,php56,php70,php71,php72,php73,php74,php80,php81,php82,php83';

$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';

$url = $protocol . '://[version].' . $_SERVER['HTTP_HOST']; # Configure

$file = dirname(__FILE__) . '/tests/index.php'; # Configure
