<?php
    require("../DBclient/Client.php");

    $client = new underflowDBClient(
        array(
            "host" => "localhost",
            "user" => "root",
            "password" => "",
            "DB" => "underflow"
        )
    );


?>