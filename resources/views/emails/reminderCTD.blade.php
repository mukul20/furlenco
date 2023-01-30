@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-red pad-2-5" style="border-radius:1.4rem;">
            <p class="ft-26 mb-10 mt-0">Hi Sauban Ahmad,</p>
            <p class="m-0">Some of your Furlenco products are up for renewal. Renew before CTD-15 days to continue enjoying the comfort of Furlenco furniture.</p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-red ft-24 bold">Your product details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:50%;">
                    Product Details
                </th>
                <th class="pad-1 xs-nopad">
                    Qty
                </th>
                <th style="padding-left:1.5rem">
                    Tenure
                </th>
            </tr>
            <tr>
                <td colspan="2">Crest 1BHK</td>
                <td class="xs-nopad" style="text-align:center;padding:0 1.5rem">x1</td>
                <td class="text-center" style="padding: 0 0 0 1.5rem;">6 mo</td>
            </tr>

            @for ($i = 0; $i < 3; $i++)
            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/sofa-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-r0">Vive Lilac Three Seater Couch</td>
                <td class="pad-1-5 xs-nopad text-center">x1</td>
                <td class="pad-1-5 text-center" style="padding-right:0;"></td>
            </tr>
            @endfor
            <tr><td colspan="4" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/chair-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-r0">LED TV</td>
                <td class="pad-1-5 xs-nopad text-center">x1</td>
                <td class="pad-1-5 text-center" style="padding-right:0;">9 mo</td>
            </tr>
        </table>
        <hr/>
        <br/>
        <a class="bold" href="#">Click here</a> to head to the app and renew your rental plan.
        <br/><br/>
        For any queries or doubts, please check our <a class="bold" href="#">FAQ section</a> or <a class="bold" href="#">chat with</a> us.
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    <div class="fl-bg pad-1-5">
        <center><img src="{{$assetPath}}/images/chair3.png" width="75%" style="margin-top:3rem;" /></center>
        <p style="padding: 1rem;">
            By the way, love your rented furniture? Own it at amazing discounts just for you with <b class="fl-yellow">Rent-To-Own!</b>
            <br/><br/>
            Now your favourites never have to leave your home. <a class="fl-yellow bold" href="#">Click here</a> to know more.
        </p>
    </div>
    @include('components.email.footer')
</div>
@endsection
