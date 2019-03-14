<?php

$submission_date = time();
$username = $_POST["username"];
$user_agent = $_SERVER["HTTP_USER_AGENT"];
$ip_address = $_SERVER["REMOTE_ADDR"];

##################################################################################################################

  $dbhost = 'localhost:3036';
  $dbuser = 'phishing';
  $dbpass = '';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);

  if (! $conn) { die('Could not connect: ' . mysql_error() ); }

  $sql = "INSERT INTO primos" .
         "(username, user_agent, ip_address) " .
         "VALUES" . "('$username', '$user_agent', '$ip_address')";

  mysql_select_db('primos');
  $retval = mysql_query( $sql, $conn );

  if (! $retval ) { die('Could not enter data: ' . mysql_error() ); }

  mysql_close($conn);

#################################################################################################################

?>

<meta http-equiv="refresh" content="0; url=http://cryptoparty.ucm.es/phishing/">
