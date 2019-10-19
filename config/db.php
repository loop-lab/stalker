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
    private $connect;

    public function __construct($id, $connection) {
        $this -> $connect = $connection;
        $author_db = $this -> $connect -> query("SELECT * FROM `author`");

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

    public function database($id_author, $name_table) {
        $chapter_db = $this -> $connect -> query("SELECT * FROM {$name_table} WHERE `id_author`={$id_author}");

        while ($row = $chapter_db -> fetch_assoc()) {
            $table[$row['id']] = array(
                'title' => $row['title'],
                'text' => $row['text'],
                'image' => $row['image'],
                'date' => $row['date']
            );
        }
        return $table;
    }
}
