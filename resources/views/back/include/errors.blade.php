@if($errors->any())
    <div class="row" id="error_section">
        <div class="col-md-12">
            <div class="alert alert-danger mb-3" id="alert-error-message" role="alert">
                @foreach($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </div>
        </div>
    </div>
@endif
