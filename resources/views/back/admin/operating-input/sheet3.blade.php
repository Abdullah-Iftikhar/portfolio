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
    span  {
        font-family: 'heiti';
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td {
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
        <h3 class="" style="text-align: center">{{__('messages.operating_input')}}</h3>
        <div class="table-responsive">
            <table class="table table-sm table-dashboard data-table no-wrap mb-0 fs--1 w-100" id="datatable2">
                <thead>
                <tr class="text-center">
                    <th></th>
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
                    <th>ID#</th>
                    <th>{{__('messages.product_name')}}</th>
                    <th>{{__('messages.selling_price')}}</th>
                    <th>{{__('messages.staff_salary')}}</th>
                    <th>{{__('messages.no_of_delivery')}}</th>
                    <th>{{__('messages.delivery_cash')}}</th>
                    <th>{{__('messages.avg_daily_cost')}}</th>
                </tr>
                @foreach($operatingInput as $key => $row)
                    <tr class="text-center">
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                        <td>{{$row->staff_salary}}</td>
                        <td>{{$row->number_of_delivery}}</td>
                        <td>{{$row->delivery_cash}}</td>
                        <td>{{$row->avg_daily_cost}}</td>
                    </tr>
                @endforeach
                <tr class="text-center mb-2">
                    <th>ID#</th>
                    <th>CPC</th>
                    <th>{{__('messages.off_cost')}}</th>
                    <th>{{__('messages.platform_cost')}}</th>
                    <th>{{__('messages.actual_cost')}}</th>
                    <th>{{__('messages.off_cost')}}</th>
                    <th>{{__('messages.small_pro_head')}}</th>
                </tr>
                @foreach($operatingInput as $key => $row)
                    <tr class="text-center">
                        <td>{{$row->id}}</td>
                        <td>{{$row->cpc}}</td>
                        <td>{{$row->off_site}}</td>
                        <td>{{$row->platform_cost}}</td>
                        <td>{{$row->actual_cost}}</td>
                        <td>{{$row->off_cost}}</td>
                        <td>{{$row->small_product_head}}</td>
                    </tr>
                @endforeach
                <tr class="text-center mb-2">
                    <th>ID#</th>
                    <th>{{__('messages.pro_qty')}}</th>
                    <th>{{__('messages.review_costs')}}</th>
                    <th>{{__('messages.img_&_manual')}}</th>
                    <th>{{__('messages.overseas_costs')}}</th>
                    <th>{{__('messages.service_fee')}}</th>
                    <th>{{__('messages.stores')}}</th>
                </tr>
                @foreach($operatingInput as $key => $row)
                    <tr class="text-center">
                        <td>{{$row->id}}</td>
                        <td>{{$row->product_quantity}}</td>
                        <td>{{$row->review_costs}}</td>
                        <td>{{$row->image_manual}}</td>
                        <td>{{$row->overseas_costs}}</td>
                        <td>{{$row->service_fee}}</td>
                        <td>{{$row->stores}}</td>
                    </tr>
                @endforeach
                <tr class="text-center mb-2">
                    <td>ID#</td>
                    <th>VPS</th>
                    <th>{{__('messages.store_rent')}}</th>
                    <th>{{__('messages.second_store')}}</th>
                    <th>{{__('messages.service_fee_2')}}</th>
                    <th>VAT</th>
                    <th>{{__('messages.office_costs')}}</th>
                </tr>
                @foreach($operatingInput as $key => $row)
                    <tr class="text-center">
                        <td>{{$row->id}}</td>
                        <td>{{$row->vps}}</td>
                        <td>{{$row->store_rent}}</td>
                        <td>{{$row->second_stores}}</td>
                        <td>{{$row->service_fee_2}}</td>
                        <td>{{$row->vat}}</td>
                        <td>{{$row->office_costs}}</td>
                    </tr>
                @endforeach
                <tr class="text-center mb-2">
                    <th>ID#</th>
                    <th>{{__('messages.tooling_cost')}}</th>
                    <th>{{__('messages.total')}}</th>
                    <th></th>
                    <th></th>
                    <td></td>
                    <td></td>
                </tr>
                @foreach($operatingInput as $key => $row)
                    <tr class="text-center">
                        <td>{{$row->id}}</td>
                        <td>{{$row->tooling_costs}}</td>
                        <td>{{$row->total}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- bd -->
    </div>
</body>
</html>
