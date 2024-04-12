<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="icon" href="./images/favicon32x32.png" />
    <script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link rel="stylesheet" href="{{ mix('/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tiny.cloud/1/znbc8afiw1vuen2xqaazln1hopxetaxl4e5uld85to8vkg2o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
    @yield('styles')
    <!-- Styles -->
    <style>
        .aaa{
            text-decoration: none;
        }


        .navabar-ul {
            list-style: none;
            margin-top: 10px;
            width: 900px;
            justify-content: space-between;
        }

        .navabar-ul a {
            color: black;
            text-decoration: none;
            font-weight: 500;
            line-height: 45px;
        }

        .navabar-select {
            border-radius: 15px;
        }

        .lime {
            background-color: #f0f0f0;
            height: 40px;
        }

        .link-ul-li-p-1 {
            font-size: 12px;
            background-color: #17206a;
            color: #fff;
            font-weight: 600;
            font-size: 12px;
            line-height: 40px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .link-ul-li-p {
            font-size: 12px;
            color: #585858;
            font-weight: 600;
            font-size: 12px;
            line-height: 40px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .link-ul {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-right: 90px;
        }

        .lime li a {
            text-decoration: none;
        }

        .lime li {
            align-items: center;
        }

        .link-ul-li-a :active {
            background-color: #17206a;
            color: #fff;
        }

        .link-ul-li-a :hover {
            background-color: #17206a;
            color: #fff;
        }

        .link-ul-li-a ::before {
            align-items: center;

            content: " ";
            display: inline-block;
            width: 1px;
            height: 10px;
            background: #585858;
            margin-top: 8px;
            margin-right: 8px;

        }

        .link-ul-li-a-1 {
            position: relative;
        }

        .link-ul-li-a-1 ::before {
            content: " ";
            position: absolute;
            top: 0;
            bottom: 0;
            right: -12px;
            width: 0;
            height: 0;
            margin: auto;
            border-style: solid;
            border-width: 20px 0 20px 12px;
            border-color: transparent transparent transparent #17206a;
        }


        /* section */
        .section-card {
            background-color: #eff2f8;
            margin: 0;
            padding: 0;
        }

        .section-card-img {
            text-align: start;
            margin-left: -12px;
        }

        .news-meta {
            margin-top: 20px;
            margin-bottom: 10px;
            opacity: 0.8;
            color: #000000;
            font-size: 12px;
            padding-left: 20px;
            background: url(./images/calendar.svg) no-repeat center left;
            background-size: contain;
        }

        .big-news__title {
            text-decoration: none;
            font-size: 22px;
            line-height: 27px;
            color: #000000;
            font-weight: bold;
            -webkit-transition: 0.2s ease;
            -o-transition: 0.2s ease;
            transition: 0.2s ease;
            margin-bottom: 20px;
            display: block;
        }

        .big-news__description {
            font-size: 14px;
            font-weight: 500;
            line-height: 26px;
            color: #000000;
            display: block;
        }

        .block-title {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 20px;
            text-decoration: none;
        }

        .block-title span {
            color: #000000;
            font-size: 18px;
            font-weight: bold;
            position: relative;
            display: block;
            padding-left: 25px;
            padding-top: 15px;

        }

        .mb-25 {
            margin-bottom: 25px !important;
        }

        .news-lenta {

            text-decoration: none;
        }

        .block-title span::before {
            position: absolute;
            left: 0;
            top: 50%;
            content: "";
            width: 15px;
            height: 15px;
            border-radius: 100%;
            background: transparent;
            border: 4px solid #17206a;
            display: block;
        }


        .small-news__img {
            width: 175px;
            height: 125px;
            position: relative;
        }

        .small-news__content {
            border-bottom: 1px solid #cecece;
            padding-left: 0;
            margin-left: 15px;
            padding-bottom: 18px;
        }
        .single-header__title {
            font-size: 26px;
            font-weight: bold;
            line-height: 32px;
            color: #000000;
        }
        .news-meta-2 {

            margin-bottom: 10px;
            opacity: 0.8;
            color: #000000;
            font-size: 12px;
            padding-left: 20px;
            background: url(./images/calendar.svg) no-repeat center left;
            background-size: contain;
        }

        .small-news__title {
            text-decoration: none;
            font-size: 14px;
            color: #000;
            font-weight: 700;
            line-height: 20px;
        }


        /*  */


        .block-title {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .block-title a {
            color: #17206A;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;

        }
        .ddd{
            text-decoration: none;
        }

        .block-title span {
            color: #000000;
            font-size: 18px;
            font-weight: bold;
            position: relative;
            display: block;
            padding-left: 25px;
        }

        .news {
            width: 100%;
            position: relative;
        }

        .news__img {


        }

        .news__img img {
            width: 306px;
            height: 203px;
        }

        element.style {
        }

        .news .news__title {
            font-size: 16px;
            line-height: 22px;
        }

        .news .news__title {
            min-height: 66px;
        }

        .news__title {
            font-size: 20px;
            line-height: 26px;
            color: #000;
            font-weight: 700;
            text-decoration: none;
        }

        /*  */

        /*  */

        .small-post .sm-thumbnail {
            width: 170px;
            height: 110px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
        }

        .small-post .post-title h4 {
            font-size: 18px;
            line-height: 23px;
            font-weight: 700;
            color: #000;
            margin-bottom: 0;
        }

        .post-body h4 {
            margin-top: 20px;
            padding: 25px;
            padding-top: 0px;
            padding-right: 0;
            font-size: 20px;
            color: #000;
            font-weight: 700;
            line-height: 23px;
            margin-bottom: 0;
        }

        .small-post .post-title {
            padding: 8px 20px 0 20px;
        }

        .sm-thumbnail img {
            width: 170px;
            height: 110px;
        }

        .small-post a {
            text-decoration: none;
        }

        .post-box {
            text-decoration: none;
        }

        .news__imgs img {
            width: 420px;
            height: 277px;
        }


        /* footer */

        .page-footer__bottom {
            background-color: #131927;
            color: #ffffff;
        }

        .footer-menu-list {
            background-color: #1c2680;
        }

        .space-between {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .footer-menu {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 15px 0 20px;
        }

        .page-footer__bottom .footer-menu {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 15px 0 20px;
        }

        .page-footer__bottom .footer-menu__item {
            margin-right: 50px;
            list-style: none;
        }

        .page-footer__bottom .footer-menu__item a {
            font-size: 17px;
            font-weight: bold;
            color: #FFFFFF;
            font-family: "Montserrat";
            text-decoration: none;
        }

        .page-footer__bottom .footer-bottom {
            padding: 25px 0;
            background-color: #17206a;
        }


        .space-between {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .page-footer__bottom .footer-text {
            font-size: 13px;
            letter-spacing: -0.05px;
            max-width: 1000px;
            padding-bottom: 30px;
            line-height: 18px;
            padding-right: 30px;
        }

        .social-items {
            width: 200px;
            justify-content: space-between;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding-bottom: 18px;

        }

        .social-item a {
            padding: 7px;
            -webkit-transition: all .2s ease-in;
            -o-transition: all .2s ease-in;
            transition: all .2s ease-in;
            margin-left: 10px;
        }


        /* xudud start */


        .post-line {
            width: 100%;
            padding-top: 30px;
            padding-left: 90px;
            border: 1px solid #e3e3e3;
            margin-top: -0px;
        }


        .post-line .line-block {
            width: 100%;
            height: 100%;
            border-left: 1px solid #e3e3e3;
            position: relative;
        }

        .post-line .line-block .start-date {

            display: flex;

            align-items: center;

            -webkit-transform: translateX(-8px) translateY(-8px);
            -ms-transform: translateX(-8px) translateY(-8px);
            transform: translateX(-8px) translateY(-8px);
            font-size: 12px;
            color: #000;
            font-weight: 500;
        }

        .start-date {
            margin-top: -20px;
            margin-left: 10px;
        }

        .line-post {
            width: 100%;
            margin: 10px 0;
            padding: 0 20px;
            border-bottom: 1px solid #dadada;
        }

        .line-post .lp-head .publish-date {

            top: 3px;
            left: -71.5px;
            font-size: 12px;
            font-weight: 400;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .line-post .lp-head .lp-title {
            font-size: 18px;
            line-height: 25px;
            color: #000;
            text-decoration: none;
            font-weight: 700;
        }

        .line-block .line-post:last-child .lp-body {
            margin-bottom: 0;
            padding-bottom: 25px;
        }

        .line-post .lp-body .post-thumb {
            width: 170px;
            height: 100px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
        }

        .line-post .lp-body .post-desc p {
            margin: 0;
            letter-spacing: -0.5px;
        }

        .line-post .lp-body .post-desc {
            padding-left: 20px;
            font-size: 16px;
            line-height: 24px;
            color: #606060;
        }


        /* about */

        .default-page {
            background-color: #FFFFFF;
            max-width: 1140px;
            margin: 20px auto 0 auto;
            padding: 35px 65px 100px 65px;
        }

        .default-page h3 {
            font-size: 20px;
            color: #183784;
            font-weight: 700;
            text-align: center;
        }

        .default-page p {
            font-size: 15px;
            font-weight: 500;
            line-height: 1.67;
        }
        .aaa {
            list-style: none;
        }
        .default-page p strong a {
            list-style: none;
        }
    </style>
</head>
<body>
<!-- header start -->
<div class="container">
    <div class="navbar align-items-center">
        <div class="logo">
            <a href="/"> <img src="{{asset('./images/kun-uz-logo.svg')}}" alt=""></a>
        </div>
        <ul class="d-flex navabar-ul  ">
            <li>
                <a href="{{route('uzb')}}"> ЎЗБЕКИСТОН</a>
            </li>
            <li>
                <a href="">ЖАҲОН</a>

            </li>
            <li>
                <a href="">ИҚТИСОДИЁТ</a>
            </li>
            <li>
                <a href="">ЖАМИЯТ</a>
            </li>
            <li>
                <a href="">ФАН-ТЕХНИКА</a>
            </li>
            <li>
                <a href="">СПОРТ</a>
            </li>
            <li>

                <a href=""> НУҚТАЙИ НАЗАР</a>
            </li>
            <li>
                <a href="">АУДИО</a>
            </li>
        </ul>
        <select name="select" class="navabar-select form-select-sm border form-multiselect ">
            <option value="value1"  selected>Ўзбекча </option>
            <option value="value2" >uzbek</option>
            <option value="value3">Значение 3</option>
        </select>
    </div>

    <div class="lime ">

        <ul class="d-flex justify-content-between  align-items-center  link-ul">
            <li>
                <a href="" class="link-ul-li-a-1">
                    <p class="link-ul-li-p-1">Ҳудудлар</p>
                </a>
            </li>
            <li>
                <a href="{{route('toshkent')}}">
                    <p class="link-ul-li-p">Тошкент ш.</p>
                </a>

            </li>
            <li>
                <a href="./main.html" class="link-ul-li-a">
                    <p class="link-ul-li-p">Қорақалпоғистон</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Андижон</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Фарғона</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Наманган</p>
                </a>
            </li>
            <li>

                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Самарқанд</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Бухоро</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Хоразм</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Сурхондарё</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Қашқадарё</p>
                </a>
            </li>
            <li>

                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Жиззах</p>
                </a>
            </li>
            <li>
                <a href="" class="link-ul-li-a">
                    <p class="link-ul-li-p">Сирдарё</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- header end -->

<!-- section start -->
<div class="">
    @yield('content')
</div>

<!-- section end -->


<!-- footer start -->
<footer class="page-footer mt-4">

    <div class="page-footer__bottom">
        <div class="footer-menu-list">
            <div class="container space-between">
                <ul class="footer-menu reset-list">
                    <li class="footer-menu__item"><a href="./about.html">Сайт ҳақида</a>
                    </li>
                    <li class="footer-menu__item"><a href="/news/rss">RSS</a>
                    </li>
                    <li class="footer-menu__item"><a href="/contact">Алоқа</a>
                    </li>
                    <li class="footer-menu__item"><a href="/page/reklama">Реклама</a>
                    </li>
                    <li class="footer-menu__item"><a href="/time/news">Кун мавзулари</a></li>
                    <li class="footer-menu__item"><a href="/our-team">Kun.uz жамоаси</a>
                    </li>
                </ul>
                <a class="d-flex" href="/page/privacy-18"><img src="./images/18plus-v2.svg"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container space-between">
                <div class="footer-text"> «KUN.UZ» сайтида эълон қилинган материаллардан нусха кўчириш, тарқатиш ва
                    бошқа шаклларда фойдаланиш фақат таҳририят ёзма розилиги билан амалга оширилиши
                    мумкин.<br>Гувоҳнома: №0987. Берилган санаси: 22.06.2015 йил. Муассис: «WEB EXPERT» МЧЖ.
                    Таҳририят манзили: 100043, Тошкент шаҳри, К. Ёрматов кўчаси, 12-уй. Электрон манзил:
                    info@kun.uz.<br>Сайтда эълон қилинаётган муаллифлик мақолаларида келтирилган фикрлар муаллифга
                    тегишли ва улар Kun.uz таҳририяти нуқтаи назарини ифода этмаслиги мумкин.<br>Ⓣ - мақола ва
                    материалларда қўйилган мазкур белги уларнинг тижорат ва реклама ҳуқуқлари асосида эълон
                    қилинганлигини билдиради.
                </div>
                <ul class="social-items reset-list">
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- footer end -->

</body>

</html>
