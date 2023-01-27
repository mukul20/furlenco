@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 2rem 2rem;">
        <div class="fl-bg-red pad-2-5" style="border-radius:1.4rem;">
            <p class="fl-red bold ft-24 m-0">SUBSCRIPTION INVOICE</p>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">
                We have attached your Furlenco subscription invoice
                from <b>xx/xx/xx - xx/xx/xx.</b>
                <br/><br/>
                <a class="bold" href="#">Click here</a> to pay your outstanding dues, so we don’t bother
                you again ;)
                <br/><br/>
                For any queries or issues, do take a look at our <a class="bold" href="#">FAQ section</a>, or <a class="bold" href="#">click here</a> to manage your subscription.
                <br/><br/>
                Lots of love and furniture,
                <br/><br/>
                Team Furlenco
            </p>
        </div>
        <center><img src="{{$assetPath}}/images/chair3.png" width="75%" style="margin-top:3rem;" /></center>
        <p style="padding: 1rem;">
            By the way, love your rented furniture? Own it at amazing discounts just for you with <b class="fl-yellow">Rent-To-Own!</b>
            <br/><br/>
            Now your favourites never have to leave your home.
            <a class="fl-yellow bold" href="#">Click here</a> to know more.
        </p>
    </div>
    @include('components.email.footer')
</div>
@endsection
