<?php
require_once "config.php";

$server_db = $config['db'];

$connection = mysqli_connect(
    $server_db['server'],
    $server_db['login'],
    $server_db['password'],
    $server_db['name']
);

if($connection == false) {
    echo 'Not connect DB<br>';
    echo mysqli_connect_error();
    exit();
}


$author_db = mysqli_query($connection, "SELECT * FROM `author`");
$authors = array();

while ($row = mysqli_fetch_assoc($author_db)) {
    $authors[$row['id']] = array(
        'title' => $row['title'],
        'name' => $row['name']
    );
}
