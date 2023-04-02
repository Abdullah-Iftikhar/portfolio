@extends('panel.layout.main')

@section('title',__('messages.id_1').' - '.__('messages.edit_product'))
@section('page_title',__('messages.id_1').' - '.__('messages.edit_product'))

@section('body')
    <div class="section-wrapper">
        <form action="{{route('id1.update',$product->id)}}" method="post" data-parsley-validate="" novalidate="">
            @method('PATCH')
            @csrf
            @include('panel.include.errors')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mg-b-0">
                        <label for="title">{{__('messages.title')}}: <span class="tx-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{old('title',$product->title ?? '')}}" required="">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pd-x-20">{{__('messages.update')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
