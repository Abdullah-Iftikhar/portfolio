<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <title>{{__('messages.operating_input')}}</title>
    <style>
        @font-face {
            font-family: 'heiti';
            font-style: normal;
            font-weight: normal;
            src: local('heiti'), local('heiti'), url("{{ storage_path('fonts/heiti.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'heiti';
            font-style: normal;
            font-weight: bold;
            src: local('heiti'), local('heiti'), url("{{ storage_path('fonts/heiti.ttf') }}") format('truetype');
        }

        body,
        td,
        tr,
        div,
        span {
            font-family: 'heiti';
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: small;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            /*background-color: #dddddd;*/
        }
    </style>
</head>
<body>
<div class="section-wrapper">
    <div class="table-responsive">
        <h3 class="" style="text-align: center">{{__('messages.cost_for_run')}}</h3>
        <table class="table table-sm table-dashboard data-table no-wrap mb-0 fs--1 w-100" id="">
            <thead>
            <tr class="text-center">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center white-space-nowrap">
                <th>{{__('messages.mode_of_transport')}}</th>
                <th>{{__('messages.product_name')}}</th>
                <th>{{__('messages.selling_price')}}</th>
                <th>{{__('messages.three_scenarios')}}</th>
                <th>{{__('messages.cost_for_test_run')}}</th>
            </tr>
            @if($costForRun->count())
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','air')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_air')}})
                    </th>
                    @foreach($costForRun->where('type','air') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->secondSheet->product->title ?? ''}}</td>
                        <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                        <td class="white-space-nowrap">{{$row->scenarios}}</td>
                        <td>{{$row->cost_for_test_run}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','air') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->secondSheet->product->title ?? ''}}</td>
                        <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                        <td class="white-space-nowrap">{{$row->scenarios}}</td>
                        <td>{{$row->cost_for_test_run}}</td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','ocean')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_ocean')}})
                    </th>
                    @foreach($costForRun->where('type','ocean') as $key => $row)
                        @if($loop->index > 0) @break @endif
                            <td>{{$row->secondSheet->product->title ?? ''}}</td>
                            <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                        <td class="white-space-nowrap">{{$row->scenarios}}</td>
                        <td>{{$row->cost_for_test_run}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','ocean') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->secondSheet->product->title ?? ''}}</td>
                        <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                        <td class="white-space-nowrap">{{$row->scenarios}}</td>
                        <td>{{$row->cost_for_test_run}}</td>
                    </tr>
                @endforeach

                <tr class="text-center white-space-nowrap">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    <th>{{__('messages.how_many_days')}}</th>
                    <th>{{__('messages.sample_cost')}}</th>
                    <th>{{__('messages.photo_cost')}}</th>
                    <th>{{__('messages.no_of_measurements_head')}}</th>
                </tr>
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','air')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_air')}})
                    </th>
                    @foreach($costForRun->where('type','air') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->how_many_days}}</td>
                        <td>{{$row->sample_cost}}</td>
                        <td>{{$row->photo_cost}}</td>
                        <td>{{$row->no_of_measurement}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','air') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->how_many_days}}</td>
                        <td>{{$row->sample_cost}}</td>
                        <td>{{$row->photo_cost}}</td>
                        <td>{{$row->no_of_measurement}}</td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','ocean')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_ocean')}})
                    </th>
                    @foreach($costForRun->where('type','ocean') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->how_many_days}}</td>
                        <td>{{$row->sample_cost}}</td>
                        <td>{{$row->photo_cost}}</td>
                        <td>{{$row->no_of_measurement}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','ocean') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->how_many_days}}</td>
                        <td>{{$row->sample_cost}}</td>
                        <td>{{$row->photo_cost}}</td>
                        <td>{{$row->no_of_measurement}}</td>
                    </tr>
                @endforeach

                <tr class="text-center white-space-nowrap">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    <th>{{__('messages.copywriting_cost')}}</th>
                    <th>{{__('messages.store_rent')}}</th>
                    <th>{{__('messages.purchase_qty_for_a_test_run')}}</th>
                    <th>{{__('messages.adv_cost')}}</th>
                </tr>
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','air')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_air')}})
                    </th>
                    @foreach($costForRun->where('type','air') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->copywriting_cost}}</td>
                        <td>{{$row->store_rent}}</td>
                        <td>{{$row->qty_test_run}}</td>
                        <td>{{$row->advertising_cost}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','air') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->copywriting_cost}}</td>
                        <td>{{$row->store_rent}}</td>
                        <td>{{$row->qty_test_run}}</td>
                        <td>{{$row->advertising_cost}}</td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','ocean')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_ocean')}})
                        {{__('messages.product')}} ({{__('messages.air_fryer_ocean')}})
                    </th>
                    @foreach($costForRun->where('type','ocean') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->copywriting_cost}}</td>
                        <td>{{$row->store_rent}}</td>
                        <td>{{$row->qty_test_run}}</td>
                        <td>{{$row->advertising_cost}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','ocean') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->copywriting_cost}}</td>
                        <td>{{$row->store_rent}}</td>
                        <td>{{$row->qty_test_run}}</td>
                        <td>{{$row->advertising_cost}}</td>
                    </tr>
                @endforeach

                <tr class="text-center white-space-nowrap">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    <th>{{__('messages.delivery_cash')}}</th>
                    <th>{{__('messages.vp_head_picking_cost')}}</th>
                    <th>{{__('messages.average_daily_adv_cost')}}</th>
                    <th>{{__('messages.rating_cost')}}</th>
                </tr>
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','air')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_air')}})
                    </th>
                    @foreach($costForRun->where('type','air') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->delivery_cash}}</td>
                        <td>{{$row->vp_head_picking_cost}}</td>
                        <td>{{$row->average_daily_advertising_cost}}</td>
                        <td>{{$row->rating_cost}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','air') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->delivery_cash}}</td>
                        <td>{{$row->vp_head_picking_cost}}</td>
                        <td>{{$row->average_daily_advertising_cost}}</td>
                        <td>{{$row->rating_cost}}</td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','ocean')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_ocean')}})
                    </th>
                    @foreach($costForRun->where('type','ocean') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->delivery_cash}}</td>
                        <td>{{$row->vp_head_picking_cost}}</td>
                        <td>{{$row->average_daily_advertising_cost}}</td>
                        <td>{{$row->rating_cost}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','ocean') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->delivery_cash}}</td>
                        <td>{{$row->vp_head_picking_cost}}</td>
                        <td>{{$row->average_daily_advertising_cost}}</td>
                        <td>{{$row->rating_cost}}</td>
                    </tr>
                @endforeach

                <tr class="text-center white-space-nowrap">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    <th>{{__('messages.cost_of_selling_half_price')}}</th>
                    <th>{{__('messages.half_price_platform_cost')}}</th>
                    <th>{{__('messages.remaining_inventory')}}</th>
                    <th>{{__('messages.real_orders')}}</th>
                </tr>
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','air')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_air')}})
                    </th>
                    @foreach($costForRun->where('type','air') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->cost_of_selling_at_half_price}}</td>
                        <td>{{$row->half_price_platform_cost}}</td>
                        <td>{{$row->remaining_inventory}}</td>
                        <td>{{$row->real_orders}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','air') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->cost_of_selling_at_half_price}}</td>
                        <td>{{$row->half_price_platform_cost}}</td>
                        <td>{{$row->remaining_inventory}}</td>
                        <td>{{$row->real_orders}}</td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','ocean')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_ocean')}})
                    </th>
                    @foreach($costForRun->where('type','ocean') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->cost_of_selling_at_half_price}}</td>
                        <td>{{$row->half_price_platform_cost}}</td>
                        <td>{{$row->remaining_inventory}}</td>
                        <td>{{$row->real_orders}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','ocean') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->cost_of_selling_at_half_price}}</td>
                        <td>{{$row->half_price_platform_cost}}</td>
                        <td>{{$row->remaining_inventory}}</td>
                        <td>{{$row->real_orders}}</td>
                    </tr>
                @endforeach

                <tr class="text-center white-space-nowrap">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    <th>{{__('messages.half_price_orders')}}</th>
                    <th>{{__('messages.delivery_volume')}}</th>
                    <th>{{__('messages.staff_salary')}}</th>
                </tr>

                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','air')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_air')}})
                    </th>
                    @foreach($costForRun->where('type','air') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->half_price_orders}}</td>
                        <td>{{$row->delivery_volume}}</td>
                        <td>{{$row->staff_salary}}</td>
                        <td></td>
                    @endforeach
                </tr>

                @foreach($costForRun->where('type','air') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->half_price_orders}}</td>
                        <td>{{$row->delivery_volume}}</td>
                        <td>{{$row->staff_salary}}</td>
                    </tr>
                @endforeach

                <tr class="text-center">
                    <th rowspan="{{$costForRun->where('type','ocean')->count()}}" class="white-space-nowrap">
                        {{__('messages.product')}} ({{__('messages.air_fryer_ocean')}})
                    </th>
                    @foreach($costForRun->where('type','ocean') as $key => $row)
                        @if($loop->index > 0) @break @endif
                        <td>{{$row->half_price_orders}}</td>
                        <td>{{$row->delivery_volume}}</td>
                        <td>{{$row->staff_salary}}</td>
                    @endforeach
                </tr>
                @foreach($costForRun->where('type','ocean') as $key => $row)
                    @if($loop->index == 0) @continue @endif
                    <tr class="text-center category-records">
                        <td>{{$row->half_price_orders}}</td>
                        <td>{{$row->delivery_volume}}</td>
                        <td>{{$row->staff_salary}}</td>
                    </tr>
                @endforeach
            @else
                <tr class="text-center">
                    <td class="bg-gray " colspan="24">{{__('messages.no_data_found')}}</td>
                </tr>
            @endif
            </tbody>
        </table>

    </div><!-- bd -->
</div>
</body>
</html>
