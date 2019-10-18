<header class="header row justify-content-between">
    <h1 class="title col-lg-6 col-md-6 col-8"><a href="/chapters.html"><?=$title?></a></h1>
    <ul class="nav col-6 justify-content-end align-items-center">
        <li class="nav-item">
            <a class="nav-link active" href=<?=$url?>>Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=<?=$full_url?>>Рассказы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Блог</a>
        </li>
    </ul>
    <div class="drop dropdown col-4 justify-content-end align-items-center">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="menu">
                <use xlink:href="../../image/soc.svg#menu"></use>
            </svg>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" href=<?=$url?>>Главная</a>
            <a class="dropdown-item" href=<?=$full_url?>>Рассказы</a>
            <a class="dropdown-item" href="#">Блог</a>
        </div>
    </div>
</header>
