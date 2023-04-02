<div class="row manual_input_fields">
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="selling_price">{{__('messages.selling_price_original')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('selling_price',$productPrice->selling_price ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="selling_price" id="selling_price" class="form-control d4" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="exchange_rate">{{__('messages.exchange_rate')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('exchange_rate',$productPrice->exchange_rate ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="exchange_rate" id="exchange_rate" class="form-control c3" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="purchase_price">{{__('messages.purchase_price')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('purchase_price',$productPrice->purchase_price ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="purchase_price" id="purchase_price" class="form-control d5" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="air_freight">{{__('messages.air_freight')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('air_freight',$productPrice->air_freight ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="air_freight" id="air_freight" class="form-control d6" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="sea_freight">{{__('messages.sea_freight')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('sea_freight',$productPrice->sea_freight ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="sea_freight" id="sea_freight" class="form-control d7" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="amazon_delivery">{{__('messages.amazon_delivery')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('amazon_delivery',$productPrice->amazon_delivery ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="amazon_delivery" id="amazon_delivery" class="form-control d9" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vat_tax_rate">{{__('messages.vat_tax_rate')}} % <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('vat_tax_rate',$productPrice->vat_tax_rate ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="vat_tax_rate" id="vat_tax_rate" class="form-control c11" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="promotional_expense_percentage">{{__('messages.promotional_fee_percentage')}} % <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('promotional_expense_percentage',$productPrice->promotional_expense_percentage ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="promotional_expense_percentage" id="promotional_expense_percentage" class="form-control c13" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="return_rate">{{__('messages.return_rate')}} % <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('return_rate',$productPrice->return_rate ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="return_rate" id="return_rate" class="form-control c14" required="">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="amazon_commission_rate">{{__('messages.amazon_commission_rate')}} % <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('amazon_commission_rate',$productPrice->amazon_commission_rate ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="amazon_commission_rate" id="amazon_commission_rate" class="form-control amazon_rate" required="">
        </div>
    </div>
</div>
<div class="row calculated_fields">
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="selling_price_rmb">{{__('messages.selling_price')}} (RMB)</label>
            <input type="number" step="any" readonly value="{{old('selling_price_rmb',$productPrice->selling_price_rmb ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="selling_price_rmb" id="selling_price_rmb" class="form-control d2 round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="amazon_commission">{{__('messages.amazon_commission')}}</label>
            <input type="number" step="any" readonly value="{{old('amazon_commission',$productPrice->amazon_commission ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="amazon_commission" id="amazon_commission" class="form-control d8 point_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vat_tax">{{__('messages.vat_tax')}}</label>
            <input type="number" step="any" readonly value="{{old('vat_tax',$productPrice->vat_tax ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vat_tax" id="vat_tax" class="form-control d10 round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="promotion_fee">{{__('messages.promotion_fee')}}</label>
            <input type="number" step="any" readonly value="{{old('promotion_fee',$productPrice->promotion_fee ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="promotion_fee" id="promotion_fee" class="form-control d12 round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="return_cost_air_freight">{{__('messages.return_cost_air_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('return_cost_air_freight',$productPrice->return_cost_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="return_cost_air_freight" id="return_cost_air_freight" class="form-control d15 round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="return_cost_ocean_freight">{{__('messages.return_cost_ocean_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('return_cost_ocean_freight',$productPrice->return_cost_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="return_cost_ocean_freight" id="return_cost_ocean_freight" class="form-control d16 round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="air_freight_profit">{{__('messages.air_freight_profit')}}</label>
            <input type="number" step="any" readonly value="{{old('air_freight_profit',$productPrice->air_freight_profit ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="air_freight_profit" id="air_freight_profit" class="form-control d17 point_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_margin_air_freight">{{__('messages.cost_margin_air_freight')}}</label>
            <input type="text" readonly value="{{old('cost_margin_air_freight',$productPrice->cost_margin_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_margin_air_freight" id="cost_margin_air_freight" class="form-control d18 percentage_field round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="profit_margin_air_freight">{{__('messages.profit_margin_air_freight')}}</label>
            <input type="text" readonly value="{{old('profit_margin_air_freight',$productPrice->profit_margin_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="profit_margin_air_freight" id="profit_margin_air_freight" class="form-control d19 percentage_field round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="ocean_freight_profit">{{__('messages.ocean_freight_profit')}}</label>
            <input type="number" step="any" readonly value="{{old('ocean_freight_profit',$productPrice->ocean_freight_profit ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="ocean_freight_profit" id="ocean_freight_profit" class="form-control d20 point_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_margin_ocean_freight">{{__('messages.cost_margin_ocean_freight')}} </label>
            <input type="text" readonly value="{{old('cost_margin_ocean_freight',$productPrice->cost_margin_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_margin_ocean_freight" id="cost_margin_ocean_freight" class="form-control d21 percentage_field round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="profit_margin_ocean_freight">{{__('messages.profit_margin_ocean_freight')}}</label>
            <input type="text" readonly value="{{old('profit_margin_ocean_freight',$productPrice->profit_margin_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="profit_margin_ocean_freight" id="profit_margin_ocean_freight" class="form-control d22 percentage_field round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="overall_return_cost_air_freight">{{__('messages.overall_return_cost_air_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('overall_return_cost_air_freight',$productPrice->overall_return_cost_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="overall_return_cost_air_freight" id="overall_return_cost_air_freight" class="form-control d23 round_digit">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="overall_return_cost_ocean_freight">{{__('messages.overall_return_cost_ocean_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('overall_return_cost_ocean_freight',$productPrice->overall_return_cost_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="overall_return_cost_ocean_freight" id="overall_return_cost_ocean_freight" class="form-control d24 round_digit">
        </div>
    </div>
</div>
