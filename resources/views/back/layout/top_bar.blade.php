<div class="slim-header with-sidebar">
    <div class="container-fluid">
        <div class="slim-header-left">
            <h2 class="slim-logo"><a href="#"><small>Study Amazon</small></a></h2>
            <a href="" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
        </div><!-- slim-header-left -->
        <div class="slim-header-right">

            <div class="row mr-2">
                <select class="form-control changeLang">
                    <option value="cn" {{ session()->get('locale') == 'cn' ? 'selected' : '' }}>中文{{--{{__('messages.chinese')}}--}}</option>
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English{{--{{__('messages.english')}}--}}</option>
                </select>
            </div>

            <div class="dropdown dropdown-c">
                <a href="#" class="logged-user" data-toggle="dropdown">
                    <img src="{{asset('temp-assets/avatar.png')}}" alt="">
                    <span>{{auth()->user()->name}}</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <nav class="nav">
                        <a href="{{route('profile.settings')}}" class="nav-link">
                            <i class="icon ion-compose"></i>{{ __('messages.profile') }}
                        </a>

                        <span class="nav-link">
                            <form action="{{ route('logout') }}" method="POST" class="ml-1 nav-link main-logout-form w-100">
                                {{ csrf_field() }}
                                <button type="submit" href="{{route('logout')}}" class="form-button logout-btn w-100 logout-btn">
                                    {{ __('messages.logout') }}
                                </button>
                            </form>
                        </span>
                    </nav>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </div><!-- header-right -->
    </div><!-- container-fluid -->
</div>
