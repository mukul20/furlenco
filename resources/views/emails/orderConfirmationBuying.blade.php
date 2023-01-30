@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-blue pad-2-5" style="border-radius:1.4rem;">
            <div class="row" style="width:100%;">
                <div class="col-7">
                    <p class="fl-blue bold ft-24 m-0">ORDER CONFIRMATION</p>
                </div>
                <div class="col-5 fl-blue" style="text-align:right;">
                    <b class="float-end ft-16">
                        Order no: 203
                        <br/>
                        Order date: XX/XX/XX
                    </b>
                </div>
            </div>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">Congratulations on choosing Furlenco.<br/>Your order will be delivered and installed on <b>xx/xx/xx.</b></p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-blue ft-24 bold">Your order details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;min-width:50%;">
                    Product Details
                </th>
                <th class="pad-1 xs-nopad">
                    Qty
                </th>
                <th class="pad-1" style="padding-right:0;">
                    Amount
                </th>
            </tr>
            <tr>
                <td colspan="2">Crest 1BHK</td>
                <td class="xs-nopad" style="text-align:center;padding:0 1.5rem">x1</td>
                <td class="text-center" style="padding: 0 0 0 1.5rem;">₹X,XXX/-</td>
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
                <td class="pad-1-5 text-center" style="padding-right:0;">-</td>
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
                <td class="pad-1-5 text-center" style="padding-right:0;">-</td>
            </tr>

            <tr><td colspan="4" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr class="ft-16">
                <th colspan="2" style="text-align:left;padding:1rem 1rem 1rem 0;">
                    Value added services
                </th>
                <th style="padding:1rem;">
                    Qty
                </th>
                <th class="text-center" style="padding-right:0;">
                    Amount
                </th>
            </tr>
            <tr>
                <td colspan="2">Furlenco Care</td>
                <td style="text-align:center;padding-top:0 1.5rem">x1</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
            <tr><td colspan="4" style="border-top:1px solid #bcbcbc;"></td></tr>
            <td colspan="4" class="bold ft-24 fl-blue">Your payment details:</td>
            <tr>
                <td colspan="3">Total order value</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
            <tr>
                <td colspan="3">Offer discount</td>
                <td class="text-center" style="padding-right:0;">25%</td>
            </tr>
            <tr>
                <td colspan="3">Total due</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
            <tr>
                <td colspan="3">Amount paid</td>
                <td class="text-center" style="padding-right:0;">₹X,XXX/-</td>
            </tr>
        </table>
        <hr/>
        <br/>
        All Furlenco products are covered under our <b>manufacturer’s warranty</b>, so you can enjoy them stress free! <a href="#" class="bold">Click here</a> to know what is covered.
        <br/><br/>
        For questions about warranty, terms & conditions, purchase or anything else on your mind, please take a look at our <a href="#" class="bold">FAQ section</a> which covers (almost) everything. 
        <br/><br/>
        Missing out on something or need something else?<br/><a href="#" class="bold">Here’s a listing of our new products and collections.</a>
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    <div class="fl-bg text-center" style="padding:3rem 3.5rem;">
        <img src="{{$assetPath}}/images/sofa.png" />
        <p class="fl-yellow ft-40" style="margin:0.5rem 0 1rem 0;">Furlenco<br/>FREEDOM CIRCLE</p>
        <p>
            As a Furlenco customer, you’re also a part of the <b>Furlenco Freedom Circle</b> which gives you the freedom to sell-back your Furlenco furniture with the <b>Assured-Buyback</b> option in exchange for credits that you can use to buy something brand new from our latest collections. So never feel stuck to your furniture and always live in style! Download the Furlenco app to know more.
        </p>
    </div>
    @include('components.email.footer')
</div>
@endsection
