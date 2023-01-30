@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-red pad-2-5" style="border-radius:1.4rem;">
            <p class="fl-red bold ft-24 m-0">RENEWAL SUCCESSFUL</p>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">Congratulations!<br/>You have successfully renewed your subscription.</p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-red ft-24 bold">Your order details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:50%;">
                    Product Details
                </th>
                <th class="pad-1 xs-nopad">
                    Qty
                </th>
                <th class="pad-1">
                    Tenure
                </th>
                <th class="pad-1" style="padding-right:0;">
                    Monthly rental
                </th>
            </tr>
            <tr>
                <td colspan="2">Crest 1BHK</td>
                <td class="xs-nopad" style="text-align:center;padding:0 1.5rem">x1</td>
                <td class="text-center">6 mo</td>
                <td class="pad-1 text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>

            @for ($i = 0; $i < 4; $i++)
            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/sofa-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-r0">Vive Lilac Three Seater Couch</td>
                <td class="pad-1 xs-nopad text-center">x1</td>
                <td class="pad-1 text-center"></td>
                <td class="pad-1-5 text-center" style="padding-right:0;">-</td>
            </tr>
            @endfor

            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/chair-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-r0">LED TV</td>
                <td class="pad-1 xs-nopad text-center">x1</td>
                <td class="pad-1 text-center">9 mo</td>
                <td class="pad-1-5 text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>

            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr class="ft-16">
                <th colspan="2" style="text-align:left;padding:1rem 1rem 1rem 0;">
                    Value added services
                </th>
                <th style="padding:1rem;">
                    Qty
                </th>
                <th></th>
                <th class="text-center" style="padding-right:0;">
                    Amount
                </th>
            </tr>
            <tr>
                <td colspan="2">Furlenco Care</td>
                <td style="text-align:center;padding-top:0 1.5rem">x1</td>
                <td></td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>
            <td colspan="5" class="bold ft-24 fl-red">Your payment details:</td>
            <tr>
                <td colspan="4">Total monthly rental</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
            <tr>
                <td colspan="4">Payment plan tenure</td>
                <td class="text-center" style="padding-right:0;">6 months</td>
            </tr>
            <tr>
                <td colspan="4">Payment plan discount</td>
                <td class="text-center" style="padding-right:0;">25%</td>
            </tr>
            <tr>
                <td colspan="4">Total cost of value added services</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
            <tr>
                <td colspan="4">Total amount due</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
            <tr>
                <td colspan="4">Amount paid</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
        </table>
        <hr/>
        <br/>
        Your plan is pre-paid and will be up for renewal on <b/>xx/xx/xx.</b><br/>So, until then, just sit back and chill!
        <br/><br/>
        Missing out on something or need something else?<br/>
        Here’s a <a href="#" class="bold">listing of our new products and collections.</a>
        <br/><br/>
        For any queries or issues, do take a look at our <a href="#" class="bold">FAQ section</a>, or <a href="#" class="bold">click here</a> to manage your subscription.
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
