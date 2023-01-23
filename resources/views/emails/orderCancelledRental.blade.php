@extends('layouts.email')
@section('content')
<style type="text/css">
    table .img-wrapper {
        background: #fff;
        width: 100px;
        height: 100px;
        text-align: center;
        display: flex;
        justify-content: center;
        border-radius: 1rem;
        -webkit-box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.1);
        box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.1);
    }
    table .img-wrapper img {
        margin: auto;
        display: block;
    }
</style>
<div id="container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-red" style="border-radius:1.4rem;padding:2.5rem;">
            <div class="row">
                <div class="col-7">
                    <p class="fl-red bold ft-24 m-0">ORDER CANCELLED</p>
                </div>
                <div class="col-5 fl-red" style="text-align:right;">
                    <small class="float-end bold">
                        Order no: 203
                        <br/>
                        Order date: XX/XX/XX
                    </small>
                </div>
            </div>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">Your order has been successfully cancelled.</p>
        </div>
    </div>
    <div style="padding:2.5rem">
        <p class="m-0 fl-red ft-24 bold">Your order details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr style="font-size:16px;">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:50%;">
                    Product Details
                </th>
                <th class="pad-1">
                    Qty
                </th>
                <th class="pad-1">
                    Tenure
                </th>
                <th class="pad-1" style="padding-right:0;width:115px;">
                    Monthly rental
                </th>
            </tr>
            <tr>
                <td colspan="2">Crest 1BHK</td>
                <td style="text-align:center;padding:0 1.5rem">x1</td>
                <td style="text-align:center;">6 mo</td>
                <td style="text-align:right;padding:0 1.5rem">₹X,XXX/-</td>
            </tr>

            @for ($i = 0; $i < 4; $i++)
            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/sofa-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-r0">Vive Lilac Three Seater Couch</td>
                <td class="pad-1-5 xs-shrink" style="text-align:center;">x1</td>
                <td class="pad-1-5 xs-shrink text-center"></td>
                <td class="pad-1-5 text-center">-</td>
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
                <td class="pad-1-5 xs-shrink" style="text-align:center;">x1</td>
                <td class="pad-1-5 xs-shrink text-center"></td>
                <td class="pad-1-5 text-center">-</td>
            </tr>

            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr style="font-size:16px;">
                <th colspan="2" style="text-align:left;padding:1rem 1rem 1rem 0;">
                    Value added services
                </th>
                <th style="padding:1rem;">
                    Qty
                </th>
                <th></th>
                <th class="text-center">
                    Amount
                </th>
            </tr>
            <tr>
                <td colspan="2">Furlenco Care</td>
                <td style="text-align:center;padding-top:0 1.5rem">x1</td>
                <td></td>
                <td class="text-center">₹X,XXX/-</td>
            </tr>
            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>
            <td colspan="5" class="bold ft-24 fl-red">Your payment details:</td>
            <tr>
                <td colspan="4">Payment plan tenure</td>
                <td class="text-center">6 months</td>
            </tr>
            <tr>
                <td colspan="4">Payment plan discount</td>
                <td class="text-center">25%</td>
            </tr>
            <tr>
                <td colspan="4">Total cost of value added services</td>
                <td class="text-center">₹X,XXX/-</td>
            </tr>
            <tr>
                <td colspan="4">Total amount due</td>
                <td class="text-center">₹X,XXX/-</td>
            </tr>
            <tr>
                <td colspan="4">Amount paid</td>
                <td class="text-center">₹X,XXX/-</td>
            </tr>
        </table>
        <hr/>
        <br/>
        Your payment will be refunded back to the source account within 5-7 working days.
        <br/><br/>
        <a class="bold" href="#">You can always check the Furlenco app to view your order details.</a>
        <br/><br/>
        Need something else? Here’s a <a class="bold" href="#">listing of our new products and collections.</a>
        <br/><br/>
        For any queries or issues, do take a look at our <a class="bold" href="#">FAQ section.</a>
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    @include('components.email.footer')
</div>
@endsection
