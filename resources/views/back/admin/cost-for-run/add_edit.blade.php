@extends('panel.layout.main')

@if(isset($costForRun))
    @section('title',__('messages.cost_for_run').' - '.__('messages.edit_record'))
    @section('page_title',__('messages.cost_for_run').' - '.__('messages.add_record'))
@else
    @section('title',__('messages.cost_for_run').' - '.__('messages.add_record'))
    @section('page_title',__('messages.cost_for_run').' - '.__('messages.add_record'))
@endif

@section('body')
    <div class="section-wrapper">
        <section class="d-none" id="hidden_fields">
            @include('panel.admin.cost-for-run.hidden_fields')
        </section>
        @if(isset($costForRun))
            <form action="{{route('cost-for-run.update',$costForRun->group_id)}}" method="post" data-parsley-validate="" novalidate="">
            @method('PATCH')
        @else
            <form action="{{route('cost-for-run.store')}}" method="post" data-parsley-validate="" novalidate="">
        @endif
            @csrf
            @include('panel.include.errors')
                @include('panel.admin.cost-for-run.cost-form')
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pd-x-20">{{__('messages.save')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script-section')
    <script src="{{asset('assets/js/cost-for-run-price.js')}}"></script>
    <script>
        $(document).ready(()=>{
            let manualFields = $('.manual_input_fields input');
            $(manualFields).attr('readonly',true);
            let id2 = $('#id_2');
            let scenarios = $('#scenarios');
            $(id2).trigger('change');
            $(scenarios).trigger('change');
        });
        $(document).on('change','#id_2',function () {
            let id2Value = $(this).val();

            if(!!id2Value) {
                $.ajax({
                    type: 'GET',
                    url: '{{url('/')}}' + '/cost-for-run/fetch-data/' + id2Value,
                    success: function (data) {
                        $('#hidden_fields').html(data);
                        calculateValues();
                    }
                });
            }
        })
    </script>
@endpush
