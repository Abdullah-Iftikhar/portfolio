<option value="" disabled selected>{{__('messages.choose_price')}}</option>
@foreach($productPrices as $row)
    <option value="{{$row->id}}">{{$row->product->title.' - '.$row->selling_price}}</option>
@endforeach
