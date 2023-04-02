<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style type="text/css">
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
        /* font-family: 'Ma Shan Zheng', DejaVu Sans,arial, sans-serif; */
        border-collapse: collapse;
        width: 100%;
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
<body>
<div class="section-wrapper">
    <div class="table-responsive">
        <h3 class="" style="text-align: center">{{__('messages.id_1').' - '.$product->title.' - '.__('messages.prices')}}</h3>
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
                <td><strong>{{__('messages.selling_price')}} (RMB)</strong></td>
                <td><strong>{{__('messages.exchange_rate')}}</strong></td>
                <td><strong>{{__('messages.selling_price')}}</strong></td>
                <td><strong>{{__('messages.purchase_price')}}</strong></td>
                <td><strong>{{__('messages.air_freight')}}</strong></td>
            </tr>

            @foreach($productPrices as $price)
                <tr class="text-center mb-2">
                    <td><strong>{{$price['id']}}</strong></td>
                    <td>{{$price['selling_price_rmb']}}</td>
                    <td>{{$price['exchange_rate']}}</td>
                    <td>{{$price['selling_price']}}</td>
                    <td>{{$price["purchase_price"]}}</td>
                    <td>{{$price["air_freight"]}}</td>
                </tr>
            @endforeach
            <tr class="text-center mb-2">
                <td><strong>ID#</strong></td>
                <td><strong>{{__('messages.sea_freight')}}</strong></td>
                <td><strong>{{__('messages.amazon_commission')}}</strong></td>
                <td><strong>{{__('messages.amazon_delivery')}}</strong></td>
                <td><strong>{{__('messages.vat_tax_rate')}}</strong></td>
                <td><strong>{{__('messages.vat_tax')}}</strong></td>
            </tr>
            @foreach($productPrices as $price)
                <tr class="text-center mb-2">
                    <td><strong>{{$price["id"]}}</strong></td>
                    <td>{{$price["sea_freight"]}}</td>
                    <td>{{$price["amazon_commission"]}}</td>
                    <td>{{$price["amazon_delivery"]}}</td>
                    <td>{{$price["vat_tax_rate"]}}%</td>
                    <td>{{$price["vat_tax"]}}</td>
                </tr>
            @endforeach
            <tr class="text-center mb-2">
                <td><strong>ID#</strong></td>
                <td><strong>{{__('messages.promotion_fee')}}</strong></td>
                <td><strong>{{__('messages.promotional_fee_percentage')}}</strong></td>
                <td><strong>{{__('messages.return_rate')}}</strong></td>
                <td><strong>{{__('messages.return_cost_air_freight')}}</strong></td>
                <td><strong>{{__('messages.return_cost_ocean_freight')}}</strong></td>
            </tr>
            @foreach($productPrices as $price)
                <tr class="text-center mb-2">
                    <td><strong>{{$price["id"]}}</strong></td>
                    <td>{{$price["promotion_fee"]}}</td>
                    <td>{{$price["promotional_expense_percentage"]}}%</td>
                    <td>{{$price["return_rate"]}}%</td>
                    <td>{{$price["return_cost_air_freight"]}}</td>
                    <td>{{$price["return_cost_ocean_freight"]}}</td>
                </tr>
            @endforeach
            <tr class="text-center mb-2">
                <td><strong>ID#</strong></td>
                <td><strong>{{__('messages.air_freight_profit')}}</strong></td>
                <td><strong>{{__('messages.cost_margin_air_freight')}}</strong></td>
                <td><strong>{{__('messages.profit_margin_air_freight')}}</strong></td>
                <td><strong>{{__('messages.ocean_freight_profit')}}</strong></td>
                <td><strong>{{__('messages.cost_margin_ocean_freight')}}</strong></td>
            </tr>
            @foreach($productPrices as $price)
                <tr class="text-center mb-2">
                    <td><strong>{{$price["id"]}}</strong></td>
                    <td>{{$price["air_freight_profit"]}}</td>
                    <td>{{$price["cost_margin_air_freight"].'%'}}</td>
                    <td>{{$price["profit_margin_air_freight"].'%'}}</td>
                    <td>{{$price["ocean_freight_profit"]}}</td>
                    <td>{{$price["cost_margin_ocean_freight"].'%'}}</td>
                </tr>
            @endforeach
            </tbody>

            <tr class="text-center">
                <td><strong>ID#</strong></td>
                <td><strong>{{__('messages.profit_margin_ocean_freight')}}</strong></td>
                <td><strong>{{__('messages.overall_return_cost_air_freight')}}</strong></td>
                <td><strong>{{__('messages.overall_return_cost_ocean_freight')}}</strong></td>
                <td></td>
                <td></td>
            </tr>
            @foreach($productPrices as $price)
                <tr>
                    <td><strong>{{$price["id"]}}</strong></td>
                    <td>{{$price["profit_margin_ocean_freight"].'%'}}</td>
                    <td>{{$price["overall_return_cost_air_freight"]}}</td>
                    <td>{{$price["overall_return_cost_ocean_freight"]}}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
