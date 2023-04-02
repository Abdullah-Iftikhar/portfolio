@extends('panel.layout.main')

@section('title',__('messages.id_1').' - '.$product->title.' - '.__('messages.prices'))
@section('page_title',__('messages.id_1').' - '.$product->title.' - '.__('messages.prices'))

@section('body')
    <div class="section-wrapper">
        <section class="row w-100 justify-content-end ml-auto">
            <a href="{{route('id1.generatePdf',$product->id)}}" class="col-md-2">
                <button class="btn btn-primary btn-block  ml-auto mg-b-10" id="pdfExport">{{__('messages.export')}} <i
                        class="fa fa-file-pdf-o pl-1"></i></button>
            </a>
            <a href="{{route('id1.addPrice',$product->id)}}" class="col-md-2">
                <button class="btn btn-primary btn-block  ml-auto mg-b-10">{{__('messages.add_prices')}}</button>
            </a>
        </section>
        <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
                <thead>
                <tr class="text-center">
                    <th>{{__('messages.dimension')}}</th>
                    <th colspan="10">{{__('messages.prices')}}</th>
                </tr>
                </thead>
                <tbody>
                @if(count($productPrices))
                    <tr class="text-center">
                        <th width="20%">{{__('messages.action')}}</th>
                        @foreach($productPrices as $price)
                            <td>
                                <a href="{{route('id1.editPrice',[$product->id,$price->id])}}"
                                   title="Edit product price" class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('{{__('messages.are_you_sure')}}')"
                                   href="{{route('id1.deletePrice',[$product->id,$price->id])}}"
                                   title="{{__('messages.del_pro_price')}}" class="mr-1">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th width="20%">ID#</th>
                        @foreach($productPrices as $price)
                            <td><strong>{{$price->id}}</strong></td>
                        @endforeach
                    </tr>

                    <tr class="text-center">
                        <th width="20%">{{__('messages.product')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$product->title}}</td>
                        @endforeach

                    </tr>

                    <tr class="text-center">
                        <th width="20%">{{__('messages.selling_price')}} (RMB)</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->selling_price_rmb}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.exchange_rate')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->exchange_rate}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.selling_price')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->selling_price}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.purchase_price')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->purchase_price}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.air_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.sea_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->sea_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.amazon_commission')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->amazon_commission}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.amazon_delivery')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->amazon_delivery}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.vat_tax_rate')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->vat_tax_rate}}%</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.vat_tax')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->vat_tax}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.promotion_fee')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->promotion_fee}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.promotional_fee_percentage')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->promotional_expense_percentage}}%</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.return_rate')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->return_rate}}%</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.return_cost_air_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->return_cost_air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.return_cost_ocean_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->return_cost_ocean_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.air_freight_profit')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->air_freight_profit}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.cost_margin_air_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->cost_margin_air_freight.'%'}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.profit_margin_air_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->profit_margin_air_freight.'%'}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.ocean_freight_profit')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->ocean_freight_profit}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.cost_margin_ocean_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->cost_margin_ocean_freight.'%'}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.profit_margin_ocean_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->profit_margin_ocean_freight.'%'}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.overall_return_cost_air_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->overall_return_cost_air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.overall_return_cost_ocean_freight')}}</th>
                        @foreach($productPrices as $price)
                            <td>{{$price->overall_return_cost_ocean_freight}}</td>
                        @endforeach
                    </tr>
                @else
                    <tr>
                        <td colspan="4" class="text-center bg-gray">{{__('messages.no_data_found')}}</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <section class="mt-3 ">
                {{$productPrices->links()}}
            </section>
        </div><!-- bd -->
    </div>
@endsection
