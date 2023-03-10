@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-red pad-2-5" style="border-radius:1.4rem;">
            <div class="row" style="width:100%;">
                <div class="col-7">
                    <p class="fl-red bold ft-24 m-0">ORDER CONFIRMATION</p>
                </div>
                <div class="col-5 fl-red" style="text-align:right;">
                    <b class="float-end ft-16">
                        Order no: 203
                        <br/>
                        Order date: XX/XX/XX
                    </b>
                </div>
            </div>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">Congratulations on choosing Furlenco. Your order is expected to be delivered and installed by <b>xx/xx/xx.</b></p>
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
                <td class="pad-1-5 xs-nopad text-center">x1</td>
                <td class="pad-1-5 text-center"></td>
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
                <td class="pad-1-5 xs-nopad text-center">x1</td>
                <td class="pad-1-5 text-center"></td>
                <td class="pad-1-5 text-center" style="padding-right:0;">-</td>
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
        We require our first-time rental customers to complete their KYC registration with us.
        <a href="#">Click here</a> to download the app & get started.
        <br/><br/>
        Missing out on something or need something else?
        Here’s a <a href="#">listing of our new products and collections.</a>
        <br/><br/>
        Have more doubts? Take a look at our <a href="#">FAQ section</a> which covers (almost) everything on your mind. 
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    <div class="fl-bg text-center" style="padding:3rem 3.5rem;">
        <img src="{{$assetPath}}/images/sofa.png" />
        <p class="fl-yellow ft-40" style="margin:0.5rem 0 1rem 0;">Furlenco<br/>FREEDOM CIRCLE</p>
        <p>
            As a Furlenco customer, you’re also a part of the
            <b>Furlenco Freedom Circle</b> which gives you the freedom to own your rented furniture with <b>Rent-to-Own</b> option,
            along with a  host of benefits like swap & more.
            Download the Furlenco app to know more.
        </p>
    </div>
    @include('components.email.footer')
</div>
@endsection
