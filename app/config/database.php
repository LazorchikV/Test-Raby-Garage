<?php
if (strpos($_SERVER['SERVER_NAME'], 'herokuapp') !== false) {
    $url = parse_url(getenv(CLEARDB_DATABASE_URL=>mysql://bf421ffcc254ec:4ff4c4e4@eu-cdbr-west-02.cleardb.net/heroku_8463be4e64122bf?reconnect=true));
	/*"CLEARDB_DATABASE_URL"));
    $host = $url["host"];
    $user = $url["user"];
    $pass = $url["pass"];
    $db = substr($url["path"],1); */
} else {
    $host = DB_HOST;
    $user = DB_USER;
    $pass = DB_PASS;
    $db = DB_NAME;
}

return mysqli_connect($host, $user, $pass, $db);