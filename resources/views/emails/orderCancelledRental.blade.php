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
                <th colspan="2" style="text-align:left;padding:1rem 1rem 1rem 0;width:50%;">
                    Product details
                </th>
                <th style="padding:1rem;">
                    Qty
                </th>
                <th style="padding:1rem;">
                    Tenure
                </th>
                <th style="min-width:120px;padding:1rem 0 1rem 1rem;">
                    Monthly rental
                </th>
            </tr>
            <tr style="font-size:17px;">
                <td colspan="2">Crest 1BHK</td>
                <td style="text-align:center;padding:0 1.5rem">x1</td>
                <td style="text-align:center;">6 mo</td>
                <td style="text-align:center;padding:0 1.5rem">₹X,XXX/-</td>
            </tr>

            @for ($i = 0; $i < 4; $i++)
            <tr style="font-size:17px;">
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/sofa-icon.png" />
                    </div>
                </td>
                <td style="padding:1.5rem;">Vive Lilac Three Seater Couch</td>
                <td style="text-align:center;padding:1.5rem">x1</td>
                <td style="text-align:center;"></td>
                <td style="text-align:center;padding:1.5rem">-</td>
            </tr>
            @endfor

            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr style="font-size:17px;">
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/chair-icon.png" />
                    </div>
                </td>
                <td style="padding:1.5rem;">LED TV</td>
                <td style="text-align:center;padding:1.5rem">x1</td>
                <td style="text-align:center;">9 mo</td>
                <td style="text-align:center;padding:1.5rem">₹X,XXX/-</td>
            </tr>

            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr style="font-size:16px;">
                <th colspan="2" style="text-align:left;padding:1rem 1rem 1rem 0;">
                    Product details
                </th>
                <th style="padding:1rem;">
                    Qty
                </th>
                <th></th>
                <th style="min-width:120px;padding:1rem 0 1rem 1rem;">
                    Amount
                </th>
            </tr>
            <tr style="font-size:17px;">
                <td colspan="2">Crest 1BHK</td>
                <td style="text-align:center;padding:0 1.5rem">x1</td>
                <td></td>
                <td style="text-align:center;padding:0 1.5rem">₹X,XXX/-</td>
            </tr>
        </table>
        <hr/>
        <p class="fl-red ft-24 bold" style="margin-bottom:2rem;">Your payment details:</p>
        <p style="margin-bottom:2rem;">
            Total monthly rental
            <span class="float-end">₹X,XXX/-</span>
        </p>
        <p style="margin-bottom:2rem;">
            Payment plan tenure
            <span class="float-end">6 months</span>
        </p>
        <p style="margin-bottom:2rem;">
            Payment plan discount
            <span class="float-end">25%</span>
        </p>
        <p style="margin-bottom:2rem;">
            Total cost of value added services
            <span class="float-end">₹X,XXX/-</span>
        </p>
        <p style="margin-bottom:2rem;">
            Total amount due
            <span class="float-end">₹X,XXX/-</span>
        </p>
        <p style="margin-bottom:2rem;">
            Amount paid
            <span class="float-end">₹X,XXX/-</span>
        </p>
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
