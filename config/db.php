<?php
require_once "config.php";

$server_db = $config['db'];

$connection = new mysqli(
    $server_db['server'],
    $server_db['login'],
    $server_db['password'],
    $server_db['name']
);

if($connection -> connect_error) {
    echo 'Not connect DB<br>';
    echo $connection -> $connect_error;
    exit();
}

class author {
    public $id;
    public $title;
    public $name;

    public function __construct($id, $connection) {
        $author_db = $connection -> query("SELECT * FROM `author`");

        while ($row = $author_db -> fetch_assoc()) {
            $authors[$row['id']] = array(
                'title' => $row['title'],
                'name' => $row['name']
            );
        }
        $this -> id = $id;
        $this -> title = $authors[$id]['title'];
        $this -> name = $authors[$id]['name'];
    }

    public function chapter_bd($id_author, $connection) {
        $chapter_db = $connection -> query("SELECT * FROM `chapter` WHERE" . $id_author);
    }
}
