@extends('layout')

@section('main')

    <div id="main_body">
        <div id="left" class="sidebar">
            <div class="region region-left">
                <div id="block-new-desine-new-on-blogs-left" class="block block-new-desine">
                    <div class="block-title">
                        <span>Новое в блогах</span>
                    </div>

                    <div class="content">
                        <div class="view view-left-blogs">
                            @foreach($blogs as $blog )
                                <div class="views-row">
                                    <div class="field-image">
                                        <picture>
                                            <img src="/sites/images/blogs/blog1.png" alt="" title="" width="80"
                                                 height="60">
                                        </picture>

                                    </div>
                                    <div class="field-title"><a href="/blogs/detail/{{$blog->id}}">{{$blog->name}}</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="right-bg">
            <br>
            <div id="right" class="sidebar">

            </div>
            <div id="center">
                <div class="center-inner">
                    <div class="center-inner-content">
                        <div class="small-breadcrumb">
                            <span><a title="Главная" href="/"><span>Главная</span></a></span>
                            <img src="/sites/all/themes/newtheme/images/breadcrumb-separator.png"/>
                            <span><a title="Блоги" href="/news"><span>Новости</span></a></span>
                        </div>
                        <h1 class="site-title">Главные новости</h1>
                        <div class="clearfix">
                            <div class="region region-content">
                                <div id="block-system-main" class="block block-system">
                                    <div class="content">
                                        <div class="view view-news center">
                                            <div class="view-content">
                                                @foreach($news as $news_item)
                                                <div class="news">
                                                    <div class="created">{{$news_item->created_at}}</div>
                                                    <div class="title-links">
                                                        <a href="/news/{{$news_item->id}}" class="normal news-lnk">
                                                            <img class="nt-icon icon2" src="/sites/all/themes/newtheme/images/ofice.png"/>
                                                            {{$news_item->name}}
                                                        </a>
{{--                                                        <a href="/news/1178997#discuss">--}}
{{--                                                            <span class="comment-count">--}}
{{--                                                                <img alt="Комментарии" src="/sites/all/themes/newtheme/images/comments.png" width="17" height="17"/>2</span>--}}
{{--                                                        </a>--}}
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#center -->
        </div>

@endsection
