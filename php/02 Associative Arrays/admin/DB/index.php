<?php
include '../../config/db.conf.php';

echo "<table border='1'>";
echo "<tr><th>Key</th><th>Value</th></tr>";

foreach ($dbSettings as $key => $value) {
    if (is_array($value)) {
        $value = json_encode($value);
    }
    echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
}

echo "</table>";
