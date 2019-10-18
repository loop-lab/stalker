<?php

$config = array(
    'db' => array(
            'server' => '127.0.0.1',
            'login' => 'root',
            'password' => '',
            'name' => 'stalker'
        )
);

function url_transition($url, $full_url) {
    parse_str(parse_url($full_url, PHP_URL_QUERY), $query);

    $id_author = $query['id'];
    if ( !($id_author == '1' || $id_author == '2') ) {
        header('Location: '.$url);
        exit();
    }
    return $id_author;
}
