@extends('panel.layout.main')

@section('title',__('messages.operating_input'))
@section('page_title',__('messages.operating_input'))

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
            <a href="{{route('operatingInput.pdf')}}" class="col-md-2">
                <button class="btn btn-primary btn-block  ml-auto mg-b-10">{{__('messages.export')}} <i class="fa fa-file-pdf-o pl-1"></i></button>
            </a>
            <a href="{{route('operating-input.create')}}" class="col-md-2">
                <button class="btn btn-primary btn-block ml-auto mg-b-10">{{__('messages.add_record')}}</button>
            </a>
        </section>
        <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
                <thead>
                <tr class="text-center white-space-nowrap">
                    <th>ID#</th>
                    <th>{{__('messages.product_name')}}</th>
                    <th>{{__('messages.selling_price')}}</th>
                    <th>{{__('messages.staff_salary')}}</th>
                    <th>{{__('messages.no_of_delivery')}}</th>
                    <th>{{__('messages.delivery_cash')}}</th>
                    <th>{{__('messages.avg_daily_cost')}}</th>
                    <th>CPC</th>
                    <th>{{__('messages.off_cost')}}</th>
                    <th>{{__('messages.platform_cost')}}</th>
                    <th>{{__('messages.actual_cost')}}</th>
                    <th>{{__('messages.off_cost')}}</th>
                    <th>{{__('messages.small_pro_head')}}</th>
                    <th>{{__('messages.pro_qty')}}</th>
                    <th>{{__('messages.review_costs')}}</th>
                    <th>{{__('messages.img_&_manual')}}</th>
                    <th>{{__('messages.overseas_costs')}}</th>
                    <th>{{__('messages.service_fee')}}</th>
                    <th>{{__('messages.stores')}}</th>
                    <th>VPS</th>
                    <th>{{__('messages.store_rent')}}</th>
                    <th>{{__('messages.second_store')}}</th>
                    <th>{{__('messages.service_fee_2')}}</th>
                    <th>VAT</th>
                    <th>{{__('messages.office_costs')}}</th>
                    <th>{{__('messages.tooling_cost')}}</th>
                    <th>{{__('messages.total')}}</th>
                    <th>{{__('messages.action')}}</th>
                </tr>
                </thead>
                <tbody>
                @if($operatingInput->count())
                    @foreach($operatingInput as $key => $row)
                        <tr class="text-center">
                            <th>{{$row->id}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->secondSheet->price->selling_price ?? ''}}</td>
                            <td>{{$row->staff_salary}}</td>
                            <td>{{$row->number_of_delivery}}</td>
                            <td>{{$row->delivery_cash}}</td>
                            <td>{{$row->avg_daily_cost}}</td>
                            <td>{{$row->cpc}}</td>
                            <td>{{$row->off_site}}</td>
                            <td>{{$row->platform_cost}}</td>
                            <td>{{$row->actual_cost}}</td>
                            <td>{{$row->off_cost}}</td>
                            <td>{{$row->small_product_head}}</td>
                            <td>{{$row->product_quantity}}</td>
                            <td>{{$row->review_costs}}</td>
                            <td>{{$row->image_manual}}</td>
                            <td>{{$row->overseas_costs}}</td>
                            <td>{{$row->service_fee}}</td>
                            <td>{{$row->stores}}</td>
                            <td>{{$row->vps}}</td>
                            <td>{{$row->store_rent}}</td>
                            <td>{{$row->second_stores}}</td>
                            <td>{{$row->service_fee_2}}</td>
                            <td>{{$row->vat}}</td>
                            <td>{{$row->office_costs}}</td>
                            <td>{{$row->tooling_costs}}</td>
                            <td>{{$row->total}}</td>
                            <td>
                                <a href="{{route('operating-input.edit',[$row->id])}}" title="Edit record"
                                   class="mr-1">
                                    <i class="fa fa-pencil text-success"></i>
                                </a>
                                <a onclick="return confirm('Are you sure?')"
                                   href="{{route('operatingInput.destroy',[$row->id])}}"
                                   title="Delete record" class="mr-1 pl-2">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>

                    </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                        <td class="bg-gray " colspan="28">{{__('messages.no_data_found')}}</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <section class="mt-3 ">
                {{$operatingInput->links()}}
            </section>
        </div><!-- bd -->
    </div>
@endsection
