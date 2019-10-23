<?php
    include_once "include.php";
    $table_id = $page -> getTablePage('id');
    $table = $page -> getTablePage('table');
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
                            <div class="dark-opasity block-chapter row align-content-around">

                                <?php
                                    if ($table) {
                                    foreach ($table as $key => $value) {
                                ?>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <a class="block_card" href=<?="chapter.php?id_author={$author_id}&id_table={$table_id}&id={$key}"?>>
                                        <div class="card">
                                            <img src=<?="'../image/".$value['image']."'"?> class="card-img-top" alt=<?=$value['title']?>>
                                            <div class="card-body">
                                                <h4 class="card-title"><?=$value['title']?></h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <?php }} else { ?>
                                    <h4 class="card-title col-12 align-self-center p-0 m-0" style="text-align: center;">Рассказов нет. Дождитесь следующего Выброса креатива!</h4>
                                <?php } ?>

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
