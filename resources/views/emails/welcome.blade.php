@extends('layouts.email')
@section('content')
<style type="text/css">
    .fl-yellow {
        color: rgba(255, 221, 75);
    }
</style>
<div id="container">
    @include('components.email.header')
    <div style="padding:3.5rem 4rem 2rem 4rem">
        <span class="fl-color bold ft-24">WELCOME TO FURLENCO</span>
        <p class="ft-26 mb-10">Hey Sauban Ahmad,</p>
        It is time to live free.
        <br/><br/>
        <img class="float-end" src="{{$assetPath}}/images/banner.png" width="90%" />
        <div class="clear"></div>
        <br/>
        <div class="text-center">
            <span class="fl-color ft-40 in-bl" style="margin-bottom:5px;">Introducing true freedom</span><br/>
            <span class="ft-24">to the world of furniture</span>
        </div>
    </div>
    <div class="text-center" style="margin:0 2rem 2rem 2rem;padding:2rem;background:#e6f5f8;border-radius:1.5rem;">
        <p class="m-0">You know what's best for you. At Furlenco, we give you the freedom to bring furniture to your home on your terms. With world-class designs & unparalleled quality, we give you the power to create a home that’s always trendy and always yours.</p>
    </div>
    <div class="row">
        <div class="col-7 text-center">
            <p class="ft-24 mb-0">The Freedom to</p>
            <span class="fl-color ft-56">CHOOSE</span>
            <p class="mt-5" style="padding:2rem 4rem;background:#ffeffa;border-radius:0 1.5rem 1.5rem 0;">
                Choose how you want your furniture - rent short term, buy brand new or buy refurbished.
            </p>
        </div>
        <div class="col-5" style="margin-left:-1.5rem;">
            <img class="ignore-width" src="{{$assetPath}}/images/chair1.png" style="margin-top:5rem;width:calc(100% + 1.5rem);" />
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-5" style="margin-right:-2rem;margin-left:2rem;z-index:1;">
            <img class="float-end" src="{{$assetPath}}/images/chair2.png" style="margin-top:7rem;" />
        </div>
        <div class="col-7 text-center">
            <p class="ft-24 m-0">The Freedom to</p>
            <span class="fl-color ft-56">CHANGE</span>
            <p class="mt-5" style="padding:2rem 4rem;background:#ffeffa;border-radius:1.5rem 0 0 1.5rem;">
                Change as your needs change. Own the furniture you once rented, or sell back your old products for credits you can use to buy something new.
            </p>
        </div>
    </div>
    <center>
        <span style="background:#fffced;border-radius:1rem;padding:0.5rem 1.2rem;margin:2rem 0;display:inline-block;">
            Here's our <u><a class="bold" href="#">listing</a></u> on our latest products and collections.
        </span>
    </center>
    <br/>
    <div class="fl-bg pad-standard text-center">
        <span class="ft-40 fl-yellow">
            0% compromise.<br/>
            100% excellence.
        </span>
        <br/>
        @for ($x = 0; $x < 3; $x++)
        <div class="col-9" style="margin:0 auto">
            <center>
                <img style="margin-top:2rem;" src="{{$assetPath}}/images/smiley.png" width="120" />
            </center>
            <p class="ft-24 bold">World-class designer furniture</p>
            <p>Our inhouse designers create the best of aesthetics, form & functionality to create truely gorgeous furniture.</p>
        </div>
        @endfor
    </div>
    <div class="pad-standard">
        <p>Something on your mind? Check out our <u><a class="bold" href="#">FAQ section</a></u> for queries and details.</p>
        <p>We hope you have fun with Furlenco!</p>
    </div>
    @include('components.email.footer')
</div>
@endsection
