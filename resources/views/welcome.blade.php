@extends('layouts.kun')
@section('title', 'Home Page')
@section('content')

<!-- section start -->
<div class="container mt-3">
    <div class="row">
        <div class="col-md-9">

            @if($news_type_select_2->count() > 0)
                @php $lastNews = $news_type_select_2->last(); @endphp
                <div class="row section-card">
                    <div class="col-md-6">
                        <div class="section-card-img text-center">
                            <img src="{{ asset($lastNews->image) }}" alt="" class="card-img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-meta"><span>{{$lastNews->created_at}}</span></div>
                        <span class="big-news__title">   <a class="ddd text-black" href="{{ route('show-news', $lastNews->id)}}">{{ $lastNews->short_content }}</a></span>
                        <span class="big-news__description">{{ $lastNews->content }}</span>
                    </div>
                </div>

                <div class="row mt-3">
                    @foreach($news_type_select_5->reverse()->slice(1, 4) as $new)
                        <div class="col-md-6 mb-3">
                            <div class="small-news d-flex">
                                <a class="small-news__img" href="">
                                    <img src="{{asset($new->image)}}" class="small-news__img">
                                </a>
                                <div class="small-news__content">
                                    <div class="news-meta-2"><span>{{$new->created_at}}</span></div>
                                    <a class="small-news__title" href="{{ route('show-news', $new->id)}}">{{ $new->short_content }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No news available</p>
            @endif

            <div class="editor-choice">
                <div class="block-title"><a href="/news/list?f=selected"><span>Муҳаррир танлови</span></a></div>
                <div class="row">

                 @foreach($news_type_select->sortByDesc('created_at')->slice(0, 3) as $new)
                        <div class="col-md-4">
                            <div class="news">
                                <div class="news__img ">
                                    <a href="{{ route('show-news', $new->id)}}">
                                        <img src="{{asset($new->image)}}">
                                    </a>
                                </div>
                                <div class="news-meta"><span>{{$new->craeted_at}}</span></div>
                                <a class="news__title"
                                   href="{{ route('show-news', $new->id)}}">
                                    {{$new->short_content}}
                                </a>
                            </div>
                        </div>
                 @endforeach



                </div>
            </div>

        </div>
        <div class="col-md-3">
            <a href="/news/list" class="block-title"><span>Сўнгги янгиликлар</span></a>
            @foreach($news_type_select_2->sortByDesc('created_at')->slice(1,7) as $new)
                <div class="mb-25">
                    <a class="news-lenta" href="{{ route('show-news', $new->id)}}">
                        <div class="news-meta"><span>{{ $new->created_at->format('H:i') }}</span></div>
                        <span class="news-lenta__title">
                                {{$new->short_content}}
                        </span>

                    </a>
                    <hr>
                </div>
            @endforeach

        </div>
    </div>
</div>
<div class="container mt-5" id="actual-news-content">
    <div class="block-title">
        <span>Долзарб хабарлар</span>
    </div>
    <div class="row">

            <div class="col-md-6">
                @php
                   $lastNews = $news_type_select_4->last();
                    $previousNews = $news_type_select_4->count() > 1 ? $news_type_select_4[$news_type_select_4->count() - 2] : null;
                   @endphp

                <div class="big-news big-news_column">
                    <div class="big-news__img p-relative">
                        <a href="">
                            <img src="{{ asset($previousNews->image) }} " class="w-100 h-100 ">
                        </a>
                    </div>
                    <div class="big-news__content">
                        <a class="big-news__title" href="">
                            {{ $previousNews->short_content }}
                        </a>
                        <div class="big-news__description">
                            {{ $previousNews->content }}
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-md-6">
            <div class="row">
                @foreach($news_type_select_4->reverse()->slice(1,4) as $new)
                    <div class="col-md-6 mb-25">
                        <div class="news">
                            <div class="news__img p-relative">
                                <a href="">
                                    <img src="{{ asset($new->image) }}">
                                </a>
                            </div>
                            <a class="news__title" href="{{ route('show-news', $new->id)}}">
                                {{ $new->short_content }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
<div class="container mt-3" id="authored-news">
    <div class="row">
        <div class="col-md-12">
            <div class="block-title "><span>Мақолалар</span></div>
            <div class="row">
               @foreach($news_type_select_3->reverse()->slice(0,6) as $new)
                    <div class="col-md-4 mb-30 mt-4">
                        <div class="news">
                            <div class="news__imgs p-relative"><a
                                    href="">
                                    <img src="{{asset($new->image)}}">
                                </a>
                            </div>
                            <a class="news__title"
                               href="{{ route('show-news', $new->id)}}">
                                {{$new->short_content}}
                            </a>
                            <div class="news__desc">
                                 {{$new->content}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<!-- section end -->

@endsection
