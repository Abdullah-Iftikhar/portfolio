<div class="slim-sidebar">
    <label class="sidebar-label">Navigation</label>

    <ul class="nav nav-sidebar">
        <li class="sidebar-nav-item">
            <a href="{{route('dashboard')}}" class="sidebar-nav-link"><i class="icon ion-ios-home-outline"></i>
                {{ __('messages.dashboard') }} </a>
        </li>

        <li class="sidebar-nav-item">
            <a href="{{route('id1.index')}}" class="sidebar-nav-link"><i class="icon ion-ios-book-outline"></i>
                {{ __('messages.id_1') }}</a>
        </li>

        <li class="sidebar-nav-item">
            <a href="{{route('id2.index')}}" class="sidebar-nav-link"><i class="icon ion-ios-book-outline"></i>
                {{ __('messages.id_2') }}
            </a>
        </li>

        <li class="sidebar-nav-item">
            <a href="{{route('cost-for-run.index')}}" class="sidebar-nav-link"><i class="icon ion-ios-book-outline"></i>
                {{ __('messages.cost_for_run') }}</a>
        </li>

        <li class="sidebar-nav-item">
            <a href="{{route('amount-of-investment.index')}}" class="sidebar-nav-link"><i
                    class="icon ion-ios-book-outline"></i>
                {{ __('messages.amount_of_investment') }}</a>
        </li>

        <li class="sidebar-nav-item">
            <a href="{{route('operating-input.index')}}" class="sidebar-nav-link"><i
                    class="icon ion-ios-book-outline"></i>
                {{ __('messages.operating_input') }}
            </a>
        </li>

        {{--        <li class="sidebar-nav-item with-sub">--}}
        {{--            <a href="" class="sidebar-nav-link"><i class="icon ion-person"></i>Vendor</a>--}}
        {{--            <ul class="nav sidebar-nav-sub">--}}
        {{--                <li class="nav-sub-item"><a href="{{route('admin.vendor.list')}}" class="nav-sub-link">List</a></li>--}}
        {{--                <li class="nav-sub-item"><a href="{{route('admin.vendor.add')}}" class="nav-sub-link">Add</a></li>--}}
        {{--                <li class="nav-sub-item"><a href="{{route('admin.promo.package.list')}}" class="nav-sub-link">Promo--}}
        {{--                        Package</a></li>--}}
        {{--                <li class="nav-sub-item"><a href="{{route('admin.vendor.rep.list')}}" class="nav-sub-link">Rep--}}
        {{--                        Report</a></li>--}}

        {{--            </ul>--}}
        {{--        </li>--}}

        {{--        <li class="sidebar-nav-item">--}}
        {{--            <a href="{{route('admin.price.list')}}" class="sidebar-nav-link">--}}
        {{--                <i class="icon ion-document-text"></i>Price List</a>--}}
        {{--        </li>--}}
        @if(auth()->user()->role->name == 'Admin')
            <li class="sidebar-nav-item">
                <a href="{{route('users.list')}}" class="sidebar-nav-link">
                    <i class="icon ion-person-stalker"></i>
                    {{ __('messages.users') }}
                </a>
            </li>
        @endif


        <li class="sidebar-nav-item with-sub">
            <a href="" class="sidebar-nav-link"><i class="icon ion-settings"></i>{{ __('messages.settings') }}</a>
            <ul class="nav sidebar-nav-sub">
                <li class="nav-sub-item">
                    <a href="{{route('profile.settings')}}" class="nav-sub-link">{{ __('messages.profile') }}</a>
                </li>

                @if(auth()->user()->role->name == 'Admin')
                    <li class="nav-sub-item">
                        <a href="{{route('mail.setting')}}" class="nav-sub-link">{{ __('messages.mail_server') }}</a>
                    </li>

                    <li class="nav-sub-item">
                        <a href="{{route('permission.setting')}}" class="nav-sub-link">{{ __('messages.permission') }}</a>
                    </li>
                @endif
            </ul>
        </li>

    </ul>
</div>
