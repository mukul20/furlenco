@extends('layouts.email')
@section('content')
<div id="container">
    @include('components.email.header')
    <div class="pad-standard">
        WELCOME TO FURLENCO<br/>
        Hey Sauban Ahmad,<br/>
        It is time to live free.
        <br/>
        <img class="float-end" src="{{config('app.asset_url')}}/images/banner.png" width="90%" />
        <div class="clear"></div>
        <div class="text-center">
            Introducing true freedom<br/>
            to the world of furniture
        </div>
    </div>
    <div class="text-center" style="margin:0 2rem 2rem 2rem;padding:2rem;background:#e6f5f8;border-radius:1.5rem;">
        <p>You know what's best for you. At Furlenco, we give you the freedom to bring furniture to your home on your terms. With world-class designs & unparalleled quality, we give you the power to create a home that’s always trendy and always yours.</p>
    </div>
    <div class="row">
        <div class="col-7 text-center">
            The Freedom to<br/>
            <span class="fl-color">CHOOSE</span>
            <p style="padding:2rem 4rem;background:#ffeffa;border-radius:0 1.5rem 1.5rem 0;">
                Choose how you want your furniture - rent short term, buy brand new or buy refurbished.
            </p>
        </div>
        <div class="col-5" style="margin-left:-1.5rem;">
            <img class="float-end" src="{{config('app.asset_url')}}/images/chair.png" />
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-5" style="margin-right:-2rem;margin-left:2rem;">
            <img class="float-end" src="{{config('app.asset_url')}}/images/chair.png" />
        </div>
        <div class="col-7 text-center">
            The Freedom to<br/>
            <span class="fl-color">CHOOSE</span>
            <p style="padding:2rem 4rem;background:#ffeffa;border-radius:1.5rem 0 0 1.5rem;">
                Choose how you want your furniture - rent short term, buy brand new or buy refurbished.
            </p>
        </div>
    </div>
    <center>
        <span style="background:#fffced;border-radius:1rem;padding:0.5rem 1rem;margin:2rem 0;display:inline-block;">
            Here's our <b><u><a href="#">listing</a></u></b> on our latest products and collections.
        </span>
    </center>
    <div class="fl-bg pad-standard text-center">
        0% compromise.<br/>
        100% excellence.<br/>
        @for ($x = 0; $x < 3; $x++)
        <div class="col-8" style="margin:0 auto">
            <center>
                <img style="margin-top:2rem;" src="{{config('app.asset_url')}}/images/smiley.png" width="120" />
            </center>
            <p>World-class designer furniture</p>
            <p>Our inhouse designers create the best of aesthetics, form & functionality to create truely gorgeous furniture.</p>
        </div>
        @endfor
    </div>
    <div class="pad-standard">
        <p>Something on your mind? Check out our <u><b><a href="#">FAQ section</a></b></u> for queries and details.</p>
        <p>We hope you have fun with Furlenco!</p>
    </div>
    @include('components.email.footer')
</div>
@endsection
