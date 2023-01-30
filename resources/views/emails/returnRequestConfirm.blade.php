@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-white pad-2-5" style="border-radius:1.4rem;">
            <p class="fl-color bold ft-24 m-0">RETURN CONFIRMED</p>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">Your return request has been confirmed.<br/>Your pick-up is scheduled on xx/xx/xx.</p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-color ft-24 bold">Return details:</p>
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
        In case your order was eligible for a refund, we will process the same as soon as your pick-up is completed. 
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    @include('components.email.footer')
</div>
@endsection
