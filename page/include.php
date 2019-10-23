<?php

include_once "../config/page.php";

$page = new Page(
        $connection,
        (int) $_GET['id_author'],
        (int) $_GET['id_table'],
        (int) $_GET['id'] //если в $_GET нет id, ему присваевается null по умолчанию
    );

$author_id = $page -> getAuthorPage('id');
$author_title = $page -> getAuthorPage('title');
