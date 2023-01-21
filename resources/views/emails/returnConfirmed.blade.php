@extends('layouts.email')
@section('content')
<div id="container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 2rem 2rem">
        <div class="fl-bg-red" style="border-radius:1.5rem;padding:2.5rem;">
            <p class="fl-red bold ft-24 m-0">RETURN CONFIRMED</p>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">
                Your UNLMTD by Furlenco BASIC plan has been terminated upon your request. Your pick-up is scheduled for <b>xx/xx/xx.</b>
            </p>
        </div>
    </div>
    <p style="padding: 1rem 3rem;">
        In case your order was eligible for a refund, we will process the same as soon as your pick-up is completed.
        <br/><br/>
        Changed your mind? <a class="bold" href="#">Click here</a> to renew now and activate your subscription. 
        <br/><br/>
        Lots of love and furniture, 
        <br/><br/>
        Team Furlenco
    </p>
    @include('components.email.footer')
</div>
@endsection
