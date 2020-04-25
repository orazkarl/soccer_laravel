@extends('layout')

@section('main')

    <div id="main_body">
        <br>
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
                                                <a href="#">
                                                                                                <span class="comment-count">
                                                                                                    <img alt="Комментарии"  src="/sites/all/themes/newtheme/images/comments.png" width="17" height="17"/>
                                                                                                    6
                                                                                                </span>
                                                </a>
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
                        <div id="right" class="sidebar" >
                            <div class="region-right-content">
                                <div class="region region-right">
            {{--                        <div id="block-new-desine-blog-more-records" class="block block-new-desine">--}}
            {{--                            <div class="block-title"><span>Другие записи блога</span></div>--}}
            {{--                            <div class="content">--}}
            {{--                                <div class="view view-right-blogs">--}}
            {{--                                    <div class="views-row">--}}
            {{--                                        <div class="field-image">--}}
            {{--                                            <picture>--}}
            {{--                                                <source--}}
            {{--                                                    data-srcset="/sites/images/blogs/blog1.png" type="image/webp">--}}
            {{--                                                <img class="" src="/sites/images/blogs/blog1.png" alt="name" title="name" width="92" height="70">--}}
            {{--                                            </picture>--}}

            {{--                                        </div>--}}
            {{--                                        <div class="field-title"><a href="">--}}
            {{--                                                Немецкий опыт. «Зенит» и «Спартак» выручат футбольных коллег?</a></div>--}}
            {{--                                        --}}{{--                                        <div class="field-desc">«Соккер.ру» — о том, как ведущие клубы Бундеслиги подали--}}
            {{--                                        --}}{{--                                            пример грандам РПЛ.--}}
            {{--                                        --}}{{--                                        </div>--}}
            {{--                                    </div>--}}

            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

                                </div>
                            </div>
                        </div>

            <div id="center">
                <div class="center-inner">
                    <div class="center-inner-content">
                        <div class="small-breadcrumb">
                            <span><a title="Главная" href="/"><span>Главная</span></a></span>
                            <img src="/sites/all/themes/newtheme/images/breadcrumb-separator.png"/>
                            <span><a title="Блоги" href="/blogs"><span>Блоги</span></a></span>
                        </div>
                        <h1 class="site-title">Новые записи</h1>
                        <div class="clearfix">
                            <div class="region region-content">
                                <div id="block-system-main" class="block block-system">
                                    <div class="content">
{{--                                        <div class="blogs-filter">--}}
{{--                                            <ul>--}}
{{--                                                <li class="first"><a href="/blogs/records">Новые записи</a></li>--}}
{{--                                                <li class="last active"><a href="/blogs/popular">Популярные блоги</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                        @guest
                                            <div class="blogs-add-new"><a class="stroke-button-green" href="{{ route('login') }}">Добавить запись</a></div>
                                        @else
                                        <div class="blogs-add-new"><a class="stroke-button-green" href="{{ route('blogs.create') }}">Добавить запись</a></div>
                                        @endguest
                                        <div class="view-blogs-record">
                                            <div class="view-front-records">
                                                <div class="line-row full-width">
                                                    @foreach($blogs as $blog)
                                                        <div class="views-row first full-width">
                                                        <div class="field-image">
                                                            <picture>
                                                                <img class="" src="/sites/images/blogs/blog1.png" alt="" title="" width="465" height="310">
                                                            </picture>
                                                        </div>
                                                        <div class="record-right">
                                                            <div class="block-content">
                                                                <div class="author-photo">
                                                                    <picture>
                                                                        <img class="" src="/sites/all/themes/newtheme/images/comment_no_picture.png" alt="" width="65" height="65"/>
                                                                    </picture>

                                                                </div>
                                                                <div class="title author">АВТОР</div>
                                                                @foreach($users as $user)
                                                                    @if($user->id ==$blog->author_id)
                                                                <div class="link author-profile"><a href="#">{{$user->name}}</a></div>
                                                                    @endif
                                                                @endforeach
{{--                                                                <div class="title blog">В блоге</div>--}}
{{--                                                                <div class="link blog-name"><a href="/blogs/teamX"><span--}}
{{--                                                                            itemprop="articleSection">Символические сборные</span></a>--}}
{{--                                                                </div>--}}
{{--                                                                 <div class="record-created">{{ $blog->posted_at }}</div>--}}
                                                            </div>
                                                        </div>
                                                        <div class="record-data">
                                                            <div class="field-title">
                                                                <a href="/blogs/detail/{{$blog->id}}">{{$blog->name}}</a>
                                                            </div>
{{--                                                            <div class="field-record-body" itemprop="description">Хуан--}}
{{--                                                                Мата назвал Кэррика самым недооцененным футболистом МЮ,--}}
{{--                                                                и «Соккер.ру» собрал вокруг Майкла команду сообщников.--}}

{{--                                                            </div>--}}

                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
{{--                                            <div class="site-pager">--}}
{{--                                                <div class="load-more"><a class="stroke-button-green-wide" href="#"--}}
{{--element="0" current-page="0" total="1904"--}}
{{--                                                                          path="blogs/records/popular">Показать еще</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#center -->

@endsection
