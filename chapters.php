<?php
    ob_start();
    $url = 'http://'.$_SERVER['HTTP_HOST'];
    $id_author = parse_url($url.$_SERVER['REQUEST_URI'], PHP_URL_QUERY);
    if ($id_author == '1') {
        $title = 'Байки Дыма';
    } elseif ($id_author == '2') {
        $title = 'Похождения Тельника';
    } else {
        header('Location: '.$url);
        exit();
    }
    ob_end_flush();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/chap.css">

    <!--  ChatBro  -->
    <script id="chatBroEmbedCode">/* Chatbro Widget Embed Code Start */function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}/* Chatbro Widget Embed Code End */ChatbroLoader({encodedChatId: '84LRb'});</script>

    <title>Title</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <header class="header row justify-content-between">
                <h1 class="title col-6"><a href="/chapters.html"><?=$title?></a></h1>
                <ul class="nav col-6 justify-content-end align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/chapters.html">Рассказы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Блог</a>
                    </li>
                </ul>
                <div class="drop dropdown col-6 justify-content-end align-items-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="menu">
                            <use xlink:href="image/soc.svg#menu"></use>
                        </svg>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="/">Главная</a>
                        <a class="dropdown-item" href="/chapters.html">Рассказы</a>
                        <a class="dropdown-item" href="#">Блог</a>
                    </div>
                </div>
            </header>

            <div class="main row justify-content-between">
                <div class="chapter col-xl-8 col-lg-12">
                    <div class="dark-opasity block-chapter row align-content-around">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a class="block_card" href="chapter.html">
                                <div class="card">
                                    <img src="image/chapter.jpg" class="card-img-top" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-xl-4 col-lg-12">
                    <div class="dark-opasity block-sidebar">
                            <div id="chatbro"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="content row justify-content-center align-items-center">
                <div class="social col-xl-2 col-lg-3 col-md-3 col-sm-3 row justify-content-around">
                    <div class="col-2">
                        <a class="btn btn-outline-light" href="#" role="button" target="_blank">
                            <svg class="soc">
                                <use xlink:href="image/soc.svg#vk"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-outline-light" href="#" role="button" target="_blank">
                            <svg class="soc">
                                <use xlink:href="image/soc.svg#group"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-outline-light" href="#" role="button" target="_blank">
                            <svg class="soc">
                                <use xlink:href="image/soc.svg#instagram"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>