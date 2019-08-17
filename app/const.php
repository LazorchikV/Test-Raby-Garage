<?php

// Paths
define('BASE_PATH', dirname(__DIR__));
define('LAYOUT_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR);
define('TEMPLATE_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);
define('CONFIG_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR);

// DB
define('DB_HOST', 'eu-cdbr-west-02.cleardb.net');
define('DB_NAME', 'heroku_8463be4e64122bf');
define('DB_USER', 'bf421ffcc254ec');
define('DB_PASS', '4ff4c4e4');

// Messages
define('MSG_ERROR', 'danger');
define('MSG_INFO', 'info');
define('MSG_SUCCESS', 'success');