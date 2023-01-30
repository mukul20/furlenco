@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 2rem 2rem;">
        <div class="fl-bg-blue pad-2-5" style="border-radius:1.4rem;">
            <div class="row" style="width:100%;">
                <div class="col-7">
                    <p class="fl-blue bold ft-24 m-0">SALE INVOICE</p>
                </div>
                <div class="col-5 fl-blue" style="text-align:right;">
                    <b class="float-end ft-16">
                        Order no: 203
                        <br/>
                        Order date: XX/XX/XX
                    </b>
                </div>
            </div>
            <p class="ft-26 mb-15">Hi Sauban Ahmad,</p>
            <p class="m-0">
                We have attached your Furlenco sale invoice.
                <br/><br/>
                Missing out on something or need something else?<br/>
                <a href="#" class="bold">Here’s a listing of our new products and collections.</a>
                <br/><br/>
                Have more doubts? Take a look at our <a href="#" class="bold">FAQ section</a> which covers (almost) everything on your mind.
                <br/><br/>
                Lots of love and furniture,
                <br/><br/>
                Team Furlenco
            </p>
        </div>
        <center><img src="{{$assetPath}}/images/chair3.png" width="75%" style="margin-top:3rem;" /></center>
        <p style="padding: 1rem;">
            Live in style, now & forever with <a class="fl-yellow bold" href="#">Assured-Buyback!</a>
            <br/><br/>
            Remember, if you ever feel bored or stuck, just sell your Furlenco furniture back to us. Earn credits that you can use to get something new, as per your evolving needs and tastes. <a class="fl-yellow bold" href="#">Click here</a> to know more.
        </p>
    </div>
    @include('components.email.footer')
</div>
@endsection
