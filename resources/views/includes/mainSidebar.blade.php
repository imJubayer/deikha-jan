<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebarColor">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('/asset/img/logo.png')}}" alt="T4T Logo"
             href="{{route('home')}}"
             class="brand-image img-circle elevation-3"
             style="">
        <span class="brand-text font-weight-light">Tools 4 Trade</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar client panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->avatar}}" class="img-circle elevation-2 profile-avatar-style"
                     alt="User Image">
            </div>
            <div class="info">
                @auth
                    <a href="{{route('profile',auth()->user()->id)}}"
                       class="d-block text-capitalize">{{Auth::User()->full_name}}</a>
                @endauth
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            @lang('trans.home')
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>

                @can('access-course')
                    <li class="nav-item">
                        <a href="{{route('courses.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                @lang('trans.courses')
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                    </li>
                @endcan

                @can('access-social-trading-forum')
                    <li class="nav-item">
                        <a href="{{route('socialTradingForums.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>
                                @lang('trans.social_trading')
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                    </li>
                @endcan

                @can('access-ea')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                @lang('trans.ea')
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('eas.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        @lang('trans.ea_management')
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services.index') }}" class="nav-link act ive">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        @lang('trans.service')
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan



                @can('access-daily-forex-signal')

                    <li class="nav-item">
                        <a href="{{route('daily-forex-signals.index')}}" class="nav-link">
                            <i class="fas fa-wave-square"></i>
                            <p>
                                @lang('trans.daily_forex_signal')
                            </p>
                        </a>
                    </li>
                @endcan

                @can('access-client')
                    <li class="nav-item">
                        <a href="{{route('clients.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-user-friends"></i>
                            <p>@lang('trans.client')</p>
                        </a>
                    </li>
                @endcan

                @can('access-post')
                    <li class="nav-item">
                        <a href="{{route('posts.index')}}" class="nav-link">
                            <i class="fas fa-pen-alt nav-icon"></i>
                            <p>
                                @lang('trans.post')
                            </p>
                        </a>
                    </li>
                @endcan

                @can('access-news')
                    <li class="nav-item">
                        <a href="{{route('news.index')}}" class="nav-link">
                            <i class="fa fa-newspaper nav-icon" aria-hidden="true"></i>
                            <p>
                                @lang('trans.news')
                            </p>
                        </a>
                    </li>
                @endcan
                @can('access-faq')
                    <li class="nav-item">
                        <a href="{{route('faqs.index')}}" class="nav-link">
                            <i class="fas fa-question-circle nav-icon"></i>
                            <p>
                                @lang('trans.faqs')
                            </p>
                        </a>
                    </li>
                @endcan

            </ul>
        </nav>

    </div>
</aside>
