<title> {{$blog->name}}</title>

@extends('layout')

@section('main')

    <div id="main_body">
        <br>
        <div class="right-bg">
            <div id="right" class="sidebar" >
                <div class="region-right-content">
                    <div class="region region-right">
                        <div id="block-new-desine-blog-more-records" class="block block-new-desine">
                            <div class="block-title"><span>Другие записи блога</span></div>
                            <div class="content">
                                <div class="view view-right-blogs">
                                    <div class="views-row">
                                        <div class="field-image">
                                            <picture>
                                                <source
                                                    data-srcset="/sites/images/blogs/blog1.png" type="image/webp">
                                                <img class="" src="/sites/images/blogs/blog1.png" alt="name" title="name" width="92" height="70">
                                            </picture>

                                        </div>
                                        <div class="field-title"><a href="">
                                                Немецкий опыт. «Зенит» и «Спартак» выручат футбольных коллег?</a></div>
{{--                                        <div class="field-desc">«Соккер.ру» — о том, как ведущие клубы Бундеслиги подали--}}
{{--                                            пример грандам РПЛ.--}}
{{--                                        </div>--}}
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

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
                        <h1 class="site-title">{{$blog->name}}</h1>
                        <div class="clearfix">
                            <div class="region region-content">
                                <div id="block-system-main" class="block block-system">
                                    <div class="content">
                                        <div id="node-1177370" class="node news full odd">
                                            <div class="node-created">
                                                {{$blog->posted_at}}
                                                <div class="links"></div>
                                            </div>
                                            <div class="field-name-body copy-protected">
                                                {{$blog->content}}
                                            </div>
                                            <div class="newsAll">
                                                {{--                                                <div class="link"><a href="/news">Все новости</a></div>--}}
                                            </div>
                                            {{--                                            <div id="recordTags" class="newsTag">--}}
                                            {{--                                                <div class="tags"><a href="/italy">Италия. Серия А 2019/2020</a>&nbsp;--}}
                                            {{--                                                    <a href="/categories/341.shtml">Заграница: трансферные слухи</a>&nbsp;--}}
                                            {{--                                                    <a href="/roma">Рома</a>&nbsp; <a--}}
                                            {{--                                                        href="/teams/thm.shtml">Тоттенхэм</a>&nbsp; <a--}}
                                            {{--                                                        href="/players/7565.shtml">Вертонген Ян</a>&nbsp; <a--}}
                                            {{--                                                        href="/players/14000.shtml">Смоллинг Крис</a></div>--}}

                                            {{--                                                <div class="source">Источник: <a target="_blank" rel="nofollow"--}}
                                            {{--                                                                                 href="http://www.football-italia.net/">Football-italia.net</a>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}


                                            <div class="clear"></div>


                                        </div>
                                        <div id="discuss">
                                            <div class="discuss-block-title">Обсудить</div>
                                            <div class="block-sorting-comm">
                                                <form method="get" id="comments-sort-form">
                                                    {{--                                                    <input type="hidden" name="sort_by" value="date" autocomplete="off">--}}
                                                    {{--                                                    <div class="select-sort">--}}
                                                    {{--                                                        <div class="field-name">Сортировать</div>--}}
                                                    {{--                                                        <ul>--}}
                                                    {{--                                                            <li class="current" data-s="date">--}}
                                                    {{--                                                                <a href="/news/1177370/vertongen-yan-roma?#discuss">По--}}
                                                    {{--                                                                    дате</a>--}}
                                                    {{--                                                            </li>--}}
                                                    {{--                                                            <li class="" data-s="likes">--}}
                                                    {{--                                                                <a href="/news/1177370/vertongen-yan-roma?sort_by=likes#discuss">По--}}
                                                    {{--                                                                    лайкам</a>--}}
                                                    {{--                                                            </li>--}}
                                                    {{--                                                            <li class="" data-s="responses">--}}
                                                    {{--                                                                <a href="/news/1177370/vertongen-yan-roma?sort_by=responses#discuss">По--}}
                                                    {{--                                                                    ответам</a>--}}
                                                    {{--                                                            </li>--}}
                                                    {{--                                                        </ul>--}}
                                                    {{--                                                    </div>--}}
                                                </form>
                                            </div>
                                            <div id="all-comments-list">
                                                <div class="block-title">Все комментарии</div>
                                                <div class="content">
                                                    <div class="comment-list">
                                                        <div class="comment">
                                                            <div class="comment-at-id" data-val="0"></div>
                                                            <div class="comment-at-fid" data-val="0"></div>
                                                            <div class="comment-at-video" data-val=""></div>
                                                            <div class="author-photo">
                                                                <picture>
                                                                    <source
                                                                        data-srcset="/sites/images/news/comment_no_picture.png"
                                                                        type="image/webp">
                                                                    <img src="/sites/images/news/comment_no_picture.png"
                                                                         alt="AgentART" width="70" height="70"/>
                                                                </picture>
                                                            </div>
                                                            <div class="comment-right">
                                                                <div class="author">
                                                                    <a class="commentLogin" href="#">Name</a>
                                                                </div>
                                                                <div class="created">сегодня в 17:10, ред.</div>
                                                                <div class="commentBody">Хорошая кандидатура для Ромы
                                                                </div>
                                                                {{--                                                                <ul class="commentActions">--}}
                                                                {{--                                                                    <li class="like">--}}
                                                                {{--                                                                        <div class="vote_wrapp">--}}
                                                                {{--                                                                            <div cid="29831508"--}}
                                                                {{--                                                                                 class="votePlusButton can-vote vbt vbt-29831508">--}}
                                                                {{--                                                                                <div class="vimg"></div>--}}
                                                                {{--                                                                            </div>--}}
                                                                {{--                                                                            <span--}}
                                                                {{--                                                                                class="commentRating commentRating-29831508">0</span>--}}
                                                                {{--                                                                        </div>--}}
                                                                {{--                                                                    </li>--}}
                                                                {{--                                                                </ul>--}}
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                            <div id="add-form-not-auth">
                                                <div class="picture"><img
                                                        src="/sites/all/themes/newtheme/images/comment_no_picture.png"/>
                                                </div>
                                                <div class="comment-body">
                                                    <div><a class="ctools-use-modal" href="/login">Авторизуйтесь</a>,
                                                        чтобы оставить свой комментарий
                                                    </div>
                                                </div>
                                                <div class="button-submit">Отправить</div>
                                            </div>
                                            <div class="block block-block">
                                                <div class="content">
                                                    <div class="block-centering"
                                                         style="min-width: 728px;min-height: 90px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#center -->
@endsection
