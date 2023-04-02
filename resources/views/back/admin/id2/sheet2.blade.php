<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
    }
</style>
<body>
    <div class="section-wrapper">
        <div class="table-responsive">
            <h3 class="" style="text-align: center">{{__('messages.id_2')}}</h3>
            <table class="table table-sm table-dashboard data-table no-wrap mb-0 fs--1 w-100" id="datatable2">
                <thead>
                <tr class="text-center">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>

                </thead>
                <tbody>
                <tr class="text-center mb-2">
                    <td><strong>ID#</strong></td>
                    <td><strong>{{__('messages.product')}}</strong></td>
                    <td><strong>{{__('messages.product_price')}}</strong></td>
                    <td><strong>{{__('messages.received_air_freight')}}</strong></td>
                    <td><strong>{{__('messages.received_ocean_freight')}}</strong></td>
                    <td><strong>{{__('messages.survey_fee')}}</strong></td>
                </tr>
                @foreach($secondSheetRecords as $secondSheetRecord)
                    <tr class="text-center">
                        <td><strong>{{$secondSheetRecord->id}}</strong></td>
                        <td>{{$secondSheetRecord->product->title}}</td>
                        <td>{{$secondSheetRecord->product_price}}</td>
                        <td>{{$secondSheetRecord->received_air_freight}}</td>
                        <td>{{$secondSheetRecord->received_ocean_freight}}</td>
                        <td>{{$secondSheetRecord->survey_fee}}</td>
                    </tr>
                @endforeach
                <tr class="text-center mb-2">
                    <td><strong>ID#</strong></td>
                    <td><strong>{{__('messages.half_price_received')}}</strong></td>
                    <td><strong>{{__('messages.vp_air_freight')}}</strong></td>
                    <td><strong>{{__('messages.vp_ocean_freight')}}</strong></td>
                    <td><strong>{{__('messages.vp_purchasing_transport_cost_air')}}</strong></td>
                    <td><strong>{{__('messages.vp_purchasing_transport_cost_ocean')}}</strong></td>
                </tr>

                @foreach($secondSheetRecords as $secondSheetRecord)
                    <tr class="text-center">
                        <td><strong>{{$secondSheetRecord->id}}</strong></td>
                        <td>{{$secondSheetRecord->half_price_received}}</td>
                        <td>{{$secondSheetRecord->vp_air_freight}}</td>
                        <td>{{$secondSheetRecord->vp_ocean_freight}}</td>
                        <td>{{$secondSheetRecord->vp_purchasing_cost}}</td>
                        <td>{{$secondSheetRecord->vp_purchase_cost}}</td>
                    </tr>
                @endforeach
                <tr class="text-center mb-2">
                    <td><strong>ID#</strong></td>
                    <td><strong>{{__('messages.lighting_deal_profit_air')}}</strong></td>
                    <td><strong>{{__('messages.lighting_deal_profit_ocean')}}</strong></td>
                    <td><strong>{{__('messages.no_profit_bottom_price_air_freight')}}</strong></td>
                    <td><strong>{{__('messages.no_profit_bottom_price_ocean_freight')}}</strong></td>
                    <td><strong>{{__('messages.discount_loss_air_freight')}}</strong></td>
                </tr>
                @foreach($secondSheetRecords as $secondSheetRecord)
                    <tr class="text-center">
                        <td><strong>{{$secondSheetRecord->id}}</strong></td>
                        <td>{{$secondSheetRecord->lighting_deal_air_freight}}</td>
                        <td>{{$secondSheetRecord->lighting_deal_ocean_freight}}</td>
                        <td>{{$secondSheetRecord->no_profit_air_freight}}</td>
                        <td>{{$secondSheetRecord->no_profit_ocean_freight}}</td>
                        <td>{{$secondSheetRecord->fifty_discount_air_freight}}</td>
                    </tr>
                @endforeach
                <tr class="text-center mb-2">
                    <td><strong>ID#</strong></td>
                    <td><strong>{{__('messages.discount_loss_ocean_freight')}}</strong></td>
                    <td>{{__('messages.sea_freight_time')}}</td>
                    <td>{{__('messages.air_freight_time')}}</td>
                    <td>{{__('messages.delivery_time')}}</td>
                    <td>{{__('messages.safety_time')}}</td>
                </tr>
                @foreach($secondSheetRecords as $secondSheetRecord)
                    <tr class="text-center">
                        <td><strong>{{$secondSheetRecord->id}}</strong></td>
                        <td>{{$secondSheetRecord->fifty_discount_ocean_freight}}</td>
                        <td>{{$secondSheetRecord->sea_freight_time}}</td>
                        <td>{{$secondSheetRecord->air_freight_time}}</td>
                        <td>{{$secondSheetRecord->delivery_time}}</td>
                        <td>{{$secondSheetRecord->safety_time}}</td>
                    </tr>
                @endforeach

                <tr class="text-center mb-2">
                    <td><strong>ID#</strong></td>
                    <td><strong>{{__('messages.billing')}}</strong></td>
                    <td>{{__('messages.order_rhythm')}}</td>
                    <td>{{__('messages.sea_time')}}</td>
                    <td>{{__('messages.air_time')}}</td>
                    <td></td>
                </tr>
                @foreach($secondSheetRecords as $secondSheetRecord)
                    <tr class="text-center">
                        <td><strong>{{$secondSheetRecord->id}}</strong></td>
                        <td>{{$secondSheetRecord->billing}}</td>
                        <td>{{$secondSheetRecord->order_rhythm}}</td>
                        <td>{{$secondSheetRecord->sea_time}}</td>
                        <td>{{$secondSheetRecord->air_time}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- bd -->
    </div>
</body>
</html>
