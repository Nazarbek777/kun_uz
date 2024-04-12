@extends('layouts.kun')
@section('title', 'Home Page')
@section('content')
    <!-- section start -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                @php $lastNews = $news->last(); @endphp
                    <div class="row  section-card">
                        <div class="col-md-6">
                            <div class="section-card-img ">
                                <img src="{{asset($lastNews->image)}}" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="news-meta"><span>{{$lastNews->created_at}}</span></div>
                            <a href="{{route('show-news', $lastNews->id)}}" class="aaa"> <span class="big-news__title">{{$lastNews->short_content}}</span></a>
                            <span class="big-news__description">{{$lastNews->content}}</span>
                        </div>
                    </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="small-news d-flex">

                            <a class="small-news__img" href="">
                                <img src="./images/card-img.jpg" class="small-news__img">
                            </a>


                            <div class="small-news__content">
                                <div class="news-meta-2"><span>21:53 / 04.12.2023</span></div><a
                                    class="small-news__title"
                                    href="/news/2023/12/04/yogli-budjet-xaridlardagi-insofsizlik-va-elitar-korrupsiya-akmal-burhonov-bilan-aksilkorrupsion-siyosat-kelgusi-rejalar-haqida-suhbat">“Ёғли”
                                    бюджет, элитар коррупция ва кечикаётган декларациялаш — Акмал Бурҳонов билан
                                    суҳбат</a>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="editor-choice mt-3">

                    <div class="row">

                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img ">
                                    <a
                                        href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">
                                        <img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/zAKkoY0vU0q4RfxVW18hb2VxhLtB-_y8_medium.jpg">
                                    </a>
                                </div>
                                <div class="news-meta"><span>16:04 / 04.12.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">Нурмат
                                    Отабеков: Мавсумий касалликлар сабаб ўқув муассасаларида таълим жараёнини
                                    тўхтатишга асос йўқ</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3" >
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/8KrX09c8LcjAmztZmSNboYdBCs6qw7fU_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>20:22 / 26.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi">Ўзига
                                    100 млн, мураббийига 50 млн. Шахмат бўйича жаҳон чемпиони Афруза Ҳамдамова
                                    тантанали кутиб олинди</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/88hwoKlt2jrnv2XxZmhm03R170RT4tG9_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>16:49 / 23.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi">Ер
                                    ости сувларидан “ҳисоблагич” билан фойдаланиш. Янги тартиб қандай ва кимлар учун
                                    ишлайди?&nbsp;</a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img ">
                                    <a
                                        href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">
                                        <img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/zAKkoY0vU0q4RfxVW18hb2VxhLtB-_y8_medium.jpg">
                                    </a>
                                </div>
                                <div class="news-meta"><span>16:04 / 04.12.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">Нурмат
                                    Отабеков: Мавсумий касалликлар сабаб ўқув муассасаларида таълим жараёнини
                                    тўхтатишга асос йўқ</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3" >
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/8KrX09c8LcjAmztZmSNboYdBCs6qw7fU_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>20:22 / 26.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi">Ўзига
                                    100 млн, мураббийига 50 млн. Шахмат бўйича жаҳон чемпиони Афруза Ҳамдамова
                                    тантанали кутиб олинди</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/88hwoKlt2jrnv2XxZmhm03R170RT4tG9_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>16:49 / 23.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi">Ер
                                    ости сувларидан “ҳисоблагич” билан фойдаланиш. Янги тартиб қандай ва кимлар учун
                                    ишлайди?&nbsp;</a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img ">
                                    <a
                                        href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">
                                        <img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/zAKkoY0vU0q4RfxVW18hb2VxhLtB-_y8_medium.jpg">
                                    </a>
                                </div>
                                <div class="news-meta"><span>16:04 / 04.12.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">Нурмат
                                    Отабеков: Мавсумий касалликлар сабаб ўқув муассасаларида таълим жараёнини
                                    тўхтатишга асос йўқ</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3" >
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/8KrX09c8LcjAmztZmSNboYdBCs6qw7fU_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>20:22 / 26.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi">Ўзига
                                    100 млн, мураббийига 50 млн. Шахмат бўйича жаҳон чемпиони Афруза Ҳамдамова
                                    тантанали кутиб олинди</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/88hwoKlt2jrnv2XxZmhm03R170RT4tG9_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>16:49 / 23.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi">Ер
                                    ости сувларидан “ҳисоблагич” билан фойдаланиш. Янги тартиб қандай ва кимлар учун
                                    ишлайди?&nbsp;</a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img ">
                                    <a
                                        href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">
                                        <img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/zAKkoY0vU0q4RfxVW18hb2VxhLtB-_y8_medium.jpg">
                                    </a>
                                </div>
                                <div class="news-meta"><span>16:04 / 04.12.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">Нурмат
                                    Отабеков: Мавсумий касалликлар сабаб ўқув муассасаларида таълим жараёнини
                                    тўхтатишга асос йўқ</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3" >
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/8KrX09c8LcjAmztZmSNboYdBCs6qw7fU_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>20:22 / 26.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi">Ўзига
                                    100 млн, мураббийига 50 млн. Шахмат бўйича жаҳон чемпиони Афруза Ҳамдамова
                                    тантанали кутиб олинди</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/88hwoKlt2jrnv2XxZmhm03R170RT4tG9_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>16:49 / 23.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi">Ер
                                    ости сувларидан “ҳисоблагич” билан фойдаланиш. Янги тартиб қандай ва кимлар учун
                                    ишлайди?&nbsp;</a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img ">
                                    <a
                                        href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">
                                        <img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/zAKkoY0vU0q4RfxVW18hb2VxhLtB-_y8_medium.jpg">
                                    </a>
                                </div>
                                <div class="news-meta"><span>16:04 / 04.12.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">Нурмат
                                    Отабеков: Мавсумий касалликлар сабаб ўқув муассасаларида таълим жараёнини
                                    тўхтатишга асос йўқ</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3" >
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/8KrX09c8LcjAmztZmSNboYdBCs6qw7fU_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>20:22 / 26.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/26/oziga-100-mln-murabbiyiga-50-mln-shaxmat-boyicha-jahon-chempioni-afruza-hamdamova-tantanali-kutib-olindi">Ўзига
                                    100 млн, мураббийига 50 млн. Шахмат бўйича жаҳон чемпиони Афруза Ҳамдамова
                                    тантанали кутиб олинди</a>
                            </div>
                        </div>




                        <div class="col-md-4 mt-3">
                            <div class="news">
                                <div class="news__img p-relative"><a
                                        href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/88hwoKlt2jrnv2XxZmhm03R170RT4tG9_medium.jpg"></a>
                                </div>
                                <div class="news-meta"><span>16:49 / 23.11.2023</span></div><a class="news__title"
                                                                                               href="/news/2023/11/23/yer-osti-suvlaridan-hisoblagich-bilan-foydalanish-yangi-tartib-qanday-va-kimlar-uchun-ishlaydi">Ер
                                    ости сувларидан “ҳисоблагич” билан фойдаланиш. Янги тартиб қандай ва кимлар учун
                                    ишлайди?&nbsp;</a>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <a href="/news/list" class="block-title"><span>Сўнгги янгиликлар</span></a>
                <div class="mb-25">
                @foreach($news_type_select_2->sortByDesc('created_at')->slice(1,8) as $new)
                        <a class="news-lenta" href="">
                            <div class="news-meta"><span>{{ $new->created_at->format('H:i') }}</span></div>
                            <span class="news-lenta__title">
                                {{$new->short_content}}
                            </span>

                        </a>
                        <hr>
                @endforeach

                </div>

            </div>
        </div>
    </div>

    <!-- section end -->
@endsection
