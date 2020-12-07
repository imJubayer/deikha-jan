<nav class="main-header navbar navbar-expand navbar-white navbar-light navColor">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">


        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell text-white"></i>
                <span
                    class="badge badge-danger navbar-badge text-white">{{(auth()->user()->unreadNotifications()->count()) === 0 ? "" : (auth()->user()->unreadNotifications()->count())}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span
                    class="dropdown-header">{{auth()->user()->unreadNotifications()->count()}} @lang('trans.notifications')</span>
                <div class="dropdown-divider"></div>
                @foreach(auth()->user()->notifications->take(4) as $key => $notification)
                    <a href="
{{--{{route('notification.mark.as.read', $notification->id)}}--}}
                        "
                       {{--                    <a href="{{$notification->data['route']}}"--}}
                       class="dropdown-item {{isset($notification->read_at) ? "" : 'bg-info'}}">
                        <p class="notificationCount">
                            {{$notification->data['data']}}
                            <span class="notificationTime"> {{showDiffForHuman($notification->created_at)}} </span>
                        </p>
                    </a>
                    <hr class="mt-2 mb-0">

                @endforeach
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">@lang('trans.see_all_notifications')</a>
            </div>
        </li>

        @guest

        @else

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white text-capitalize" href="#"
                   role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{Auth::User()->full_name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('profile',auth()->user()->id)}}">
                        @lang('trans.profile')
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        @lang('trans.logout')
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
        @endguest
    </ul>
</nav>
