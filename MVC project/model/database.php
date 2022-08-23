<?php
    $dataSourceName = 'mysql:host=localhost;dbname=assignment_tracker';
    $username = 'root';

    try {
        $database = new PDO($dataSourceName, $username);
    }