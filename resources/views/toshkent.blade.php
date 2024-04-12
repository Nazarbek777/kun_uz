
@extends('layouts.kun')
@section('title', 'Home Page')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                @php $lastNews = $news->last(); @endphp
                <div class="row section-card">
                    <div class="col-md-6">
                        <div class="section-card-img">
                            <img src="{{ asset($lastNews->image) }}" alt="" class="card-img">
                        </div>
                    </div>
                    <div  class="col-md-6">
                        <div class="news-meta"><span>{{$lastNews->created_at}}</span></div>
                        <span class="big-news__title"><a href="{{route('show-news', $lastNews->id)}}" class="news__title text-black ">{{ $lastNews->short_content }}</a></span>
                        <span class="big-news__description">{{ $lastNews->content }}</span>
                    </div>
                </div>
                <div class="editor-choice my-5">
                    <div class="row">
                        @foreach($news->reverse()->slice(1, 3) as $new)
                        <div class="col-md-4">
                            <div class="news">
                                <div class="news__img ">
                                    <a href="">
                                        <img src="{{asset($new->image)}}" class="small-news__img">
                                    </a>
                                </div>
                                <div class="news-meta"><span>{{$new->created_at}}</span></div>
                                <a class="news__title" href="{{ route('show-news', $new->id)}}">
                                    {{ $new->short_content }}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="post-line">
                    @foreach($news->sortByDesc('created_at')->slice(1, 8) as $new)
                        <div class="line-block   mt-3" id="news-list">
                            <div class="l-item mt-3">
                                <div class="start-date  mt-1">{{ $new->created_at->format('j F') }}</div>
                                <div class="line-post">
                                    <div class="lp-head">
                                        <span class="publish-date">{{ $new->created_at->format('H:i') }}</span>
                                        <a class="lp-title" href="{{ route('show-news', $new->id)}}">
                                            {{$new->short_content}}
                                        </a>
                                    </div>
                                    <div class="lp-body d-flex mt-1">
                                        <div class="post-thumb"><img
                                                src="{{$new->image}}">
                                        </div>
                                        <div class="post-desc ml-1 mt">
                                            <p>{{$new->content}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <a href="" class="block-title"><span>Сўнгги янгиликлар</span></a>
                  @foreach($newsAll->reverse()->slice(1,8) as $new)
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

@endsection
