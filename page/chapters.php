<?php
    require_once "../config/db.php";
    $url = 'http://'.$_SERVER['HTTP_HOST'];
    $url_chap = $url.$_SERVER['REQUEST_URI'];
    $id = url_transition($url, $url_chap);
    $full_url = $url . "/page/chapters.php?id=" . $id;
    $author = new author($id, $connection);
    $title = $author -> title;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=$title?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/chap.css">

    <!--  ChatBro  -->
    <script id="chatBroEmbedCode">/* Chatbro Widget Embed Code Start */function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}/* Chatbro Widget Embed Code End */ChatbroLoader({encodedChatId: '84LRb'});</script>
</head>
<body>
    <div class="wrapper container-fluid">
        <div class="container column justify-Start">
            <?php include ('include/header.php')?>

            <div class="main row justify-content-between">
                <div class="chapter col-xl-8 col-lg-12">
                    <div class="dark-opasity block-chapter row align-content-around">
                        <?php
                            $chapter = $author -> database($id, 'chapter');
                            if ($chapter) {
                            foreach ($chapter as $key => $value) {
                        ?>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href=<?="'chapter.php?id=".$id."&id_chapter =".$key."'"?>>
                                <div class="card">
                                    <img src=<?="'../image/".$value['image']."'"?> class="card-img-top" alt=<?=$value['title']?>>
                                    <div class="card-body">
                                        <h4 class="card-title"><?=$value['title']?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php }} else { ?>
                        <h4 class="card-title col-12">Рассказов нет. Дождитесь следующего Выброса креатива!</h4>
                    <?php } ?>

                    </div>
                </div>

                <?php include ('include/sidebar.php')?>
            </div>
        </div>

        <?php include ('include/footer.php')?>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
