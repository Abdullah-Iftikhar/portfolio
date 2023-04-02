@extends('panel.layout.main')

@push('style-section')
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
@endpush

@section('title')
    Permissions
@endsection

@section('page_title')
    Permissions
@endsection

@section('body')

    {{--Start Content--}}
    <div class="section-wrapper">
        <div class="mg-b-30">
            <h3>User Permissions</h3>
            <form method="post" action="{{route('user.permission.setting')}}" data-parsley-validate
                  enctype="multipart/form-data">
                @csrf
                <div class="form-layout form-layout-4">
                    <div class="row mg-t-20">
                        <label class="col-lg-4 form-control-label">Users</label>
                        <div class="col-lg-4">
                            <select name="user" required id="" class="form-control">
                                @foreach($users as $user)
                                    <option selected disabled>Choose One</option>
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mg-t-20">
                        <label class="col-lg-4 form-control-label">Permission For: </label>
                        <div class="col-lg-4">
                            <select name="permission[]" required class="form-control select2" data-placeholder="Choose Permission" multiple>
                                @foreach($permissions as $permission)
                                    <option value="{{$permission}}">{{$permission}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('phone_no'))
                                <div class="error"
                                     style="color:red">{{$errors->first('phone_no')}}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mg-t-20">
                        <div class="col-lg-4">&nbsp;</div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{--End Content--}}
@endsection

@push('script-section')
    .select2-container {
    width: 100% !important;
    }
    <script>
        'use strict';

        $('.select2').select2({
            minimumResultsForSearch: Infinity
        });
    </script>
@endpush
