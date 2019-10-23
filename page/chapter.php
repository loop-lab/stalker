<?php
    include_once "include.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require_once "include/head.html" ?>
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
                                <h2 class="title_chapter "><?=$page -> getChapterPage('title')?></h2>
                                <img class="img_chapter" src=<?="../image/" . $page -> getChapterPage('image')?> />
                                <pre class="text_chapter"><?=$page -> getChapterPage('text')?></pre>
                            </div>
                        </div>

                        <?php include 'include/sidebar.html'?>
                    </div>
                </div>
            </div>
            <?php include 'include/footer.php'?>
        </div>
    </div>

    <?php require_once "include/scripts.html" ?>
</body>
</html>
