<?php
$userMaastricht = [
    "id" => "30960476-5296-43c0-a249-1aa28aad54f5",
    "username" => "CorDassen",
    "password" => "u8v9w0x1y2z3a4b5c6d7e8f9g0h1i2j3k4l5m6n",
    "email" => "cor.dassen@outlook.com",
    "first_name" => "Cor",
    "last_name" => "Dassen",
    "birth_date" => "1976-01-14 00:00:00",
    "last_login" => "2024-09-03 02:14:01"
];


$userHeerlen = [
    "id" => "f47ac10b-58cc-4372-a567-0e02b2c3d479",
    "username" => "TheoBovens",
    "password" => "a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t",
    "email" => "theo.bovens@outlook.com",
    "first_name" => "Theo",
    "last_name" => "Bovens",
    "birth_date" => "1954-07-09 00:00:00",
    "last_login" => "2024-09-03 02:17:13"
];

$userSittard = [
    "id" => "e7b8c9d2-3f4a-4b5c-8a6d-1e2f3a4b5c6d",
    "username" => "VincentTauben",
    "password" => "a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9",
    "email" => "VincentTauben",
    "first_name" => "Vincent",
    "last_name" => "Tauben",
    "birth_date" => "1967-03-21 00:00:00",
    "last_login" => "2024-09-08 04:18:13"
];


$allUsers = [];
array_push($allUsers, $userMaastricht, $userHeerlen, $userSittard);

echo "<pre>";
print_r($allUsers);
echo "</pre>";


include '../../config/db.conf.php';

try {
    $pdo = new PDO("mysql:host={$dbSettings['host']};dbname={$dbSettings['db']};charset={$dbSettings['charset']}", $dbSettings['username'], $dbSettings['password'], $dbSettings['options']);
    $sql = 'SELECT * FROM user';
    $stmt = $pdo->query($sql);
    $allUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}


