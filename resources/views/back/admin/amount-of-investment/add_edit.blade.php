@extends('panel.layout.main')

@if(isset($amountOfInvestment))
    @section('title',__('messages.amount_of_investment').' - '.__('messages.edit_record'))
    @section('page_title',__('messages.amount_of_investment').' - '.__('messages.edit_record'))
@else
    @section('title',__('messages.amount_of_investment').' - '.__('messages.add_record'))
    @section('page_title',__('messages.amount_of_investment').' - '.__('messages.add_record'))
@endif



@section('body')
    <div class="section-wrapper">
        <section class="d-none" id="hidden_fields">
            @include('panel.admin.amount-of-investment.hidden_fields')
        </section>
        @if(isset($amountOfInvestment))
            <form action="{{route('amount-of-investment.update',$amountOfInvestment->group_id)}}" method="post" data-parsley-validate="" novalidate="">
            @method('PATCH')
        @else
            <form action="{{route('amount-of-investment.store')}}" method="post" data-parsley-validate="" novalidate="">
        @endif
            @csrf
            @include('panel.include.errors')
            @include('panel.admin.amount-of-investment.investment-form')
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pd-x-20">{{__('messages.save')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script-section')
    <script src="{{asset('assets/js/amount-of-investment.js')}}"></script>
    <script>
        let manualFields = $('.manual_input_fields input');
        $(document).ready(()=>{
            $(manualFields).attr('readonly',true);
            let costForRun = $('#cost_for_run');
            let scenarios = $('#scenarios');
            $(costForRun).trigger('change');
            $(scenarios).trigger('change');
        });

        $(document).on('change','#cost_for_run',function () {

            let costForRun = $(this).find('option:selected').attr('data-group-id');
            if(!!costForRun) {
                $.ajax({
                    type: 'GET',
                    url: '{{url('/')}}' + '/amount-of-investment/fetch-scenarios/' + costForRun,
                    success: function (data) {
                        $('#scenarios').html(data);

                        if('{{old('scenarios')}}') {
                            $(scenarios).val('{{old("scenarios")}}').change();
                        }

                        @if(isset($amountOfInvestment))
                            $(scenarios).val('{{$amountOfInvestment->scenarios}}').change();
                        @endif
                    }
                });
            }
        })

        $(document).on('change','#scenarios',function () {
            let costForRun = $('#cost_for_run').find('option:selected').attr('data-group-id');
            let scenarios = $(this).val();

            if(!!costForRun && !!scenarios) {
                $.ajax({
                    type: 'GET',
                    url: '{{url('/')}}' + '/amount-of-investment/fetch-data/' + costForRun+'/'+scenarios,
                    success: function (data) {
                        $('#hidden_fields').html(data);
                        $(manualFields).removeAttr('readonly');
                        calculateValues();
                    }
                });
            }
        })
    </script>
@endpush
