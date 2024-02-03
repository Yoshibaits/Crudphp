<?php
    if (isset($_GET["id"])){
        $id = $_GET["id"];

        // variables to connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "myshop";

        // connect to database
        $connection = new mysqli($servername, $username, $password,$database);

        $sql = "DELETE FROM clients WHERE id=$id ";
        $connection->query($sql);

    }

    header("location: /myshop/index.php");
    exit;

?>