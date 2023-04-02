@extends('panel.layout.main')

@section('title')
    Profile
@endsection

@section('page_title')
    Profile
@endsection

@section('body')

    {{--Start Content--}}
    <div class="section-wrapper">
        <div class="mg-b-30">
            <h3>Account Setting</h3>
            <form method="post" action="{{route('profile.update.settings')}}" data-parsley-validate enctype="multipart/form-data">
                @csrf
                <div class="form-layout form-layout-4">
                    <div class="row mg-t-20">
                        <label class="col-lg-4 form-control-label">Email: </label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" readonly
                                   value="{{auth()->user()->email}}">
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-lg-4 form-control-label">Name: </label>
                        <div class="col-lg-4">
                            <input type="text" required name="name" class="form-control "
                                   value="{{auth()->user()->name}}">
                            @if($errors->has('name'))
                                <div class="error"
                                     style="color:red">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-lg-4 form-control-label">Phone Number: </label>
                        <div class="col-lg-4">
                            <input type="text" required name="phone_no" class="form-control "
                                   value="{{auth()->user()->phone_no}}">
                            @if($errors->has('phone_no'))
                                <div class="error"
                                     style="color:red">{{$errors->first('phone_no')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mg-t-20">
                        <div class="col-lg-4">&nbsp;</div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <div class="mg-b-2">
            <h3>Password Setting</h3>
            <form method="post" data-parsley-validate action="{{route('password.update.settings')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-layout form-layout-4">
                    <div class="row mg-t-20">
                        <label class="col-lg-4 form-control-label">New Password: </label>
                        <div class="col-lg-4">
                            <input type="password" required class="form-control" placeholder="******" name="password">
                            @if($errors->has('password'))
                                <div class="error"
                                     style="color:red">{{$errors->first('password')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-lg-4 form-control-label">Confirm Password</label>
                        <div class="col-lg-4">
                            <input type="password" required name="password_confirmation" placeholder="******" class="form-control">
                            @if($errors->has('password_confirmation'))
                                <div class="error"
                                     style="color:red">{{$errors->first('password_confirmation')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mg-t-20">
                        <div class="col-lg-4">&nbsp;</div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{--End Content--}}
@endsection

@push('script-section')
@endpush
