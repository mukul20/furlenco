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
    .fl-points li::marker {
        font-size: 1.5rem;
    }
</style>
<div id="container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div style="background:#fff;color:rgb(34, 34, 34);;border-radius:1.4rem;padding:2.5rem;">
            <p class="fl-color bold ft-24 m-0">ACTIVITY SCHEDULED</p>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">Your Furlenco activity has been scheduled for tomorrow, <b>xx/xx/xx.</b></p>
        </div>
    </div>
    <div style="padding:2.5rem;">
        <p class="m-0 fl-color ft-24 bold">Activity details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr style="font-size:16px;">
                <th colspan="2" style="text-align:left;padding:1rem 1rem 0 0;">
                    Product Details
                </th>
                <th style="padding:1rem 1rem 0 1rem;">
                    Qty
                </th>
                <th style="padding:1rem 1rem 0 1rem;">
                    Activity
                </th>
            </tr>

            @for ($i = 0; $i < 3; $i++)
            <tr style="font-size:17px;">
                <td>
                    <div class="img-wrapper">
                        <img src="{{$assetPath}}/images/sofa-icon.png" />
                    </div>
                </td>
                <td style="padding:1.5rem;">Vive Lilac Three Seater Couch</td>
                <td style="text-align:center;padding:0 1.5rem">x1</td>
                <td style="text-align:center;padding:1.5rem">DELIVERY</td>
            </tr>
            @endfor
        </table>
        <hr/>
        <br/>
        Some helpful dos and don'ts for a smooth experience:
        <ul class="fl-points" style="padding-left:15px;margin-bottom:2.5rem;">
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    DO make sure you’re available. Want to reschedule your activity? <a class="bold" href="#">Click here</a> to head to the app and pick a date that suits you.
                </span>
            </li>
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    Please DON’T do repairs yourself. Our Furlenco Champs are well-equipped to take care of any issues.
                </span>
            </li>
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    There will be a time when robots will take over, but until then, our (human) Furlenco Champs will have to do all the work. Please be courteous to them! :)
                </span>
            </li>
        </ul>
        Want to track your activity? <a class="bold" href="#">Click here.</a>
        <br/><br/>
        For any other queries, take a look at our <a class="bold" href="#">FAQ section.</a>
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    @include('components.email.footer')
</div>
@endsection
