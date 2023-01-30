@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 2rem 2rem">
        <div class="fl-bg-white pad-2-5" style="border-radius:1.4rem;">
            <p class="ft-26">Hi Sauban Ahmad,</p>
            <p class="m-0">
                The OTP for your email verification with Furlenco is <b>XXXXXX.</b>
                <br/><br/>
                Use this code to verify your email address entered by you while registering with us.
                <br/><br/>
                Kindly ignore if this wasn’t you.
                <br/><br/>
                Lots of love and furniture,
                <br/><br/>
                Team Furlenco
            </p>
        </div>
    </div>
    @include('components.email.footer')
</div>
@endsection
