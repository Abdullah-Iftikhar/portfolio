@extends('panel.layout.main')
@section('title',__('messages.id_2').' - '.__('messages.add_record'))
@section('page_title',__('messages.id_2').' - '.__('messages.add_record'))

@section('body')
    <div class="section-wrapper">
        @php
            $action = route('id2.store');
        @endphp
        @include('panel.include.errors')
        <form action="{{route('id2.prices')}}" id="product_form" method="post">
            @csrf
            <input type="hidden" name="product" id="product_val" value="{{$product->id ?? ''}}">
            <input type="hidden" name="price" id="price_val" value="{{$productPrice->id ?? ''}}">
        </form>
        <form action="{{$action}}" method="post" data-parsley-validate="" novalidate="">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mg-b-0">
                        <label for="product"></label>
                        <select name="product" id="product" class="form-control" required>
                            <option value="" disabled selected>{{__('messages.choose_product')}}</option>
                            @foreach($products as $row)
                                <option
                                    value="{{$row->id}}" {{ isset($product)&&$product->id==$row->id?'selected':'' }}>{{$row->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mg-b-0">
                        <label for="price"></label>
                        <select name="price" id="price" class="form-control" required></select>
                    </div>
                </div>
            </div>
            @include('panel.admin.id2.price_form')
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pd-x-20">{{__('messages.save')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script-section')
    <script src="{{asset('assets/js/second-sheet.js')}}"></script>
    <script>
        $(document).ready(()=>{
            $('#product').trigger('change');


        })
        $(document).on('change','#price',function () {
            let value = $(this).val();
            if(!!value){
                $('#price_val').val(value);
                $('#product_form').submit();
            }
        });

        $(document).on('change','#product',function () {
            let productID = $(this).val();
            $('#product_val').val(productID);
            $.ajax({
                type: 'GET',
                url: '{{url('/')}}'+'/id2/product/'+productID+'/prices',
                success: function (data) {
                    $('#price').html(data);

                    @if(isset($productPrice))
                    $('#price').val('{{$productPrice->id}}').attr('selected','selected');
                    $('.editable_fields').prop('readonly', false);
                    @endif
                }
            });
        })
    </script>
@endpush
