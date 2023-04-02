<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <title>{{__('messages.amount_of_investment')}}</title>
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
    span  {
        font-family: 'heiti';
    }
    table {
        /*font-family: arial, sans-serif;*/
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
    }
</style>
</head>
<body>
    <div class="section-wrapper">
        <div class="table-responsive">
            <h3 class="" style="text-align: center">{{__('messages.amount_of_investment')}}</h3>
            <table class="table table-sm table-dashboard data-table no-wrap mb-0 fs--1 w-100" id="">
                <thead>
                <tr class="text-center">
                    <th>{{__('messages.mode_of_transport')}}</th>
                    {{--                    <th>{{__('messages.group_id')}}</th>--}}
                    <th>{{__('messages.product_name')}}</th>
                    <th>{{__('messages.three_scenarios')}}</th>
                    <th>{{__('messages.how_many_days')}}</th>
                    <th>{{__('messages.cost_for_test_run')}}</th>
                    <th>{{__('messages.cost_for_investment')}}</th>
                </tr>

                </thead>
                <tbody>
                @if($amountOfInvestment->count())
                    <tr class="text-center">
                        <th rowspan="{{$amountOfInvestment->where('type','air')->count()}}" class="white-space-nowrap">
                            {{__('messages.air_fryer_air')}}
                        </th>
                        @foreach($amountOfInvestment->where('type','air') as $key => $row)
                            @if($loop->index > 0) @break @endif
{{--                            <th scope="row">{{$row->group_id}}</th>--}}
                                <td>{{$row->costForRun->secondSheet->product->title ?? ''}}</td>
                                <td class="white-space-nowrap">{{$row->scenarios}}</td>
                            <td>{{$row->no_of_days}}</td>
                            <td>{{$row->cost_for_test_run}}</td>
                            <td>{{$row->cost_of_investment}}</td>
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
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                        <td class="bg-gray " colspan="7">{{__('messages.no_data_found')}}</td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div><!-- bd -->
    </div>
</body>
</html>
