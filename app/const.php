<?php

// Paths
define('BASE_PATH', dirname(__DIR__));
define('LAYOUT_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR);
define('TEMPLATE_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);
define('CONFIG_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR);

// DB
define('DB_HOST', 'ec2-79-125-2-142.eu-west-1.compute.amazonaws.com');
define('DB_NAME', 'd88tp9kb9fssp3');
define('DB_USER', 'yprlawxccbmsle');
define('DB_PASS', '1cff1f67292d2e4248be52abc25fa9853ca8e34de9ee951914ff755ceba744d8');
define('DB_PORT', '5432');
define('DB_URI', 'postgres://yprlawxccbmsle:1cff1f67292d2e4248be52abc25fa9853ca8e34de9ee951914ff755ceba744d8@ec2-79-125-2-142.eu-west-1.compute.amazonaws.com:5432/d88tp9kb9fssp3');
define('DB_HEROKU_CLI', 'heroku pg:psql postgresql-cubic-11634 --app ubytest');

// Messages
define('MSG_ERROR', 'danger');
define('MSG_INFO', 'info');
define('MSG_SUCCESS', 'success');