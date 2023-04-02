@extends('panel.layout.main')
@php
    $pageTitle = __('messages.id_1').' - '.$product->title.' - '.__('messages.add_prices');
    if(isset($productPrice) && isset($editMode)){
        $pageTitle = __('messages.id_1').' - '.$product->title.' - '.__('messages.edit_product');
    }
@endphp
@section('title',$pageTitle)
@section('page_title',$pageTitle)

@section('body')
    <div class="section-wrapper">
        @php
            $action = route('id1.savePrice',$product->id);
            if(isset($productPrice) && isset($editMode)){
                $action = route('id1.updatePrice',[$product->id,$productPrice->id]);
            }
        @endphp
        <form action="{{$action}}" method="post" data-parsley-validate="" novalidate="">
            @csrf
            @include('panel.include.errors')
            @include('panel.admin.id1.price_form')
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pd-x-20">{{__('messages.save')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script-section')
    <script src="{{asset('assets/js/product-price.js')}}"></script>
@endpush
