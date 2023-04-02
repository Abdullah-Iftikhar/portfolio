<div class="row id2_values">
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="sea_freight_time">{{__('messages.sea_freight_time')}}</label>
            <input type="number" step="any" readonly value="{{old('sea_freight_time',$secondSheet->sea_freight_time ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="sea_freight_time" id="sea_freight_time" class="form-control sea_freight_time editable_fields manual_input_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="air_freight_time">{{__('messages.air_freight_time')}}</label>
            <input type="number" step="any" readonly value="{{old('air_freight_time',$secondSheet->air_freight_time ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="air_freight_time" id="air_freight_time" class="form-control air_freight_time editable_fields manual_input_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="delivery_time">{{__('messages.delivery_time')}}</label>
            <input type="number" step="any" readonly value="{{old('delivery_time',$secondSheet->delivery_time ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="delivery_time" id="delivery_time" class="form-control delivery_time editable_fields manual_input_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="safety_time">{{__('messages.safety_time')}}</label>
            <input type="number" step="any" readonly value="{{old('safety_time',$secondSheet->safety_time ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="safety_time" id="safety_time" class="form-control safety_time editable_fields manual_input_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="billing">{{__('messages.billing')}}</label>
            <input type="number" step="any" readonly value="{{old('billing',$secondSheet->billing ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="billing" id="billing" class="form-control billing editable_fields manual_input_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="order_rhythm">{{__('messages.order_rhythm')}}</label>
            <input type="number" step="any" readonly value="{{old('order_rhythm',$secondSheet->order_rhythm ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="order_rhythm" id="order_rhythm" class="form-control order_rhythm editable_fields manual_input_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="sea_time">{{__('messages.sea_time')}}</label>
            <input type="number" step="any" readonly value="{{old('sea_time',$secondSheet->sea_time ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="sea_time" id="sea_time" class="form-control sea_time calculated_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="air_time">{{__('messages.air_time')}}</label>
            <input type="number" step="any" readonly value="{{old('air_time',$secondSheet->air_time ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="air_time" id="air_time" class="form-control air_time calculated_fields">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="product_price">{{__('messages.product_price')}}</label>
            <input type="number" step="any" readonly value="{{old('product_price',$secondSheet->product_price ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="product_price" id="product_price" class="form-control c2">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="received_air_freight">{{__('messages.received_air_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('received_air_freight',$secondSheet->received_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="received_air_freight" id="received_air_freight" class="form-control c7">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="received_ocean_freight">{{__('messages.received_ocean_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('received_ocean_freight',$secondSheet->received_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="received_ocean_freight" id="received_ocean_freight" class="form-control c7">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="survey_fee">{{__('messages.survey_fee')}}</label>
            <input type="number" step="any" readonly value="{{old('survey_fee',$secondSheet->survey_fee ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="survey_fee" id="survey_fee" class="form-control c9">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="half_price_received">{{__('messages.half_price_received')}}</label>
            <input type="number" step="any" readonly value="{{old('half_price_received',$secondSheet->half_price_received ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="half_price_received" id="half_price_received" class="form-control c10">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vp_air_freight">{{__('messages.vp_air_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('vp_air_freight',$secondSheet->vp_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vp_air_freight" id="vp_air_freight" class="form-control c11">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vp_ocean_freight">{{__('messages.vp_ocean_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('vp_ocean_freight',$secondSheet->vp_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vp_ocean_freight" id="vp_ocean_freight" class="form-control c12">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vp_purchasing_cost">{{__('messages.vp_purchasing_transport_cost_air')}}</label>
            <input type="number" readonly value="{{old('vp_purchasing_cost',$secondSheet->vp_purchasing_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vp_purchasing_cost" id="vp_purchasing_cost" class="form-control c13">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vp_purchase_cost">{{__('messages.vp_purchasing_transport_cost_ocean')}}</label>
            <input type="number" readonly value="{{old('vp_purchase_cost',$secondSheet->vp_purchase_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vp_purchase_cost" id="vp_purchase_cost" class="form-control c14">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="lighting_deal_air_freight">{{__('messages.lighting_deal_profit_air')}}</label>
            <input type="number" step="any" readonly value="{{old('lighting_deal_air_freight',$secondSheet->lighting_deal_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="lighting_deal_air_freight" id="lighting_deal_air_freight" class="form-control c15">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="lighting_deal_ocean_freight">{{__('messages.lighting_deal_profit_ocean')}}</label>
            <input type="number" readonly value="{{old('lighting_deal_ocean_freight',$secondSheet->lighting_deal_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="lighting_deal_ocean_freight" id="lighting_deal_ocean_freight" class="form-control c16">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="no_profit_air_freight">{{__('messages.no_profit_bottom_price_air_freight')}}</label>
            <input type="number" readonly value="{{old('no_profit_air_freight',$secondSheet->no_profit_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="no_profit_air_freight" id="no_profit_air_freight" class="form-control c17">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="no_profit_ocean_freight">{{__('messages.no_profit_bottom_price_ocean_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('no_profit_ocean_freight',$secondSheet->no_profit_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="no_profit_ocean_freight" id="no_profit_ocean_freight" class="form-control c18">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="fifty_discount_air_freight">{{__('messages.discount_loss_air_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('fifty_discount_air_freight',$secondSheet->fifty_discount_air_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="fifty_discount_air_freight" id="fifty_discount_air_freight" class="form-control c19">
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="fifty_discount_ocean_freight">{{__('messages.discount_loss_ocean_freight')}}</label>
            <input type="number" step="any" readonly value="{{old('fifty_discount_ocean_freight',$secondSheet->fifty_discount_ocean_freight ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="fifty_discount_ocean_freight" id="fifty_discount_ocean_freight" class="form-control c19">
        </div>
    </div>
</div>
