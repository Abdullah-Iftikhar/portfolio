<div class="row manual_input_fields">
    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_for_run">{{__('messages.cost_for_run')}} <span class="tx-danger">*</span></label>
            <select name="cost_for_run" id="cost_for_run" class="form-control" required>
                <option value="" disabled selected>{{__('messages.choose').' '.__('messages.cost_for_run')}}</option>
                @foreach($costForRuns as $data)
                    <option data-group-id="{{$data->group_id}}"
                            value="{{$data->id}}" {{old('cost_for_run')&&old('cost_for_run')==$data->id?'selected':(isset($amountOfInvestment)&&$amountOfInvestment->cost_for_run_id==$data->id?'selected':'')}}> {{$data->secondSheet->product->title ?? ""}}
                        - {{$data->secondSheet->price->selling_price ?? ""}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="scenarios">{{__('messages.scenarios')}} <span class="tx-danger">*</span></label>
            <select name="scenarios" id="scenarios" class="form-control" required>

            </select>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="no_of_days">{{__('messages.how_many_days')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('no_of_days',$amountOfInvestment->no_of_days ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="no_of_days" id="no_of_days" class="form-control c3" required="">
        </div>
    </div>
</div>

<div class="row calculated_fields">
    <div class="col-md-12 mt-3">
        <h4>{{__('messages.air_fryer_air')}}</h4>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_for_test_run">{{__('messages.cost_for_test_run')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_for_test_run',$amountOfInvestment->cost_for_test_run ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_for_test_run" id="cost_for_test_run" class="form-control c2">
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_of_investment">{{__('messages.cost_for_investment')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_of_investment',$amountOfInvestment->cost_of_investment ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_of_investment" id="cost_of_investment" class="form-control c2">
        </div>
    </div>
</div>

<div class="row calculated_fields">
    <div class="col-md-12 mt-3">
        <h4>{{__('messages.air_fryer_ocean')}}</h4>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_for_test_run_ocean">{{__('messages.cost_for_test_run')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_for_test_run_ocean',$amountOfInvestmentOcean->cost_for_test_run ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_for_test_run_ocean" id="cost_for_test_run_ocean" class="form-control c2">
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_of_investment_ocean">{{__('messages.cost_for_investment')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_of_investment_ocean',$amountOfInvestmentOcean->cost_of_investment ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_of_investment_ocean" id="cost_of_investment_ocean" class="form-control c2">
        </div>
    </div>
</div>
