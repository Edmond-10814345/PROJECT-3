<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://b08485edf04fd4:b55d9f6a@us-cdbr-east-03.cleardb.com/heroku_39edc7733cf7e31?reconnect=true"));
$cleardb_server = $cleardb_url["us-cdbr-east-03.cleardb.com"];
$cleardb_username = $cleardb_url["b08485edf04fd4"];
$cleardb_password = $cleardb_url["b55d9f6a"];
$cleardb_db = substr($cleardb_url["heroku_39edc7733cf7e31"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>
