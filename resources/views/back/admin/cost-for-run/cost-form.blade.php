<div class="row manual_input_fields">
    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="id_2">{{__('messages.id_2')}} <span class="tx-danger">*</span></label>
            <select name="id_2" id="id_2" class="form-control" required>
                <option value="" disabled selected>{{__('messages.choose')}} ID 2</option>
                @foreach($secondSheets as $secondSheet)
                    <option value="{{$secondSheet->id}}" {{old('id_2')&&old('id_2')==$secondSheet->id?'selected':(isset($costForRun)&&$costForRun->second_sheet_id==$secondSheet->id?'selected':'')}}>{{(isset($secondSheet->product)?$secondSheet->product->title:$secondSheet->id).' - '.$secondSheet->product_price}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="scenarios">{{__('messages.scenarios')}} <span class="tx-danger">*</span></label>
            <select name="scenarios" id="scenarios" class="form-control" required>
                <option value="" disabled selected>{{__('messages.choose_scenario')}}</option>
                <option
                    value="{{__('messages.sold_out_within_30_days')}}" {{old('scenarios')&&old('scenarios')==__('messages.sold_out_within_30_days')?'selected':(isset($costForRun)&&$costForRun->scenarios==__('messages.sold_out_within_30_days')?'selected':'')}}>
                    {{__('messages.sold_out_within_30_days')}}
                </option>
                <option
                    value="{{__('messages.sold_out_in_45_days')}}" {{old('scenarios')&&old('scenarios')==__('messages.sold_out_in_45_days')?'selected':(isset($costForRun)&&$costForRun->scenarios==__('messages.sold_out_in_45_days')?'selected':'')}}>
                    {{__('messages.sold_out_in_45_days')}}
                </option>
                <option
                    value="{{__('messages.more_than_30_days_part_of_not_sold')}}" {{old('scenarios')&&old('scenarios')==__('messages.more_than_30_days_part_of_not_sold')?'selected':(isset($costForRun)&&$costForRun->scenarios==__('messages.more_than_30_days_part_of_not_sold')?'selected':'')}}>
                    {{__('messages.more_than_30_days_part_of_not_sold')}}
                </option>
            </select>
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="how_many_days">{{__('messages.how_many_days')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('how_many_days',$costForRun->how_many_days ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="how_many_days" id="how_many_days" class="form-control e3 how_many_days" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="sample_cost">{{__('messages.sample_cost')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('sample_cost',$costForRun->sample_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="sample_cost" id="sample_cost" class="form-control f3 sample_cost" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="photo_cost">{{__('messages.photo_cost')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('photo_cost',$costForRun->photo_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="photo_cost" id="photo_cost" class="form-control g3 photo_cost" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="copywriting_cost">{{__('messages.copywriting_cost')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('copywriting_cost',$costForRun->copywriting_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="copywriting_cost" id="copywriting_cost" class="form-control h3Column copywriting_cost"
                   required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="store_rent">{{__('messages.store_rent')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('store_rent',$costForRun->store_rent ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="store_rent" id="store_rent" class="form-control i3 store_rent" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="qty_test_run">{{__('messages.purchase_qty_for_a_test_run')}} <span
                    class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('qty_test_run',$costForRun->qty_test_run ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="qty_test_run" id="qty_test_run" class="form-control j3 purchase_quantity_for_test_run"
                   required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="average_daily_advertising_cost">{{__('messages.average_daily_adv_cost')}} <span
                    class="tx-danger">*</span></label>
            <input type="number" step="any"
                   value="{{old('average_daily_advertising_cost',$costForRun->average_daily_advertising_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="average_daily_advertising_cost" id="average_daily_advertising_cost"
                   class="form-control w3 average_daily_advertising_cost" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="rating_cost">{{__('messages.rating_cost')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('rating_cost',$costForRun->rating_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="rating_cost" id="rating_cost" class="form-control o3 rating_cost" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="half_price_platform_cost">{{__('messages.half_price_platform_cost')}} <span
                    class="tx-danger">*</span></label>
            <input type="number" step="any"
                   value="{{old('half_price_platform_cost',$costForRun->half_price_platform_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="half_price_platform_cost" id="half_price_platform_cost"
                   class="form-control q3 half_price_platform_cost" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="remaining_inventory">{{__('messages.remaining_inventory')}} <span
                    class="tx-danger">*</span></label>
            <input type="number" step="any"
                   value="{{old('remaining_inventory',$costForRun->remaining_inventory ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="remaining_inventory" id="remaining_inventory" class="form-control r3 remaining_inventory"
                   required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="half_price_orders">{{__('messages.half_price_orders')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('half_price_orders',$costForRun->half_price_orders ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="half_price_orders" id="half_price_orders" class="form-control t3 half_price_orders"
                   required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="delivery_volume">{{__('messages.delivery_volume')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('delivery_volume',$costForRun->delivery_volume ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="delivery_volume" id="delivery_volume" class="form-control u3 delivery_volume" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="staff_salary">{{__('messages.staff_salary')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('staff_salary',$costForRun->staff_salary ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="staff_salary" id="staff_salary" class="form-control v3 staff_salary" required="">
        </div>
    </div>

</div>

<div class="row calculated_fields">
    <div class="col-md-12 mt-3">
        <h4>{{__('messages.air_fryer_air')}}</h4>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_for_test_run">{{__('messages.cost_for_test_run')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_for_test_run',$costForRun->cost_for_test_run ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_for_test_run" id="cost_for_test_run" class="form-control b3 cost_for_a_test_run">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cash_for_test_run">{{__('messages.cash_for_test_run')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cash_for_test_run',$costForRun->cash_for_test_run ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cash_for_test_run" id="cash_for_test_run" class="form-control c3 cash_for_a_test_run">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="no_of_measurement">{{__('messages.no_of_measurements_head')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('no_of_measurement',$costForRun->no_of_measurement ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="no_of_measurement" id="no_of_measurement"
                   class="form-control k3 number_of_measurements_of_the_head">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="delivery_cash">{{__('messages.delivery_cash')}}</label>
            <input type="number" step="any" readonly value="{{old('delivery_cash',$costForRun->delivery_cash ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="delivery_cash" id="delivery_cash" class="form-control l3 delivery_cash">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vp_head_picking_cost">{{__('messages.vp_head_picking_cost')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('vp_head_picking_cost',$costForRun->vp_head_picking_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vp_head_picking_cost" id="vp_head_picking_cost" class="form-control m3 vp_head_picking_cost">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="advertising_cost">{{__('messages.adv_cost')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('advertising_cost',$costForRun->advertising_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="advertising_cost" id="advertising_cost" class="form-control n3 advertising_cost">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_of_selling_at_half_price">{{__('messages.cost_of_selling_half_price')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_of_selling_at_half_price',$costForRun->cost_of_selling_at_half_price ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_of_selling_at_half_price" id="cost_of_selling_at_half_price"
                   class="form-control p3 cost_of_selling_at_half_price">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="real_orders">{{__('messages.real_orders')}}</label>
            <input type="number" step="any" readonly value="{{old('real_orders',$costForRun->real_orders ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="real_orders" id="real_orders" class="form-control s3 real_orders">
        </div>
    </div>

</div>
<div class="row calculated_fields">
    <div class="col-md-12 mt-3">
        <h4>{{__('messages.air_fryer_ocean')}}</h4>
    </div>
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_for_test_run_ocean">{{__('messages.cost_for_test_run')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_for_test_run_ocean',$costForRunOcean->cost_for_test_run ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_for_test_run_ocean" id="cost_for_test_run_ocean"
                   class="form-control b6 cost_for_a_test_run_ocean">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cash_for_test_run_ocean">{{__('messages.cash_for_test_run')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cash_for_test_run_ocean',$costForRunOcean->cash_for_test_run ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cash_for_test_run_ocean" id="cash_for_test_run_ocean"
                   class="form-control c6 cash_for_a_test_run_ocean">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="no_of_measurement_ocean">{{__('messages.no_of_measurements_head')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('no_of_measurement_ocean',$costForRunOcean->no_of_measurement ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="no_of_measurement_ocean" id="no_of_measurement_ocean"
                   class="form-control k6 number_of_measurements_of_the_head_ocean">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="delivery_cash_ocean">{{__('messages.delivery_cash')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('delivery_cash_ocean',$costForRunOcean->delivery_cash ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="delivery_cash_ocean" id="delivery_cash_ocean" class="form-control l6 delivery_cash_ocean">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vp_head_picking_cost_ocean">{{__('messages.vp_head_picking_cost')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('vp_head_picking_cost_ocean',$costForRunOcean->vp_head_picking_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vp_head_picking_cost_ocean" id="vp_head_picking_cost_ocean"
                   class="form-control m6 vp_head_picking_cost_ocean">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="advertising_cost_ocean">{{__('messages.adv_cost')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('advertising_cost_ocean',$costForRunOcean->advertising_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="advertising_cost_ocean" id="advertising_cost_ocean"
                   class="form-control n6 advertising_cost_ocean">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cost_of_selling_at_half_price_ocean">{{__('messages.cost_of_selling_half_price')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('cost_of_selling_at_half_price_ocean',$costForRunOcean->cost_of_selling_at_half_price ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cost_of_selling_at_half_price_ocean" id="cost_of_selling_at_half_price_ocean"
                   class="form-control p6 cost_of_selling_at_half_price_ocean">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="real_orders_ocean">{{__('messages.real_orders')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('real_orders_ocean',$costForRunOcean->real_orders ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="real_orders_ocean" id="real_orders_ocean" class="form-control s6 real_orders_ocean">
        </div>
    </div>

</div>
