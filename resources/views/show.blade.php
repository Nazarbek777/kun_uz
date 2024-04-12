
@extends('layouts.kun')

@section('title', 'Home Page')

@section('content')

    <div class="container mt-3">

        <div class="row">
            <div class="col-md-3 border">
                <a href="" class="block-title"><span>Сўнгги янгиликлар</span></a>
                @foreach($newsAll->sortByDesc('created_at')->slice(7,8) as $new)
                    <div class="mb-25">
                        <a class="news-lenta" href="">
                            <div class="news-meta">
                                <span>{{ $new->created_at->format('H:i') }}</span>
                            </div>
                            <span class="news-lenta__title">
                                {{$new->short_content}}
                                </span>
                        </a>
                        <hr>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <div class="row ">
                    <div  class="col-md-12">

                        <div class="news-meta "><span class="input-group-addon"><i class="mx-2 fa fa-calendar"></i>{{$news->created_at}}</span></div>



                        <h1 class="single-header__title m-3">{{ $news->short_content }}</h1>
                        <h5 class="font-bold m-3  p-1">{{ $news->content }}</h5>
                    </div>
                    <div class="col-md-12">
                        <div class="section-card-img border m-3">
                            <img src="{{ asset($news->image) }}" alt="" class="card-img">
                        </div>
                        <p class="font-bold p-4 m-3 ">{{ $news->description }}</p>
                    </div>

                </div>

            </div>
            <div class="col-md-3 border ">
                <a href="" class="block-title"><span>Тавсия этамиз</span></a>

                @foreach($newsAll->sortByDesc('created_at')->slice(0,7) as $new)
                        <div class="mb-25">
                            <a class="news-lenta" href="{{route('show-news', $new->id)}}">
                                <div class="news-meta">
                                    <span>{{ $new->created_at->format('H:i') }}</span>
                                </div>
                                <span class="news-lenta__title">
                                {{$new->short_content}}
                                </span>
                            </a>
                            <hr>
                        </div>
                    @endforeach

            </div>
        </div>


        <div class="editor-choice">
            <div class="block-title"><a href="/news/list?f=selected"><span>Муҳаррир танлови</span></a></div>
            <div class="row">

                <div class="col-md-3">
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




                <div class="col-md-3">
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




                <div class="col-md-3">
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
                <div class="col-md-3">
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

@endsection
