@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-red pad-2-5" style="border-radius:1.4rem;">
            <p class="fl-red bold ft-24 m-0">SUBSCRIPTION ACTIVATED</p>
            <p class="ft-26 mb-10">Hey Sauban Ahmad,</p>
            <p class="m-0">Great news! Your UNLMTD subscription has been activated, starting from <b>xx/xx/xx.</b></p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-red ft-24 bold">Your plan details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:50%;">
                    Product details
                </th>
                <th class="pad-1 xs-nopad">
                    Qty
                </th>
                <th style="padding-left:1.5rem">
                    Tenure
                </th>
            </tr>
            <tr>
                <td colspan="2">BASIC PLAN</td>
                <td class="xs-nopad" style="text-align:center;padding:0 1.5rem">x1</td>
                <td class="text-center" style="padding: 0 0 0 1.5rem;">6 mo</td>
            </tr>

            @for ($i = 0; $i < 6; $i++)
            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/sofa-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-r0">Vive Lilac Three Seater Couch</td>
                <td class="pad-1-5 xs-nopad text-center">x1</td>
                <td class="pad-1-5 text-center" style="padding-right:0;">-</td>
            </tr>
            @endfor
        </table>
        <hr/>
        <br/>
        Missing out on something or need something else?<br/>
        <a class="bold" href="#">Here’s a listing of our new products and collections.</a>
        <br/><br/>
        For any queries or issues, do take a look at our <a class="bold" href="#">FAQ section</a>, or <a class="bold" href="#">click here</a> to manage your subscription.
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
