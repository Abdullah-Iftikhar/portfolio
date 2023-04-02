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
</head>
<body>

<div class="signin-wrapper">
    @include('auth.lang-dropdown')

    <div class="signin-box">
        <h2 class="slim-logo"><a href="#">Study Amazon</a></h2>
        {{--        <h2 class="signin-title-primary">Welcome back!</h2>--}}
        {{--        <h3 class="signin-title-secondary">Sign in to continue.</h3>--}}
        <div class="row">
            <div class="col-md-12">
                <p>
                    {{ __('messages.secure_area_msg') }}
                </p>
            </div>
        </div>


        @if ($errors->any())
            <div class="text-danger mb-2">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
        @endif
        <form action="{{route('password.update')}}" method="post">
        @csrf
        <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group">
                <input type="email" name="email" value="{{old('email', $request->email)}}" class="form-control" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="{{ __('messages.your_password') }}" required>
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" placeholder="{{ __('messages.your_confirm_pass') }}" required>
            </div>


            <button type="submit" class="btn btn-primary btn-block btn-signin">{{ __('messages.reset_pass') }}</button>
        </form>
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

