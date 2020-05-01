

@extends('layout')

@section('main')


    <div id="main_body">

                <div id="left" class="sidebar">
                    <div class="region region-left">
                        <div id="block-new-desine-left-main-news" class="block block-new-desine">
                            <div class="content">
                                <div class="view view-news view-news-sidebar">
                                    <div class="view-content">
                                        @foreach($news as $news_item)
                                            @if($news_item!=$detail_news)
                                                <div class="news">
                                                    <div class="field-title">
                                                        <a class="normal" href="/news/{{$news_item->id}}">
                                                            <img class="nt-icon icon2" src="sites/all/themes/newtheme/images/ofice.png">
                                                            {{$news_item->name}}
                                                        </a>
                                                    </div>
                                                    <div class="news-tags">
                                                        <div class="inn">
                                                            <span class="created">{{$news_item->posted_at}}</span>

                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach



                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        <br>
        <div class="right-bg">
            @include('tournaments')
            <div id="center">
                <div class="center-inner">
                    <div class="center-inner-content">
                        <div class="small-breadcrumb">
                            {{--                            <span>--}}
                            {{--                                <a title="Главная" href="/">--}}
                            {{--                                    <span>Главная</span>--}}
                            {{--                                </a>--}}
                            {{--                            </span>--}}
                            {{--                            <img src="/sites/all/themes/newtheme/images/breadcrumb-separator.png"/>--}}
                            {{--                            <span>--}}
                            {{--                                <a title="Новости" href="/news">--}}
                            {{--                                    <span>Новости</span>--}}
                            {{--                                </a>--}}
                            {{--                            </span>--}}
                        </div>
                        {{--                        <h1 class="site-title">Угадай команду</h1>--}}
                        <div class="clearfix">
                            <div class="region region-content">
                                <div id="block-system-main" class="block block-system">
                                    <div class="content">
                                        <h2>Имя: {{$result->name}}</h2>
                                        <h2>Ваша оценка: {{$result->score}}</h2>
                                    </div>
                                    <br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Имя</th>
                                            <th scope="col">Очко</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($highscores as $key=>$highscore)
                                            @if($result->id == $highscore->id)
                                                <tr style="background-color: #1d9a52">
                                                    <th scope="row">{{++$key}}</th>
                                                    <td>{{$highscore->name}}</td>
                                                    <td>{{$highscore->score}}</td>

                                                </tr>
                                            @else
                                                <tr>
                                                    <th scope="row">{{++$key}}</th>
                                                    <td>{{$highscore->name}}</td>
                                                    <td>{{$highscore->score}}</td>

                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#center -->
        </div>
    </div>

@endsection


