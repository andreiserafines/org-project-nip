<?php
// db_functions.php

function connectDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "personneldb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function getMainRecords() {
    $conn = connectDatabase();
    $sql = "SELECT `id`, `serial_number`, `first_name`, `middle_name`, `last_name`, `extension` FROM `main_records` WHERE 1";
    $result = $conn->query($sql);

    $records = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $records[] = $row;
        }
    }

    $conn->close();
    return $records;
}
?>
