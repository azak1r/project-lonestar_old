<nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="img/logo.png" alt="">
            </a>
        </div><!--navbar-header-->

        <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-hover ">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Blog <span class="caret"></span> <span class="label">news</span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li><a href="blog-1.html">Blog Style 1</a>
                            </li>
                            <li><a href="blog-2.html">Blog Style 2</a>
                            </li>
                            <li><a href="blog-3.html">Blog Style 3</a>
                            </li>
                        </ul>
                        <ul role="menu">
                            <li><a href="blog-post-1.html">Blog Post 1</a>
                            </li>
                            <li><a href="blog-post-2.html">Blog Post 2</a>
                            </li>
                            <li><a href="blog-post-3.html">Blog Post 3</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">
                        Forum <span class="label">Community</span>
                    </a>
                </li>
                <li class="dropdown dropdown-hover">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Features <span class="caret"></span> <span class="label">Tools</span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li><a href="/bui">Buy Up Indexes</a>
                            </li>
                            <li><a href="#">Forums</a>
                            </li>
                            <li><a href="#">Forums Topics</a>
                            </li>
                            <li><a href="#">Single Topic</a>
                            </li>
                            <li><a href="#">Components</a>
                            </li>
                        </ul>
                        <ul role="menu">
                            <li><a href="#">Widgets <span class="badge bg-default">New</span></a>
                            </li>
                            <li><a href="#">Contact Us</a>
                            </li>
                            <li><a href="#">Search</a>
                            </li>
                            <li><a href="#">Login</a>
                            </li>
                            <li class="dropdown dropdown-submenu pull-right">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More..</a>
                                <div class="dropdown-menu" id="style-switcher">
                                    <ul role="menu">
                                        <li id="dark"><a href="style-switcher.php?style=dark">Dark</a></li>
                                        <li><a href="#!">3rd level</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>{{ link_to_route('frontend.macros', trans('navs.frontend.macros')) }}</li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (config('locale.status') && count(config('locale.languages')) > 1)
                    <li class="dropdown dropdown-hover">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ trans('menus.language-picker.language') }}
                            <span class="caret"></span>
                        </a>

                        @include('includes.partials.lang')
                    </li>
                @endif

                @if (access()->guest())
                    <li>{{ link_to('login', trans('navs.frontend.login')) }}</li>
                    <li>{{ link_to('register', trans('navs.frontend.register')) }}</li>
                @else
                        <li class="dropdown dropdown-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ access()->user()->name }}
                                <span class="caret"></span>
                        </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li>{{ link_to_route('frontend.user.dashboard', trans('navs.frontend.dashboard')) }}</li>

                            @if (access()->user()->canChangePassword())
                                <li>{{ link_to_route('auth.password.change', trans('navs.frontend.user.change_password')) }}</li>
                            @endif

                            @permission('view-backend')
                            <li>{{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration')) }}</li>
                            @endauth

                            <li>{{ link_to_route('auth.logout', trans('navs.general.logout')) }}</li>
                        </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>