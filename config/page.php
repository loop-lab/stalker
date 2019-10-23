<?php
require_once "db.php";

function table($query, $connect) {
    $table_query = $connect -> query($query);
    while ($row = $table_query -> fetch_assoc()) {
        $table[$row['id']] = array();
        foreach ($row as $key => $value) {
            if ($key == 'id') {
                continue;
            }
            $table[$row['id']][$key] = $value;
        }
    }
    return $table;
}

class Page {
    private $author;
    private $table;
    private $chapter;
    private $connect;

    public function __construct($connect, $author_get, $table_get, $chapter_get=null) {

        if(($author_get != 1 && $author_get != 2) || ($table_get != 1 && $table_get != 2)) {
            header('Location: '.'/');
            exit();
        }

        if ($connect) {
            $this -> connect = $connect;
        }

        if ($author_get && gettype($author_get) == "integer") {
            $this -> author = new AuthorPage($author_get, $this -> connect);
        }

        if ($chapter_get && gettype($chapter_get) == "integer") {
            if ($table_get === 1) {
                $name_table = 'chapter';
            } elseif ($table_get === 2) {
                $name_table = 'blog';
            }
            $this -> chapter = new ChapterPage(
                $name_table,
                $this -> getAuthorPage('id'),
                $chapter_get,
                $this -> connect
            );
        } elseif ($table_get && gettype($table_get) == "integer") {
            $this -> table = new TablePage(
                $table_get,
                $this -> getAuthorPage('id'),
                $this -> connect
            );
        }
    }

    public function getAuthorPage($value) {
        switch ($value) {
            case 'id':
                return $this -> author -> getID();
                break;

            case 'title':
                return $this -> author -> getTitle();
                break;
        }
    }

    public function getTablePage($value) {
        switch ($value) {
            case 'id':
                return $this -> author -> getID();
                break;

            case 'table':
                return $this -> table -> getTable();
                break;
        }
    }

    public function getChapterPage($value) {
        switch ($value) {
            case 'id':
                return $this -> chapter -> getID();
                break;

            case 'title':
                return $this -> chapter -> getTitle();
                break;

            case 'image':
                return $this -> chapter -> getImage();
                break;

            case 'text':
                return $this -> chapter -> getChapterText();
                break;
        }
    }

}

class AuthorPage {
    private $id;
    private $title;
    private $name;

    public function __construct($id_author, $connect) {
        $table = table("SELECT * FROM `author` WHERE `id`={$id_author}", $connect);
        $this -> id = $id_author;
        $this -> title = $table[$this -> id]['title'];
        $this -> name = $table[$this -> id]['name'];
    }

    public function getID() {
        return $this -> id;
    }

    public function getTitle() {
        return $this -> title;
    }
}

class TablePage {
    private $id;
    private $table_page = array();

    public function __construct($id, $author, $connect) {
        $this -> id = $id;

        if ($id === 1) {
            $table = 'chapter';
            $order = '';
        } elseif ($id === 2) {
            $table = 'blog';
            $order = ' ORDER BY `id` DESC';
        }

         $this -> table_page =
            table("SELECT `id`, `title`, `image` FROM `{$table}` WHERE `id_author`={$author}{$order}", $connect);
    }

    public function getTable(){
        return $this -> table_page;
    }

    public function getID(){
        return $this -> id;
    }
}

class ChapterPage {
    private $id;
    private $title;
    private $image;
    private $text;

    public function __construct($table, $author, $id, $connect) {
        $table = table("SELECT * FROM `{$table}` WHERE `id_author`={$author} AND `id`={$id}", $connect);
        $this -> id = $id;
        $this -> title = $table[$id]['title'];
        $this -> image = $table[$id]['image'];
        $this -> text = $table[$id]['text'];
    }

    public function getID() {
        return $this -> id;
    }

    public function getTitle() {
        return $this -> title;
    }

    public function getImage() {
        return $this -> image;
    }

    public function getChapterText() {
        return $this -> text;
    }
}
