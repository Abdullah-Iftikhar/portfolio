@extends('panel.layout.main')

@section('title',__('messages.id_2'))
@section('page_title',__('messages.id_2'))

@section('body')
    <div class="section-wrapper">
        <section class="row w-100 justify-content-end ml-auto">
            <a href="{{route('id2.generatePdf')}}" class="col-md-2">
                <button class="btn btn-primary btn-block  ml-auto mg-b-10" id="pdfExport">{{__('messages.export')}} <i class="fa fa-file-pdf-o pl-1"></i></button>
            </a>
            <a href="{{route('id2.addEdit')}}" class="col-md-2">
                <button class="btn btn-primary btn-block ml-auto mg-b-10">{{__('messages.add_record')}}</button>
            </a>
        </section>
        <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
                <thead>
                <tr class="text-center">
                    <th>{{__('messages.dimension')}}</th>
                    <th colspan="10">{{__('messages.records')}}</th>
                </tr>
                </thead>
                <tbody>
                @if(count($secondSheetRecords))
                    <tr class="text-center">
                        <th width="20%">{{__('messages.action')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>
                                <a href="{{route('id2.addEditUpdate',[$secondSheetRecord->id])}}" title="Edit product price"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('{{__('messages.are_you_sure')}}')"
                                   href="{{route('id2.deleteRecord',[$secondSheetRecord->id])}}"
                                   title="{{__('messages.delete_record')}}" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th width="20%">ID#</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td><strong>{{$secondSheetRecord->id}}</strong></td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th width="20%">{{__('messages.product')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->product->title}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.product_price')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->product_price}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.received_air_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->received_air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.received_ocean_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->received_ocean_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.survey_fee')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->survey_fee}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.half_price_received')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->half_price_received}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.vp_air_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->vp_air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.vp_ocean_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->vp_ocean_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.vp_purchasing_transport_cost_air')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->vp_purchasing_cost}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.vp_purchasing_transport_cost_ocean')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->vp_purchase_cost}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.lighting_deal_profit_air')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->lighting_deal_air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.lighting_deal_profit_ocean')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->lighting_deal_ocean_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.no_profit_bottom_price_air_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->no_profit_air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.no_profit_bottom_price_ocean_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->no_profit_ocean_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.discount_loss_air_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->fifty_discount_air_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.discount_loss_ocean_freight')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->fifty_discount_ocean_freight}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.sea_freight_time')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->sea_freight_time}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.air_freight_time')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->air_freight_time}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.delivery_time')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->delivery_time}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.safety_time')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->safety_time}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.billing')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->billing}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.order_rhythm')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->order_rhythm}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.sea_time')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->sea_time}}</td>
                        @endforeach
                    </tr>
                    <tr class="text-center">
                        <th>{{__('messages.air_time')}}</th>
                        @foreach($secondSheetRecords as $secondSheetRecord)
                            <td>{{$secondSheetRecord->air_time}}</td>
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
                {{$secondSheetRecords->links()}}
            </section>
        </div><!-- bd -->
    </div>
@endsection
