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
{{--                                            <a href="#">--}}
{{--                                                <span class="comment-count">--}}
{{--                                                    <img alt="Комментарии"  src="/sites/all/themes/newtheme/images/comments.png" width="17" height="17"/>--}}
{{--                                                    6--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="right-bg">

            <div id="main-theme-1120">
{{--                <div class="main-theme-grid-3">--}}
{{--                    <div class="top-left-border"></div>--}}
{{--                    <div class="blog-record-357" >--}}
{{--                        <div class="field-image">--}}
{{--                            <a href="#">--}}
{{--                                <div class="field-image-img">--}}
{{--                                    <picture>--}}
{{--                                        <img  src="sites/images/blogs/blog1.png" alt="name blog" title="name blog">--}}
{{--                                    </picture>--}}

{{--                                </div>--}}
{{--                                <div class="field-title">Name blog</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="record-data">--}}
{{--                            <div class="blog-name">--}}
{{--                                В блоге <a href="/blogs/%D0%A4%D0%A3%D0%94%D0%95%D0%9D%D0%AC%D0%93%D0%98"><span--}}
{{--                                        itemprop="articleSection">Футбол и деньги</span></a></div>--}}
{{--                            <div class="field-created">Сегодня, 16:10</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="bottom-right-border"></div>--}}
    {{--                </div>--}}
            </div>
            @include('tournaments')
            <div id="center">
                <div class="center-inner">
                    <div class="center-inner-content">
                        <div class="clearfix">
                            <div class="region region-content">

                                <div id="block-new-desine-records-top" class="block block-new-desine">
                                    <div class="content">
                                        <div class="view-front-records">
                                            <div class="line-row">
                                                @foreach($blogs as $blog)
                                                <div class="views-row ">
                                                    <div class="field-image">
                                                        <a href="/blogs/{{$blog->id}}">
                                                            <picture>
                                                                <img src="/sites/images/blogs/blog1.png"  alt="name blog" title="name blog">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="record-data">
                                                        <div class="field-created">
                                                            {{$blog->posted_at}}
                                                        </div>
                                                        <div class="field-title">
                                                            <a href="/blogs/{{$blog->id}}">{{$blog->name}}</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

                                            <div class="view-all-blogs">
                                                <a class="stroke-button-green-wide"
                                                   href="#" data-bid="1">Все блоги</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#center -->
            <div id="bottom_block">
                <div class="read-more-wrapp">
                </div>
                <div class="region region-bottom-baner">
                    <div id="block-block-101" class="block block-block">


                        <div class="content">
                            <div class="block-centering" style="min-width: 970px;min-height: 250px;">
                                <ins data-revive-zoneid="3"
                                     data-revive-id="0f34167c4c9aa34be49384c296cf622c"></ins>
                                <script async src="//static.soccer.ru/www/delivery/asyncjs.php"></script>
                            </div>
                            <div class="hbc">
                                <script type='text/javascript'>
                                    if (typeof (window.canRunAds) === "undefined") {
                                        $('#block-block-101').find('.block-centering').html("<div id='crt-1235119'></div>")
                                        callAdblock(1235119, 970, 250);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer')
        </div>
    </div> <!-- /#main_body -->
@endsection
