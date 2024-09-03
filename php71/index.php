<?php

# Index Versions

echo '<title>PHP ' . phpversion() . '</title>';

include dirname(dirname(__FILE__)) . '/axis.php';

if (!is_file($file)) {
	exit('Adicione o arquivo ' . $file);
}

include $file;
