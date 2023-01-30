@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 3rem 2rem">
        <div class="fl-bg-blue pad-2-5" style="border-radius:1.4rem;">
            <p class="fl-color bold ft-24 m-0">WE HAVE RECIEVED<br/>YOUR REQUEST</p>
            <p class="ft-26 mb-10">Hi Sauban Ahmad,</p>
            <p class="m-0">We have noted your concern regarding the following products and are looking into the same.</p>
        </div>
    </div>
    <div class="pad-2-5" style="padding-top:0;">
        <table style="width:100%;border-spacing:0 1.8rem;">
            <tr class="ft-16">
                <th class="pad-1" colspan="2" style="text-align:left;padding-left:0;width:90%;">
                    Product Details
                </th>
                <th style="padding:0 0 0 1.5rem;">
                    Qty
                </th>
            </tr>

            @for ($i = 0; $i < 1; $i++)
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
        We will get back to you with a plan within 7 days. Meanwhile, please keep an eye out on your registered email address for updates.
        <br/><br/>
        We hope your furniture gets back to being fabulous very soon.
        <br/><br/>
        Lots of love and furniture,
        <br/><br/>
        Team Furlenco.
    </div>
    @include('components.email.footer')
</div>
@endsection
