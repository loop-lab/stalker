<?php

require_once "config.php";

$server_db = $config['db'];

$connection = new mysqli(
    $server_db['server'],
    $server_db['login'],
    $server_db['password'],
    $server_db['name']
);

if ($connection -> connect_error) {
    echo 'Not connect DB<br>';
    echo $connection -> $connect_error;
    exit();
}

function table($query, $connection)
{
    $table_query = $connection -> query($query);
    while ($row = $table_query -> fetch_assoc()) {
        $table[$row['id']] = array();
        foreach ($row as $key => $value) {
            if ($key == 'id')
            {
                continue;
            }
            $table[$row['id']][$key] = $value;
        }
    }
    return $table;
}
