<?php
/**
 * Created by PhpStorm.
 * User: buffy
 * Date: 27.10.17
 * Time: 23:39
 */
$conn_string = "host=project-data port=5432 dbname=app user=app password=app";
$dbconn4 = pg_connect($conn_string);


$result = pg_query($dbconn4, "select * from auth_user");
var_dump(pg_fetch_all($result));


$conn_string = "host=project-data1 port=5432 dbname=app user=app password=app";
$dbconn4 = pg_connect($conn_string);


$result = pg_query($dbconn4, "select * from auth_user");
var_dump(pg_fetch_all($result));