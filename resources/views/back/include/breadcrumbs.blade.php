{{--@switch(request()->route()->getName())--}}
{{--    @case('dashboard')--}}
{{--    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>--}}
{{--    @break--}}
{{--    @case('id1.create')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.index')}}">ID 1</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Add Product--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('cost-for-run.create')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('cost-for-run.index')}}">Cost For Run</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Add Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('cost-for-run.edit')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('cost-for-run.index')}}">Cost For Run</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Edit Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('amount-of-investment.create')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('amount-of-investment.index')}}">Amount of investment</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Add Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('amount-of-investment.edit')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('amount-of-investment.index')}}">Amount of investment</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Edit Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('operating-input.create')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('operating-input.index')}}">Operating input</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Add Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('operating-input.edit')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('operating-input.index')}}">Operating input</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Edit Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('id2.addEdit')--}}
{{--    @case('id2.prices')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id2.index')}}">ID 2</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Add Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('id2.addEditUpdate')--}}
{{--    @case('id2.pricesUpdate')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id2.index')}}">ID 2</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Update Record--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('id1.edit')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.index')}}">ID 1</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Edit Product--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('id1.prices')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.index')}}">ID 1</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.prices',$product->id)}}">{{$product->title}}</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Prices--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('id1.addPrice')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.index')}}">ID 1</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.prices',$product->id)}}">{{$product->title}}</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Add Price--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @case('id1.editPrice')--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.index')}}">ID 1</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item">--}}
{{--        <a href="{{route('id1.prices',$product->id)}}">{{$product->title}}</a>--}}
{{--    </li>--}}
{{--    <li class="breadcrumb-item current">--}}
{{--        Edit Price--}}
{{--    </li>--}}
{{--    @break--}}
{{--    @default--}}
    <li class="breadcrumb-item active" aria-current="page">@yield('page_title')</li>
{{--    @break--}}
{{--@endswitch--}}
