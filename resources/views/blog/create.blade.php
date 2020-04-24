@extends('layout')

@section('main')
    <div id="main_body">
        <div id="left" class="sidebar">
            <div class="region region-left">
                <div id="block-new-desine-left-main-news" class="block block-new-desine">
                    <div class="content">
                        <div class="view view-news view-news-sidebar">
                            <div class="view-content">


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="right-bg">
            @include('tournaments')
            <div id="center">
                <div class="center-inner">
                    <div class="center-inner-content">
                        <div class="small-breadcrumb">
                            <span><a title="Главная" href="/"><span>Главная</span></a></span>
                            <img src="/sites/all/themes/newtheme/images/breadcrumb-separator.png"/>
                            <span><a title="Блоги" href="/blogs"><span>Блоги</span></a></span>
                        </div>
                        <h1 class="site-title">Добавить блог</h1>
                        <div class="clearfix">
                            <div class="region region-content">
                                <div id="block-system-main" class="block block-system">
                                    <div class="content">
                                        <form class="node-kp_liga-form soccer-blogs-edit-form"
                                              action="{{ route('blogs.store') }}" method="post"
                                              id="soccer-blogs-edit-form">
                                            @csrf
                                            @include('blog.partials.errors')
                                            <div>
                                                <div class="form-item form-type-textfield form-item-title">
                                                    <label for="edit-title">Название <span class="form-required"
                                                                                           title="Обязательно для заполнения.">*</span></label>
                                                    <input class="maxlength form-text required" type="text"
                                                           id="edit-title" name="name" value="{{ old('name') }}"
                                                           size="60"
                                                           maxlength="255"/>
                                                </div>
                                                <div class="form-item form-type-textarea form-item-description">
                                                    <label for="edit-description">Контент <span class="form-required"
                                                                                                title="Обязательно для заполнения.">*</span></label>
                                                    <div class="form-textarea-wrapper resizable">
                                                        <textarea
                                                            placeholder="Не более 512 символов" maxlength="512"
                                                            class="maxlength form-textarea required"
                                                            id="edit-description" name="content" cols="60"
                                                            rows="5">
                                                            {{ old('content') }}
                                                        </textarea></div>
                                                </div>

                                                <div class="form-actions form-wrapper" id="edit-actions"><input
                                                        type="submit" id="edit-submit" name="save" value="Создать"
                                                        class="form-submit"/></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#center -->
        </div>
    </div>


{{--        <form method="post" action="{{ route('blogs.store') }}">--}}

{{--            @csrf--}}
{{--            @include('blog.partials.errors')--}}

{{--            <div class="field">--}}
{{--                <label class="label">Title</label>--}}
{{--                <div class="control">--}}
{{--                    <input type="text" name="name" value="{{ old('name') }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="field">--}}
{{--                <label class="label">Content</label>--}}
{{--                <div class="control">--}}
{{--                    <textarea name="content" class="textarea" placeholder="Content" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="field">--}}
{{--                <div class="control">--}}
{{--                    <button type="submit" class="button is-link is-outlined">Publish</button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </form>--}}
@endsection
