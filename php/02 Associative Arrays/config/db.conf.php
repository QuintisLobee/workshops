<?php
$dbSettings = [
    "host" => "localhost",
    "db" => "phpworkshops",
    "username" => "phpworkshopsUser",
    "password" => "E@3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855",
    "charset" => "utf8mb4",
    "options" => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]
];
