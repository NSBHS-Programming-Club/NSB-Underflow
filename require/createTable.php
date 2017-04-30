<?php
    //executes once ples
    require_once("config.php");

    $client->sendQuery("CREATE TABLE IF NOT EXISTS`testTable`('test', VARCHAR(512));");


?>