<div id="header">
    <div class="logo">
        <a href="/"><img width="162" height="34" src="/sites/all/themes/newtheme/images/soccer-logo-690.svg"
                        alt="Футбол" title="Футбол"/></a>
    </div>
    <div class="region region-header">
        <div id="block-new-desine-top-matches" class="block block-new-desine">
{{--            <div class="content">--}}
{{--                <div class="slider" start="0" total="8">--}}
{{--                    <div class="s-imgs">--}}
{{--                        <div class="s-imgs-in" style="width: 784px;">--}}
{{--                            <div class="s-slide s-slide-0" style="" num="1">--}}
{{--                                <div class="match-status-bar"--}}
{{--                                     style="width: 100%;background: #1d9a52;"></div><!--[if lt IE 8]><!-->--}}
{{--                                <a href="#" class="mlink">--}}
{{--                                    <object type="soccer/link"><!--<![endif]-->--}}
{{--                                        <div class="match match-1172027" mid="1172027">--}}
{{--                                            <div class="m-status black">--}}
{{--                                                <span class="m-timer">20:30</span> <span--}}
{{--                                                    class="mss">05 АПР</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="teams">--}}
{{--                                                <div class="t-name h">--}}
{{--                                                    <div class="tlogo">--}}
{{--                                                        <picture>--}}
{{--                                                            <source--}}
{{--                                                                data-srcset="sites/default/files/styles/new_desine_14_14_webp/public/teams-logo-mini/585452.png?itok=3v8cyYiB"--}}
{{--                                                                type="image/webp">--}}
{{--                                                            <img class="lazyload"--}}
{{--                                                                 alt="Логотип футбольный клуб Белшина"--}}
{{--                                                                 title="Логотип футбольный клуб Белшина"--}}
{{--                                                                 width="14" height="14"--}}
{{--                                                                 src="/sites/all/themes/newtheme/images/ball.svg"--}}
{{--                                                                 data-src="sites/default/files/styles/new_desine_14_14/public/teams-logo-mini/585452.png?itok=L5IppBW-">--}}
{{--                                                        </picture>--}}
{{--                                                        <noscript><img alt="Логотип футбольный клуб Белшина"--}}
{{--                                                                       title="Логотип футбольный клуб Белшина"--}}
{{--                                                                       width="14"--}}
{{--                                                                       src="sites/default/files/styles/new_desine_14_14/public/teams-logo-mini/585452.png?itok=L5IppBW-">--}}
{{--                                                        </noscript>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tname"><a class="tlink" href="/belshina"--}}
{{--                                                                          title="Белшина">Бел</a></div>--}}
{{--                                                    <div class="sc">-</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="t-name v">--}}
{{--                                                    <div class="tlogo">--}}
{{--                                                        <picture>--}}
{{--                                                            <source--}}
{{--                                                                data-srcset="/sites/default/files/styles/new_desine_14_14_webp/public/teams-logo-mini/586628.png?itok=BD0qa-8u"--}}
{{--                                                                type="image/webp">--}}
{{--                                                            <img class="lazyload"--}}
{{--                                                                 alt="Логотип футбольный клуб Городея"--}}
{{--                                                                 title="Логотип футбольный клуб Городея"--}}
{{--                                                                 width="14" height="14"--}}
{{--                                                                 src="/sites/all/themes/newtheme/images/ball.svg"--}}
{{--                                                                 data-src="/sites/default/files/styles/new_desine_14_14/public/teams-logo-mini/586628.png?itok=2ccizAx_">--}}
{{--                                                        </picture>--}}
{{--                                                        <noscript><img alt="Логотип футбольный клуб Городея"--}}
{{--                                                                       title="Логотип футбольный клуб Городея"--}}
{{--                                                                       width="14"--}}
{{--                                                                       src="/sites/default/files/styles/new_desine_14_14/public/teams-logo-mini/586628.png?itok=2ccizAx_">--}}
{{--                                                        </noscript>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tname"><a class="tlink"--}}
{{--                                                                          href="/teams/2694.shtml"--}}
{{--                                                                          title="Городея">Гор</a></div>--}}
{{--                                                    <div class="sc">-</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--[if lt IE 8]><!--></object>--}}
{{--                                </a><!--<![endif]-->--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div id="block-new-desine-top-user-menu" class="block block-new-desine">

            <div class="content">
                <ul>
                    <li class="search"><img src="/sites/all/themes/newtheme/images/search.png" title="Поиск"
                                            alt="Поиск"/></li>
					@guest
						<li class="user-login">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
						</li>
{{--						@if (Route::has('register'))--}}
{{--							<li class="user-login">--}}
{{--								<a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>--}}
{{--							</li>--}}
{{--                        @endif--}}
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Выход') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
                </ul>
            </div>
        </div>

    </div>
    <div class="clear"></div>
</div><!-- header -->

<div class="clear"></div>
<div id="logomenu">
    <div class="region region-logomenu">
        <div id="block-block-104" class="block block-block">
            <div class="content">
                <ul class="main-menu top-level">
                    <li class="col-3 has-second top-li">
                        <div class="menu-item top-level"><a href="#" style="color: white">Новости</a></div>
                    </li>
                    <li class="col-3 has-second top-li">
                        <div class="menu-item top-level"><a href="#" style="color: white">Матчи</a></div>
                    </li>
                    <li class="col-3 has-second top-li">
                        <div class="menu-item top-level"><a href="#" style="color: white">Турниры</a></div>
                    </li>
                    <li class="col-3 has-second top-li">
                        <div class="menu-item top-level"><a href="/blogs/" style="color: white">Блоги</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
