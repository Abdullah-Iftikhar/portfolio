<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Study Amazon</title>

    <!-- vendor css -->
    <link href="{{asset('back-assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('back-assets/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('back-assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('back-assets/lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('back-assets/css/slim.css')}}">

    <style>
        .notify-popup {
            position: absolute;
            right: 0;
            padding: 10px 30px 10px 10px;
            border-radius: 7px;
            top:35px;
        }
        .we-chat {
            display: grid;
            place-items: center;
        }
    </style>
</head>
<body>

<div class="signin-wrapper">
    @include('auth.lang-dropdown')
    <div class="signin-box">
        <h2 class="slim-logo"><a href="#">Study Amazon</a></h2>
        {{--        <h2 class="signin-title-primary">Welcome back!</h2>--}}
        {{--        <h3 class="signin-title-secondary">Sign in to continue.</h3>--}}
        @if ($errors->any())
            <div class="text-danger mb-2">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
        @endif
        <form action="{{route('register')}}" method="post">
            @csrf

            <div class="form-group">
                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="{{ __('messages.your_full_name') }}" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="{{ __('messages.your_email') }}" required>
            </div>

            <div class="form-group">
                <input type="text" name="phone_number" value="{{old('phone_number')}}" class="form-control" placeholder="{{ __('messages.your_phone_no') }}" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="{{ __('messages.your_password') }}" required>
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" placeholder="{{ __('messages.your_confirm_pass') }}" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-signin">{{ __('messages.sign_up') }}</button>


            <div class="block mt-2 mb-2 text-center">
                ----- <strong>{{ __('messages.or') }}</strong> -----
            </div>

            <div class="block mt-2 mb-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 we-chat"
                   href="#">
                    <img src="{{asset('back-assets/weChat-login.png')}}" alt="" style="max-width: 35% !important;">
                </a>
            </div>
        </form>

        <div class="row">

            <div class="col-md-12 col-sm-12 text-right">
                <a href="{{route('login')}}">{{ __('messages.already_register') }}?</a>
            </div>
        </div>
    </div><!-- signin-box -->

</div><!-- signin-wrapper -->

<script src="{{asset('back-assets/lib/jquery/js/jquery.js')}}"></script>
<script src="{{asset('back-assets/lib/popper.js/js/popper.js')}}"></script>
<script src="{{asset('back-assets/lib/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('back-assets/js/slim.js')}}"></script>
<script>
    var url = "{{ route('change.language') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
</body>
</html>








