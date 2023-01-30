@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-white pad-2-5" style="border-radius:1.4rem;">
            <div class="row" style="width:100%;">
                <div class="col-7">
                    <p class="fl-color bold ft-24 m-0">ACTIVITY COMPLETED</p>
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
            <p class="m-0">Great news!<br/>Your activity has been successfully completed.</p>
        </div>
    </div>
    <div class="pad-2-5">
        <p class="m-0 fl-color ft-24 bold">Activity details:</p>
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:50%;">
                    Product Details
                </th>
                <th class="pad-1 xs-nopad">
                    Qty
                </th>
                <th class="pad-1" style="padding-right:0;">
                    Activity
                </th>
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
                <td class="pad-1-5 text-center" style="padding-right:0;">DELIVERY</td>
            </tr>
            @endfor
        </table>
        <hr/>
        <br/>
        We hope you have as much fun on your Furlenco furniture as we had in making it! 
        <br/><br/>
        Need something else?<br/>
        <a href="#" class="bold">Here’s a listing of our new products and collections.</a>
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
