@extends('panel.layout.main')

@section('title',__('messages.amount_of_investment'))
@section('page_title',__('messages.amount_of_investment'))

@section('body')
    <div class="section-wrapper">
        <section class="row w-100 justify-content-end ml-auto">
            <a href="{{route('amountOfInvestment.pdf')}}" class="col-md-2">
                <button class="btn btn-primary btn-block  ml-auto mg-b-10">{{__('messages.export')}} <i
                        class="fa fa-file-pdf-o pl-1"></i>
                </button>
            </a>
            <a href="{{route('amount-of-investment.create')}}" class="col-md-2">
                <button class="btn btn-primary btn-block ml-auto mg-b-10">{{__('messages.add_record')}}</button>
            </a>
        </section>
        <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
                <thead>
                <tr class="text-center white-space-nowrap">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    {{--                    <th>{{__('messages.group_id')}}</th>--}}
                    <th>{{__('messages.product_name')}}</th>
                    <th>{{__('messages.three_scenarios')}}</th>
                    <th>{{__('messages.how_many_days')}}</th>
                    <th>{{__('messages.cost_for_test_run')}}</th>
                    <th>{{__('messages.cost_for_investment')}}</th>
                    <th>{{__('messages.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @if($amountOfInvestment->count())
                    <tr class="text-center">
                        <th rowspan="{{$amountOfInvestment->where('type','air')->count()}}" class="white-space-nowrap">
                            {{__('messages.air_fryer_air')}}
                        </th>
                        @foreach($amountOfInvestment->where('type','air') as $key => $row)
{{--                            @dd($row, $row->costForRun, $row->costForRun->secondSheet->product->title)--}}
                            @if($loop->index > 0) @break @endif
                            {{--                            <th scope="row">{{$row->group_id}}</th>--}}
                            <td>{{$row->costForRun->secondSheet->product->title ?? ''}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->no_of_days}}</td>
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cost_of_investment}}</td>
                            <td>
                                <a href="{{route('amount-of-investment.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related ocean record will be deleted as well.')"
                                   href="{{route('amountOfInvestment.destroy',$row->group_id)}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        @endforeach
                    </tr>

                    @foreach($amountOfInvestment->where('type','air') as $key => $row)
                        @if($loop->index == 0) @continue @endif
                        <tr class="text-center category-records">
                            {{--                            <th scope="row">{{$row->group_id}}</th>--}}
                            <td>{{$row->costForRun->secondSheet->product->title ?? ''}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->no_of_days}}</td>
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cost_of_investment}}</td>
                            <td>
                                <a href="{{route('amount-of-investment.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related ocean record will be deleted as well.')"
                                   href="{{route('amountOfInvestment.destroy',$row->group_id)}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    <tr class="text-center">
                        <th rowspan="{{$amountOfInvestment->where('type','ocean')->count()}}"
                            class="white-space-nowrap">
                            {{__('messages.air_fryer_ocean')}}
                        </th>
                        @foreach($amountOfInvestment->where('type','ocean') as $key => $row)
                            @if($loop->index > 0) @break @endif
                            {{--                            <th scope="row">{{$row->group_id}}</th>--}}
                            <td>{{$row->costForRun->secondSheet->product->title ?? ''}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->no_of_days}}</td>
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cost_of_investment}}</td>
                            <td>
                                <a href="{{route('amount-of-investment.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related air record will be deleted as well.')"
                                   href="{{route('amountOfInvestment.destroy',$row->group_id)}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        @endforeach
                    </tr>

                    @foreach($amountOfInvestment->where('type','ocean') as $key => $row)
                        @if($loop->index == 0) @continue @endif
                        <tr class="text-center category-records">
                            {{--                            <th scope="row">{{$row->group_id}}</th>--}}
                            <td>{{$row->costForRun->secondSheet->product->title ?? ''}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->no_of_days}}</td>
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cost_of_investment}}</td>
                            <td>
                                <a href="{{route('amount-of-investment.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related air record will be deleted as well.')"
                                   href="{{route('amountOfInvestment.destroy',$row->group_id)}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                        <td class="bg-gray " colspan="7">{{__('messages.no_data_found')}}</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <section class="mt-3 ">
                {{$amountOfInvestment->links()}}
            </section>
        </div><!-- bd -->
    </div>
@endsection

@push('script-section')
@endpush
