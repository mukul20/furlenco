@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-red pad-2-5" style="border-radius:1.4rem;">
            <div class="row" style="width:100%;">
                <div class="col-7">
                    <p class="fl-red bold ft-24 m-0">PRODUCTS CANCELLED</p>
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
            <p class="m-0">Your order has been successfully cancelled.</p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-red ft-24 bold">Your products details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:90%;">
                    Product Details
                </th>
                <th style="padding:0 0 0 1.5rem;">
                    Qty
                </th>
            </tr>
            <tr>
                <td colspan="2">Crest 1BHK</td>
                <td class="text-center" style="padding: 0 0 0 1.5rem;">x1</td>
            </tr>

            @for ($i = 0; $i < 3; $i++)
            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/sofa-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-l0">Vive Lilac Three Seater Couch</td>
                <td class="pad-1-5 text-center" style="padding-right:0;">x{{$i + 1}}</td>
            </tr>
            @endfor
            <tr><td colspan="5" style="border-top:1px solid #bcbcbc;"></td></tr>

            <tr>
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/chair-icon.png" />
                    </div>
                </td>
                <td class="pad-1-5 pad-l0">LED TV</td>
                <td class="pad-1-5 text-center" style="padding-right:0;">x1</td>
            </tr>
        </table>
        <hr/>
        <br/>
        Your payment for the canceled items will be refunded back to the source account within 5-7 working days.
        <br/><br/>
        <a href="#" class="bold">You can always check the Furlenco app to view your order details.</a>
        <br/><br/>
        Need something else? Here’s a <a href="#" class="bold">listing of our new products and collections.</a>
        <br/><br/>
        For any queries or issues, do take a look at our <a href="#" class="bold">FAQ section.</a>
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    @include('components.email.footer')
</div>
@endsection
