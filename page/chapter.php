<?php
    require_once "../config/db.php";
    $full_url = $url.$_SERVER['REQUEST_URI'];
    $id_author = (int) $_GET['id_author'];
    $author = table("SELECT `id`, `title` FROM `author` WHERE `id`={$id_author}", $connection);
    $id_table = (int) $_GET['id_table'];
    if ($id_table === 1) {
        $name_table = 'chapter';
    } elseif ($id_table === 2) {
        $name_table = 'blog';
    }
    $id = (int) $_GET['id'];
    $chapter = table("SELECT `title`, `image`, `text` FROM `{$name_table}` WHERE `id_author`={$id_author} AND `id`={$id}", $connection);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=$author[$id_author]['title']?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/chap.css">

    <!--  ChatBro  -->
    <script id="chatBroEmbedCode">/* Chatbro Widget Embed Code Start */function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}/* Chatbro Widget Embed Code End */ChatbroLoader({encodedChatId: '84LRb'});</script>
</head>
<body>
    <div class="wrapper container-fluid">
        <div class="container align-content-between">
            <?php include 'include/header.php'?>
            <div class="main col-12">
                <div class="main_inner">
                    <div class="row justify-content-between">
                        <div class="chapter col-xl-8 col-lg-12">
                            <div class="dark-opasity block-chapter row justify-content-center">
                                <h2 class="title_chapter "><?=$chapter[$id]['title']?></h2>
                                <img class="img_chapter" src=<?="../image/".$chapter[$id]['image']?> />
                                <pre class="text_chapter"><?=$chapter[$id]['text']?></pre>
                            </div>
                        </div>

                        <?php include 'include/sidebar.php'?>
                    </div>
                </div>
            </div>
            <?php include 'include/footer.php'?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../vendor/twbs/bootstrap/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
