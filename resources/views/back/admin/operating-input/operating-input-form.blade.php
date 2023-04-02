<div class="row manual_input_fields">
    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="id_2">{{__('messages.id_2')}} <span class="tx-danger">*</span></label>
            <select name="id_2" id="id_2" class="form-control" required>
                <option value="" disabled selected>{{__('messages.choose')}} {{__('messages.id_2')}}</option>
                @foreach($secondSheets as $secondSheet)
                    <option value="{{$secondSheet->id}}" {{old('id_2')&&old('id_2')==$secondSheet->id?'selected':(isset($operatingInput)&&$operatingInput->second_sheet_id==$secondSheet->id?'selected':'')}}>{{$secondSheet->product->title.' - '. $secondSheet->product_price}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group mg-b-0">
            <label for="name">{{__('messages.product_name')}} <span class="tx-danger">*</span></label>
            <input type="text" value="{{old('name',$operatingInput->name ?? '')}}"
                   name="name" id="name" class="form-control" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="staff_salary">{{__('messages.staff_salary')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('staff_salary',$operatingInput->staff_salary ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="staff_salary" id="staff_salary" class="form-control b2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="number_of_delivery">{{__('messages.no_of_delivery')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('number_of_delivery',$operatingInput->number_of_delivery ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="number_of_delivery" id="number_of_delivery" class="form-control c2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="avg_daily_cost">{{__('messages.avg_daily_cost')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('avg_daily_cost',$operatingInput->avg_daily_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="avg_daily_cost" id="avg_daily_cost" class="form-control e2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="off_site">{{__('messages.off_site')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('off_site',$operatingInput->off_site ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="off_site" id="off_site" class="form-control g2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="platform_cost">{{__('messages.platform_cost')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('platform_cost',$operatingInput->platform_cost ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="platform_cost" id="platform_cost" class="form-control h2Column" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="small_product_head">{{__('messages.small_pro_head')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('small_product_head',$operatingInput->small_product_head ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="small_product_head" id="small_product_head" class="form-control k2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="product_quantity">{{__('messages.pro_qty')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('product_quantity',$operatingInput->product_quantity ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="product_quantity" id="product_quantity" class="form-control l2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="image_manual">{{__('messages.img_&_manual')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('image_manual',$operatingInput->image_manual ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="image_manual" id="image_manual" class="form-control n2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="overseas_costs">{{__('messages.overseas_costs')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any"
                   value="{{old('overseas_costs',$operatingInput->overseas_costs ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="overseas_costs" id="overseas_costs" class="form-control o2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="service_fee">{{__('messages.service_fee')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any"
                   value="{{old('service_fee',$operatingInput->service_fee ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="service_fee" id="service_fee" class="form-control p2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="stores">{{__('messages.stores')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('stores',$operatingInput->stores ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="stores" id="stores" class="form-control r2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vat">VAT <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('vat',$operatingInput->vat ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="vat" id="vat" class="form-control w2" required="">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="second_stores">{{__('messages.second_store')}}</label>
            <input type="number" step="any" readonly value="{{old('second_stores',$operatingInput->second_stores ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="second_stores" id="second_stores" class="form-control u2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="service_fee_2">{{__('messages.service_fee_2')}}</label>
            <input type="number" step="any" readonly value="{{old('service_fee_2',$operatingInput->service_fee_2 ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="service_fee_2" id="service_fee_2" class="form-control v2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="office_costs">{{__('messages.office_costs')}}</label>
            <input type="number" step="any" readonly value="{{old('office_costs',$operatingInput->office_costs ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)"
                   name="office_costs" id="office_costs" class="form-control x2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="tooling_costs">{{__('messages.tooling_cost')}} <span class="tx-danger">*</span></label>
            <input type="number" step="any" value="{{old('tooling_costs',$operatingInput->tooling_costs ?? '')}}"
                   onkeypress="return /[0-9.]/i.test(event.key)" min="0"
                   oninput="this.value < 0 ? this.value = 0: ''"
                   name="tooling_costs" id="tooling_costs" class="form-control y2" required="">
        </div>
    </div>

</div>

<div class="row calculated_fields">
    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="delivery_cash">{{__('messages.delivery_cash')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('delivery_cash',$operatingInput->delivery_cash ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="delivery_cash" id="delivery_cash" class="form-control d2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="cpc">CPC</label>
            <input type="number" step="any" readonly
                   value="{{old('cpc',$operatingInput->cpc ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="cpc" id="cpc" class="form-control f2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="actual_cost">{{__('messages.actual_cost')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('actual_cost',$operatingInput->actual_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="actual_cost" id="actual_cost" class="form-control i2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="off_cost">{{__('messages.off_cost')}}</label>
            <input type="number" step="any" readonly value="{{old('off_cost',$operatingInput->off_cost ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="off_cost" id="off_cost" class="form-control j2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="review_costs">{{__('messages.review_costs')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('review_costs',$operatingInput->review_costs ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="review_costs" id="review_costs" class="form-control m2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="vps">VPS</label>
            <input type="number" step="any" readonly
                   value="{{old('vps',$operatingInput->vps ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="vps" id="vps" class="form-control s2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="store_rent">{{__('messages.store_rent')}}</label>
            <input type="number" step="any" readonly
                   value="{{old('store_rent',$operatingInput->store_rent ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="store_rent" id="store_rent" class="form-control t2">
        </div>
    </div>

    <div class="col-md-3 mt-3">
        <div class="form-group mg-b-0">
            <label for="total">{{__('messages.total')}}</label>
            <input type="number" step="any" readonly value="{{old('total',$operatingInput->total ?? '')}}"
                   onkeypress="return /[]/i.test(event.key)"
                   name="total" id="total" class="form-control z2">
        </div>
    </div>

</div>
