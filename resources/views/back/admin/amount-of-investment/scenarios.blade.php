<option value="" disabled selected>{{__('messages.choose_scenario')}}</option>
@foreach($data as $row)
    <option value="{{$row->scenarios}}" {{old('scenarios')&&old('scenarios')==$row->scenarios?'selected':(isset($amountOfInvestment)&&$amountOfInvestment->scenarios==$row->scenarios?'selected':'')}}>{{$row->scenarios}}</option>
@endforeach
