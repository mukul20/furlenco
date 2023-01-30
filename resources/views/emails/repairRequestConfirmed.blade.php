@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-blue pad-2-5" style="border-radius:1.4rem;">
            <div class="row" style="width:100%;">
                <div class="col-7">
                    <p class="fl-color bold ft-24 m-0">REPAIR REQUEST CONFIRMED</p>
                </div>
                <div class="col-5 fl-color" style="text-align:right;">
                    <b class="float-end ft-16">
                        Order no: 203
                        <br/>
                        Order date: XX/XX/XX
                    </b>
                </div>
            </div>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">Your repair request has been confirmed.<br/>It is expected to be fulfilled by <b>xx/xx/xx.</b></p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-color ft-24 bold">Repair request details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:90%;">
                    Product Details
                </th>
                <th style="padding:0 0 0 1.5rem;">
                    Qty
                </th>
            </tr>

            @for ($i = 0; $i < 2; $i++)
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
        </table>
        <hr/>
        <br/>
        You will receive an email a day before your activity is scheduled. 
        <br/><br/>
        <a href="#" class="bold">Click here</a> to check the app for more information about your request.
        <br/><br/>
        Some helpful <b>Dos</b> and <b>Don'ts</b> for the repair process:
        <ul class="fl-points" style="padding-left:15px;margin-bottom:2.5rem;">
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    We request you to sit back and relax! Our skilled crew members will take care of the issue for you.
                </span>
            </li>
            <li style="color:#059baa;margin-bottom:10px;padding-left:5px;">
                <span style="color:rgb(34, 34, 34);">
                    There will be a time when robots will take over, but until then, our (human) Furlenco Champs will have to do all the work. Please be courteous to them!
                </span>
            </li>
        </ul>
        For any queries or issues, do take a look at our <a href="#" class="bold">FAQ section.</a>
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    @include('components.email.footer')
</div>
@endsection
