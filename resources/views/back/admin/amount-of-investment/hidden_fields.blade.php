<input type="hidden" class="cor_b3_air" value="{{isset($costForRun) ? $costForRun->where('type','air')->first()->cost_for_test_run : ''}}">
<input type="hidden" class="cor_b3_ocean" value="{{isset($costForRun) ? $costForRun->where('type','ocean')->first()->cost_for_test_run : ''}}">
<input type="hidden" class="id1_c5" value="{{$costForRun[0]->secondSheet->price->purchase_price ?? ''}}">
<input type="hidden" class="id1_c6" value="{{$costForRun[0]->secondSheet->price->air_freight ?? ''}}">
<input type="hidden" class="id1_c7" value="{{$costForRun[0]->secondSheet->price->sea_freight ?? ''}}">
<input type="hidden" class="id2_c21" value="{{$costForRun[0]->secondSheet->air_time ?? ''}}">
<input type="hidden" class="id2_c20" value="{{$costForRun[0]->secondSheet->sea_time ?? ''}}">
