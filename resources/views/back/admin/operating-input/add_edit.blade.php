@extends('panel.layout.main')

@if(isset($operatingInput))
    @section('title',__('messages.operating_input').' - '.__('messages.edit_record'))
    @section('page_title',__('messages.operating_input').' - '.__('messages.edit_record'))
@else
    @section('title',__('messages.operating_input').' - '.__('messages.edit_record'))
    @section('page_title',__('messages.operating_input').' - '.__('messages.edit_record'))

@endif

@section('body')
    <div class="section-wrapper">
        <section class="d-none" id="hidden_fields">
            @include('panel.admin.operating-input.hidden_fields')
        </section>
        @if(isset($operatingInput))
            <form action="{{route('operating-input.update',$operatingInput->id)}}" method="post" data-parsley-validate="" novalidate="">
            @method('PATCH')
        @else
            <form action="{{route('operating-input.store')}}" method="post" data-parsley-validate="" novalidate="">
        @endif
            @csrf
            @include('panel.include.errors')
            @include('panel.admin.operating-input.operating-input-form')
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pd-x-20">{{__('messages.save')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script-section')
    <script src="{{asset('assets/js/operating-input.js')}}"></script>
    <script>
        let manualFields = $('.manual_input_fields input');
        $(document).ready(()=>{
            $(manualFields).attr('readonly',true);
            let id2 = $('#id_2');
            $(id2).trigger('change');
        });
        $(document).on('change','#id_2',function () {
            let id2Value = $(this).val();

            if(!!id2Value) {
                $.ajax({
                    type: 'GET',
                    url: '{{url('/')}}' + '/operating-input/fetch-data/' + id2Value,
                    success: function (data) {
                        $('#hidden_fields').html(data);
                        $(manualFields).attr('readonly',false);
                        calculateValues();
                    }
                });
            }
        })
    </script>
@endpush
