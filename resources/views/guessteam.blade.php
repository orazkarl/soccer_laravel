{{--<title> {{$detail_news->name}}</title>--}}

@extends('layout')

@section('main')

    <div id="main_body">

                <div id="left" class="sidebar">
                    <div class="region region-left">
                        <br>
                        <h3 style="margin-left: 10px">Таблица рекордов</h3>

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
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{$highscore->name}}</td>
                                    <td>{{$highscore->score}}</td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>

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
                        <h1 class="site-title">Футбольная викторина</h1>
                        <div class="clearfix">
                            <div class="region region-content">
                                <div id="block-system-main" class="block block-system">
                                    <div class="content">
                                        @guest
                                            <div><a class="ctools-use-modal" href="/login">Авторизуйтесь</a>,
                                                чтобы играть игру
                                            </div>
                                            <br>
                                        @else
                                            <form action="{{ route('guess_team.store') }}" method="post">
                                                @csrf
                                                <h2>{{$question->question}}</h2>
                                                <input type="text" name="id" value="{{$question->id}}"
                                                       style="display: none">
                                                <h3>
                                                    <input type="radio" name="variant" value="{{$question->variant1}}">
                                                    {{$question->variant1}}
                                                </h3>
                                                <h3>
                                                    <input type="radio" name="variant" value="{{$question->variant2}}">
                                                    {{$question->variant2}}
                                                </h3>
                                                <h3>
                                                    <input type="radio" name="variant" value="{{$question->variant3}}">
                                                    {{$question->variant3}}
                                                </h3>
                                                <h3>
                                                    <input type="radio" name="variant" value="{{$question->variant4}}">
                                                    {{$question->variant4}}
                                                </h3>
                                                <br>
                                                <div class="form-actions form-wrapper" id="edit-actions">
                                                    <input type="submit" name="submit" value="Ответить"
                                                           class="form-submit">
                                                </div>

                                            </form>
                                        @endguest
                                            <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#center -->
        </div>
    </div>

@endsection


