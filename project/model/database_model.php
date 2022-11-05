<?php
    $data_source_name = 'mysql:host=localhost;dbname=find_a_fido';

    $username = 'fido';
    $password = 'test';

    $database = new PDO($data_source_name, $username, $password);
    $database_message = "<p>Connection to the database was successful.</p>";
    