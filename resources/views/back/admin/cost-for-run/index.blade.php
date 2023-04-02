@extends('panel.layout.main')

@section('title',__('messages.cost_for_run'))
@section('page_title',__('messages.cost_for_run'))

@push('style-section')
    <style>
        .table-responsive {
            overflow: hidden;
            padding: 0;
            margin: 0;
            table-layout: fixed;
            width: 100%;
            display: table;
        }

        .table-responsive .table {
            display: block;
            overflow: scroll;
            overflow-y: hidden !important;
        }
    </style>
@endpush

@section('body')
    <div class="section-wrapper">
        <section class="row w-100 justify-content-end ml-auto">
            <a href="{{route('costForRun.pdf')}}" class="col-md-2">
                <button class="btn btn-primary btn-block  ml-auto mg-b-10">{{__('messages.export')}} <i
                        class="fa fa-file-pdf-o pl-1"></i>
                </button>
            </a>
            <a href="{{route('cost-for-run.create')}}" class="col-md-2">
                <button class="btn btn-primary btn-block ml-auto mg-b-10">{{__('messages.add_record')}}</button>
            </a>
        </section>
        <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
                <thead>
                <tr class="text-center white-space-nowrap">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    <th>{{__('messages.product_name')}}</th>
                    <th>{{__('messages.selling_price')}}</th>
                    {{--                    <th>{{__('messages.group_id')}}</th>--}}
                    <th>{{__('messages.cost_for_test_run')}}</th>
                    <th>{{__('messages.cash_for_test_run')}}</th>
                    <th>{{__('messages.three_scenarios')}}</th>
                    <th>{{__('messages.how_many_days')}}</th>
                    <th>{{__('messages.sample_cost')}}</th>
                    <th>{{__('messages.photo_cost')}}</th>
                    <th>{{__('messages.copywriting_cost')}}</th>
                    <th>{{__('messages.store_rent')}}</th>
                    <th>{{__('messages.purchase_qty_for_a_test_run')}}</th>
                    <th>{{__('messages.no_of_measurements_head')}}</th>
                    <th>{{__('messages.delivery_cash')}}</th>
                    <th>{{__('messages.vp_head_picking_cost')}}</th>
                    <th>{{__('messages.average_daily_adv_cost')}}</th>
                    <th>{{__('messages.adv_cost')}}</th>
                    <th>{{__('messages.rating_cost')}}</th>
                    <th>{{__('messages.cost_of_selling_half_price')}}</th>
                    <th>{{__('messages.half_price_platform_cost')}}</th>
                    <th>{{__('messages.remaining_inventory')}}</th>
                    <th>{{__('messages.real_orders')}}</th>
                    <th>{{__('messages.half_price_orders')}}</th>
                    <th>{{__('messages.delivery_volume')}}</th>
                    <th>{{__('messages.staff_salary')}}</th>
                    <th>{{__('messages.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @if($costForRun->count())
                    <tr class="text-center">
                        <th rowspan="{{$costForRun->where('type','air')->count()}}" class="white-space-nowrap">
                            {{__('messages.air_fryer_air')}}
                        </th>
                        @foreach($costForRun->where('type','air') as $key => $row)
                            @if($loop->index > 0) @break @endif
                            <td>{{$row->secondSheet->product->title ?? ''}}</td>
                            <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                            {{--                            <td>{{$row->group_id}}</td>--}}
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cash_for_test_run}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->how_many_days}}</td>
                            <td>{{$row->sample_cost}}</td>
                            <td>{{$row->photo_cost}}</td>
                            <td>{{$row->copywriting_cost}}</td>
                            <td>{{$row->store_rent}}</td>
                            <td>{{$row->qty_test_run}}</td>
                            <td>{{$row->no_of_measurement}}</td>
                            <td>{{$row->delivery_cash}}</td>
                            <td>{{$row->vp_head_picking_cost}}</td>
                            <td>{{$row->average_daily_advertising_cost}}</td>
                            <td>{{$row->advertising_cost}}</td>
                            <td>{{$row->rating_cost}}</td>
                            <td>{{$row->cost_of_selling_at_half_price}}</td>
                            <td>{{$row->half_price_platform_cost}}</td>
                            <td>{{$row->remaining_inventory}}</td>
                            <td>{{$row->real_orders}}</td>
                            <td>{{$row->half_price_orders}}</td>
                            <td>{{$row->delivery_volume}}</td>
                            <td>{{$row->staff_salary}}</td>
                            <td>
                                <a href="{{route('cost-for-run.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related ocean record will be deleted as well.')"
                                   href="{{route('costForRun.destroy',[$row->group_id])}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        @endforeach
                    </tr>

                    @foreach($costForRun->where('type','air') as $key => $row)
                        @if($loop->index == 0) @continue @endif
                        <tr class="text-center category-records">
                            <td>{{$row->secondSheet->product->title ?? ''}}</td>
                            <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                            {{--                            <th>{{$row->group_id}}</th>--}}
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cash_for_test_run}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->how_many_days}}</td>
                            <td>{{$row->sample_cost}}</td>
                            <td>{{$row->photo_cost}}</td>
                            <td>{{$row->copywriting_cost}}</td>
                            <td>{{$row->store_rent}}</td>
                            <td>{{$row->qty_test_run}}</td>
                            <td>{{$row->no_of_measurement}}</td>
                            <td>{{$row->delivery_cash}}</td>
                            <td>{{$row->vp_head_picking_cost}}</td>
                            <td>{{$row->average_daily_advertising_cost}}</td>
                            <td>{{$row->advertising_cost}}</td>
                            <td>{{$row->rating_cost}}</td>
                            <td>{{$row->cost_of_selling_at_half_price}}</td>
                            <td>{{$row->half_price_platform_cost}}</td>
                            <td>{{$row->remaining_inventory}}</td>
                            <td>{{$row->real_orders}}</td>
                            <td>{{$row->half_price_orders}}</td>
                            <td>{{$row->delivery_volume}}</td>
                            <td>{{$row->staff_salary}}</td>
                            <td>
                                <a href="{{route('cost-for-run.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related ocean record will be deleted as well.')"
                                   href="{{route('costForRun.destroy',[$row->group_id])}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    <tr class="text-center">
                        <th rowspan="{{$costForRun->where('type','ocean')->count()}}" class="white-space-nowrap">
                           {{__('messages.air_fryer_ocean')}}
                        </th>
                        @foreach($costForRun->where('type','ocean') as $key => $row)
                            @if($loop->index > 0) @break @endif
                            <td>{{$row->secondSheet->product->title ?? ''}}</td>
                            <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                            {{--                            <th>{{$row->group_id}}</th>--}}
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cash_for_test_run}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->how_many_days}}</td>
                            <td>{{$row->sample_cost}}</td>
                            <td>{{$row->photo_cost}}</td>
                            <td>{{$row->copywriting_cost}}</td>
                            <td>{{$row->store_rent}}</td>
                            <td>{{$row->qty_test_run}}</td>
                            <td>{{$row->no_of_measurement}}</td>
                            <td>{{$row->delivery_cash}}</td>
                            <td>{{$row->vp_head_picking_cost}}</td>
                            <td>{{$row->average_daily_advertising_cost}}</td>
                            <td>{{$row->advertising_cost}}</td>
                            <td>{{$row->rating_cost}}</td>
                            <td>{{$row->cost_of_selling_at_half_price}}</td>
                            <td>{{$row->half_price_platform_cost}}</td>
                            <td>{{$row->remaining_inventory}}</td>
                            <td>{{$row->real_orders}}</td>
                            <td>{{$row->half_price_orders}}</td>
                            <td>{{$row->delivery_volume}}</td>
                            <td>{{$row->staff_salary}}</td>
                            <td>
                                <a href="{{route('cost-for-run.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related air record will be deleted as well.')"
                                   href="{{route('costForRun.destroy',[$row->group_id])}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        @endforeach
                    </tr>

                    @foreach($costForRun->where('type','ocean') as $key => $row)
                        @if($loop->index == 0) @continue @endif
                        <tr class="text-center category-records">
                            <td>{{$row->secondSheet->product->title ?? ''}}</td>
                            <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                            {{--                            <th>{{$row->group_id}}</th>--}}
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cash_for_test_run}}</td>
                            <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->how_many_days}}</td>
                            <td>{{$row->sample_cost}}</td>
                            <td>{{$row->photo_cost}}</td>
                            <td>{{$row->copywriting_cost}}</td>
                            <td>{{$row->store_rent}}</td>
                            <td>{{$row->qty_test_run}}</td>
                            <td>{{$row->no_of_measurement}}</td>
                            <td>{{$row->delivery_cash}}</td>
                            <td>{{$row->vp_head_picking_cost}}</td>
                            <td>{{$row->average_daily_advertising_cost}}</td>
                            <td>{{$row->advertising_cost}}</td>
                            <td>{{$row->rating_cost}}</td>
                            <td>{{$row->cost_of_selling_at_half_price}}</td>
                            <td>{{$row->half_price_platform_cost}}</td>
                            <td>{{$row->remaining_inventory}}</td>
                            <td>{{$row->real_orders}}</td>
                            <td>{{$row->half_price_orders}}</td>
                            <td>{{$row->delivery_volume}}</td>
                            <td>{{$row->staff_salary}}</td>
                            <td>
                                <a href="{{route('cost-for-run.edit',[$row->group_id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure? Their related air record will be deleted as well.')"
                                   href="{{route('costForRun.destroy',[$row->group_id])}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                        <td class="bg-gray " colspan="24">{{__('messages.no_data_found')}}</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <section class="mt-3 ">
                {{$costForRun->links()}}
            </section>
        </div><!-- bd -->
    </div>
@endsection
