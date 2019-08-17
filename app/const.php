<?php

// Paths
define('BASE_PATH', dirname(__DIR__));
define('LAYOUT_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR);
define('TEMPLATE_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);
define('CONFIG_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR);

// Local DB
define('DB_HOST', 'ec2-54-247-85-251.eu-west-1.compute.amazonaws.com');
define('DB_NAME', 'dbh3t61an3o44v');
define('DB_USER', 'nxupoquycwegjb');
define('DB_PASS', '2bf84765ab908b399b17439c235a3332d41835739f28db7eb44a239b9ed4ce08');
define('DB_PORT', '5432');

// Messages
define('MSG_ERROR', 'danger');
define('MSG_INFO', 'info');
define('MSG_SUCCESS', 'success');