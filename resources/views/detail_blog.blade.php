{{--<title> {{$blog->name}}</title>--}}

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
                                                <img class="nt-icon icon2"
                                                     src="sites/all/themes/newtheme/images/ofice.png">
                                                {{$news_item->name}}
                                            </a>
                                        </div>
                                        <div class="news-tags">
                                            <div class="inn">
                                                <span class="created">{{$news_item->posted_at}}</span>
                                                <a href="#">
                                                                                                <span
                                                                                                    class="comment-count">
                                                                                                    <img
                                                                                                        alt="Комментарии"
                                                                                                        src="/sites/all/themes/newtheme/images/comments.png"
                                                                                                        width="17"
                                                                                                        height="17"/>
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
        <br>
        <div class="right-bg">
            <div id="right" class="sidebar">
                <div class="region-right-content">
                    <div class="region region-right">
                        <div id="block-new-desine-blog-more-records" class="block block-new-desine">
                            <div class="block-title"><span>Другие записи блога</span></div>
                            <div class="content">
                                <div class="view view-right-blogs">
                                    @foreach($blogs as $blog_item)
                                        @if($blog_item!=$blog)

                                            <div class="views-row">
                                                <div class="field-image">
                                                    <picture>
                                                        <source
                                                            data-srcset="/sites/images/blogs/blog1.png"
                                                            type="image/webp">
                                                        <img class="" src="/sites/images/blogs/blog1.png" alt="name"
                                                             title="name" width="92" height="70">
                                                    </picture>
                                                </div>
                                                <div class="field-title"><a href="/blogs/detail/{{$blog_item->id}}">
                                                        {{$blog_item->name}}
                                                    </a></div>
                                            </div>
                                        @endif
                                    @endforeach
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
                                                {{--                                                {{$blog->posted_at}}--}}
                                                <div class="links"></div>
                                            </div>
                                            <div class="field-name-body copy-protected">
                                                <?php echo $blog->content;?>
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
                                            {{--                                            <div class="block-sorting-comm">--}}
                                            {{--                                                <form method="get" id="comments-sort-form">--}}
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
                                            {{--                                                </form>--}}
                                            {{--                                            </div>--}}
                                            <div id="recordTags">
                                                <div class="author-info row row-first">
                                                    @foreach($users as $user)
                                                        @if($user->id ==$blog->author_id)
                                                    <div class="photo"><img alt="{{$user->name}}"
                                                                            src="/sites/images/news/comment_no_picture.png"/>
                                                    </div>
                                                    <div class="title">АВТОР</div>
                                                    <div class="author-profile"><a href="#">{{$user->name}}</a>
                                                    </div>
                                                        @endif
                                                        @endforeach
                                                </div>
                                            </div>

                                            <div id="all-comments-list">
                                                <div class="block-title">Все комментарии</div>
                                                <div class="content">
                                                    <div class="comment-list">
                                                        @foreach($comments as $comment)
                                                            @if($comment->blog_id==$blog->id)
                                                                <div class="comment">
                                                                    <div class="comment-at-id" data-val="0"></div>
                                                                    <div class="comment-at-fid" data-val="0"></div>
                                                                    <div class="comment-at-video" data-val=""></div>
                                                                    <div class="author-photo">
                                                                        <picture>
                                                                            <source
                                                                                data-srcset="/sites/images/news/comment_no_picture.png"
                                                                                type="image/webp">
                                                                            <img
                                                                                src="/sites/images/news/comment_no_picture.png"
                                                                                alt="AgentART" width="70" height="70"/>
                                                                        </picture>
                                                                    </div>
                                                                    <div class="comment-right">
                                                                        <div class="author">
                                                                            @foreach($users as $user)
                                                                                @if($user->id==$comment->author_id)
                                                                            <a class="commentLogin"
                                                                               href="#">{{$user->name}}</a>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                        {{--                                                                <div class="created">вчера в 17:10, ред.</div>--}}
                                                                        <div class="commentBody">{{$comment->text}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach


                                                    </div>


                                                </div>
                                            </div>
                                            <div id="add-form-not-auth">
                                                <div class="picture"><img
                                                        src="/sites/all/themes/newtheme/images/comment_no_picture.png"/>
                                                </div>
                                                <div class="">
                                                    @guest
                                                        <div><a class="ctools-use-modal" href="/login">Авторизуйтесь</a>,
                                                            чтобы оставить свой комментарий
                                                        </div>
                                                    @else
                                                        <form class="node-kp_liga-form soccer-blogs-edit-form"
                                                              action="{{ route('comment_blogs.store') }}" method="post">
                                                            @csrf
                                                            <div>
                                                                <div
                                                                    class="form-item form-type-textfield form-item-title">
                                                                    <input class="maxlength form-text required"
                                                                           type="text"
                                                                           id="edit-title" name="text"
                                                                           value="{{ old('text') }}"
                                                                           size="60"
                                                                           maxlength="255" style="margin: -69px -8px 0
                                                                    0; height: 67px">
                                                                </div>
                                                                <br>
                                                                <input type="number" style="display:none;" name="blog_id"
                                                                       value="{{ $blog->id }}">
                                                                <br>
                                                                <input type="number" style="display:none;" name="author_id"
                                                                       value="{{ Auth::user()->id }}">
                                                            </div>
                                                            <div class="form-actions form-wrapper" id="edit-actions">
                                                                <input
                                                                    type="submit" id="edit-submit" name="save"
                                                                    value="Отправить"
                                                                    class="form-submit"/></div>
                                                        </form>
                                                    @endguest
                                                </div>
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
