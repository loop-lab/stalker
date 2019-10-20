<header class="header col-12">
    <div class="row justify-content-between">
        <h1 class="title col-lg-6 col-md-6 col-8"><a href="/chapters.html"><?=$author[$id_author]['title']?></a></h1>
        <ul class="nav col-6 justify-content-end align-items-center">
            <li class="nav-item">
                <a class="nav-link active" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?="chapters.php?id_author=".$id_author."&id_table=1"?>>Рассказы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?="chapters.php?id_author=".$id_author."&id_table=2"?>>Блог</a>
            </li>
        </ul>
        <div class="drop dropdown col-4 justify-content-end align-items-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="menu">
                    <use xlink:href="../../image/soc.svg#menu"></use>
                </svg>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="http:/stalker/">Главная</a>
                <a class="dropdown-item" href=<?="chapters.php?id_author=".$id_author."&id_category=1"?>>Рассказы</a>
                <a class="dropdown-item" href=<?="chapters.php?id_author=".$id_author."&id_category=2"?>>Блог</a>
            </div>
        </div>
    </div>
</header>
