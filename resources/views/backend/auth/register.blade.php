@extends('backend::layouts.auth')
@section('title')
    Register
@endsection
@section('content')
<form class="form-signin" method="POST" id="user_store" action="{{ route('user.store') }}">
    {!! csrf_field() !!}
    <div class="form-signin-heading text-center">
        <h1 class="sign-title">Registration</h1>
        <img src="{{ asset('assets/backend/images/login-logo.png') }}" alt=""/>
    </div>

    <div class="login-wrap">
        @if(session()->has('success'))
        <p>{!! session()->get('success') !!}</p>
        @endif
        <p>Enter your personal details below</p>
        <input type="text" @if($errors->has('full_name')) autofocus="" @endif value="{{ old('full_name') }}" name="full_name" placeholder="Full Name" class="form-control">
        <input type="text" @if($errors->has('address')) autofocus="" @endif value="{{ old('address') }}" name="address" placeholder="Address" class="form-control">
        <input type="text" @if($errors->has('email')) autofocus="" @endif value="{{ old('email') }}" name="email" placeholder="Email" class="form-control">
        <input type="text" @if($errors->has('city')) autofocus="" @endif value="{{ old('city') }}" name="city" placeholder="City/Town" class="form-control">
        <div class="radios">
            <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
                <input type="radio" @if(!old('gender')) checked @endif value="0" id="radio-01" name="gender"> Male
            </label>
            <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                <input type="radio" @if(old('gender')) checked @endif value="1" id="radio-02" name="gender"> Female
            </label>
        </div>

        <p> Enter your account details below</p>
        <input type="text" name="user_name" @if($errors->has('user_name')) autofocus="" @endif value="{{ old('user_name') }}" placeholder="User Name" class="form-control">
        <input type="password" name="password" placeholder="Password" class="form-control">
        <input type="password" name="password_confirmation" placeholder="Re-type Password" class="form-control">
        <label class="checkbox">
            <input type="checkbox" id="policy" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
        </label>
        @foreach($errors->all() as $message)
            <label class="error">{!! $message !!}</label>
        @endforeach
        <button type="submit" class="btn btn-lg btn-login btn-block">
            <i class="fa fa-check"></i>
        </button>

        <div class="registration">
            Already Registered.
            <a href="{{ route('backend.login') }}" class="">
                Login
            </a>
        </div>

    </div>

</form>
@endsection
@section('scripts')
<!--<script type="text/javascript">
$(document).on('submit', '#user_store', function () {
    var url = $(this).attr('action');
    var formData = $(this).serialize();
    $.ajax({
       url: url,
       type:"POST",
       dataType: "json",
       data: formData,
       success: function (data) {
           
       },
       error: function (data) {
           var error = data.responseJSON;
//           t.find('.errors').html("");
           $.each(error, function(key, val) {
               console.log(val);
//               t.find('.error-' + key).html(val);
           });

       }
    });
    return false;
});
</script>-->
<script type="text/javascript">
$(document).on('submit', '#user_store', function () {
    if($('#policy').is(':checked')) {
        return true;
    } else{
        alert('Please check "I agree to the Terms of Service and Privacy Policy"');
        return false;
    }
});
</script>
@endsection