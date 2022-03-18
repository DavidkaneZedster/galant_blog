<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/fonticons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>GALANT_Blog</title>
</head>
<body>
<!-- header -->
<header id="header">
    <div class="container">
        <div class="header__items">
            <div class="header__item">
                <span class="icon-location"></span>
                <p class="header__item-text">г. Москва, ул. Дорожная 60Б, офис 524</p>
                <span class="icon-time"></span>
                <p>пн-чт 8:00 - 17:00, пт 8:00 - 16:00, сб-вск - выходной</p>
            </div>
            <div class="header__links">
                <span class="icon-vk"></span>
                <span class="icon-instagram"></span>
                <span class="icon-facebook"></span>
            </div>
        </div>
    </div> 
</header>
<!-- menu_section -->
<section id="menu">
    <?php require "./blocks/navigation.php" ?>
</section>
<!-- crumbs -->
<div class="container">
    <div class="crumbs">
        Главная<span class="icon-right_vector"></span>Блог<span class="icon-right_vector"></span><span class="crumbs__active">Декабрь-Пик продаж косметических средств</span>
    </div>
</div>
<!-- main_section -->
<main id="main">
    <div class="image__block">
        <div class="box"></div>
        <img src="./img/first_image.png" alt="first_image" class="image__block-img">
        <div class="image__block-text">
            <div class="container">
                <h2 class="image__block-title">Декабрь-Пик продаж косметических средств</h2>
                <div class="image__block-subtitle">По данным исследований аналитических агентств косметические средства чаще всего покупают в декабре. Лидерами продаж товаров категории «Косметика» являются Москва и Санкт-Петербург.</div>
                <div class="image__block-subtitle">Доля их продаж относительно других городов России 27,2% в товарных единицах и 26,5% продаж в рублях. Среди регионов лидирующие позиции занимают  Краснодар (2,9%), Челябинск(1,8%) и Екатеринбург (1,8%) в индексе относительного потребления косметики в штуках.</div>
            </div>
        </div>
    </div>
</main>
<!-- reverse_main_section -->
<!-- Не удалось правильно воспользоваться flex-direction: row-reverse, в связи с чем пришлось
делать такой же блок с -second классами, из-за чего почти в 2 раза увеличился CSS код,
уверен, можно сделать по-другому, не заморачиваясь с -second классами и по сути теми же
элементами&стилями для них. -->
<section class="main__content-second">
    <div class="image__block-second">
        <div class="box-second"></div>
        <img src="./img/second_image.png" alt="second_image" class="image__block-img-second">
        <div class="image__block-text-second">
            <div class="container">
                <div class="image__block-subtitle-second">По данным 2020-2021 года снижение интереса к товарам категории наблюдается в сентябре, январе и мае-июне. Весной 2021 года также наблюдалось небольшое увеличение объема продаж.</div>
                <div class="image__block-subtitle-second">В большинстве исследуемых городов в октябре и декабре 2020 г. наблюдается заметное повышение доли предоплаченных заказов. Исключения - Красноярск, Новосибирск, Омск. Среднегодовая доля предоплаченных заказов для категории «Косметика» в исследуемых городах имеет разброс от 43 % до 54%.</div>
                <a href="#" class="more__link">См.подробнее данные Аналитики «Data Insight»</a>
            </div>
        </div>
    </div>
</section>
<!-- back_btn -->
<div class="container">
    <div class="back__button">
        <a href="#" class="back__to-list icon-back_arrow">Назад к списку</a>
    </div>
</div>
<!-- footer -->
<footer id="footer">
<div class="container">
    <div class="footer__navigation">
        <svg width="236" height="42" viewBox="0 0 236 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M67.4163 23.5132H75.8325C74.9648 26.8971 71.7545 29.5 67.9369 29.5C63.3383 29.5 59.5207 25.7691 59.5207 21.0838C59.5207 16.3985 63.2516 12.6676 67.9369 12.6676C70.2795 12.6676 72.4486 13.622 74.0104 15.2706L76.4398 12.8412C74.2707 10.5853 71.2339 9.28381 68.0236 9.28381C61.5163 9.28381 56.2236 14.5765 56.2236 21.0838C56.2236 27.5912 61.5163 32.8838 68.0236 32.8838C74.3575 32.8838 79.5633 27.9382 79.5633 21.7779V20.0426H67.4163V23.5132Z" fill="black"/>
            <path d="M139.257 32.3632H124.421V10.4117H127.804V28.9794H139.257V32.3632Z" fill="black"/>
            <path d="M203.897 32.3632H200.34L188.54 15.8779V32.3632H185.156V10.4117H188.713L200.513 26.897V10.4117H203.897V32.3632Z" fill="black"/>
            <path d="M229.059 10.4117H225.675V32.3632H229.059V10.4117Z" fill="black"/>
            <path d="M236 10.4117H218.647V13.7956H236V10.4117Z" fill="black"/>
            <path d="M108.109 32.3632L100.647 14.75L93.0987 32.3632H89.4546L98.9119 10.4117H102.469L111.753 32.3632H108.109Z" fill="black"/>
            <path d="M107.588 23.7736H93.7061V27.1574H107.588V23.7736Z" fill="black"/>
            <path d="M167.456 32.3632L159.994 14.75L152.446 32.3632H148.802L158.259 10.4117H161.816L171.1 32.3632H167.456Z" fill="black"/>
            <path d="M166.935 23.7736H153.053V27.1574H166.935V23.7736Z" fill="black"/>
            <path d="M18.2206 8.32941V0L0 12.4941V20.9103L18.2206 8.32941Z" fill="url(#paint0_linear_601_215)"/>
            <path d="M30.4544 16.7455L18.6544 24.8147V16.4853L30.4544 8.41614L36.5279 12.5808V20.9103L30.4544 16.7455ZM36.5279 20.9103L18.2206 33.4044L0 20.9103V29.2397L18.2206 41.7338L36.4412 29.2397V20.9103H36.5279Z" fill="#164194"/>
            <defs>
            <linearGradient id="paint0_linear_601_215" x1="0" y1="10.4664" x2="18.2061" y2="10.4664" gradientUnits="userSpaceOnUse">
            <stop stop-color="#C7AA83"/>
            <stop offset="0.2211" stop-color="#F7DDA3"/>
            <stop offset="0.7617" stop-color="#B39A77"/>
            <stop offset="0.9824" stop-color="#8E7143"/>
            </linearGradient>
            </defs>
        </svg>                    
        <!-- <a href="#"><img src="./img/logo.png" alt="galant_logo" class="logo" title="galant_blog"></a> -->
        <div class="footer__menu">
            <ul class="footer__menu-list">
                <li><a class="menu__link" href="#">Каталог<span class="icon-bottom_vector"></span></a></li>
                <li><a class="menu__link" href="#">Лицензия<span class="icon-bottom_vector"></span></a></li>
                <li><a class="menu__link footer__menu-links" href="#">Контракт</a></li>
                <li><a class="menu__link footer__menu-links" href="#">О компании</a></li>
                <li><a class="menu__link footer__menu-links" href="#">Блог</a></li>
                <li><a class="menu__link footer__menu-links" href="#">Контакты</a></li>
            </ul>
        </div>
        <div class="menu__item">
            <div class="footer__contacts">
                <p class="contact call"><span class="icon-call"></span>+7 (495) 133-75-91</p>
                <p class="contact mail"><span class="icon-mail"></span>info@galant-cosmetic.ru</p>
            </div>
        </div>
    </div>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="./js/script.js"></script>

</body>
</html>