@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-red pad-2-5" style="border-radius:1.4rem;">
            <p class="fl-red bold ft-24 m-0">ORDER CONFIRMATION</p>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">
                Thank you for your purchase new owner!<br/>
                You have successfully purchased the following products and your rental subscription for them is thereby terminated.
            </p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-red ft-24 bold">Your order details:</p>
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
        Somethings to keep in mind regrading your purchase:
        <ul class="fl-points" style="padding-left:15px;margin-bottom:2.5rem;">
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    The items you’ve purchased above cannot be returned.
                </span>
            </li>
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    Products purchase through the rent-to-own option don’t come with a manufacturer’s warranty.
                </span>
            </li>
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    Any and all rental benefits attached to these products are now null and void since you own them.
                </span>
            </li>
        </ul>
        Have a doubt? <a href="#" class="bold">Check our FAQ section.</a>
        <br/><br/>
        Missing out on something or need something else?<br/>
        <a href="#" class="bold">Here’s a listing of our new products and collections.</a>
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    @include('components.email.footer')
</div>
@endsection
