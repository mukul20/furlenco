@extends('layouts.email')
@section('content')
<div class="fl-container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 2rem 2rem">
        <div class="fl-bg-white pad-2-5" style="border-radius:1.4rem;">
            <div class="row" style="width:100%;">
                <div class="col-7">
                    <p class="fl-color bold ft-24 m-0">PAYMENT UNSUCCESSFUL</p>
                </div>
                <div class="col-5 fl-color">
                    <small class="float-end">Date: XX/XX/XX</small>
                </div>
            </div>
            <p class="ft-26">Hi Sauban Ahmad,</p>
            <p class="m-0">
                Oops! Your payment of <b>₹XXXX</b> didn’t go through.
                <br/><br/>
                If payment has been deducted from your account,
                don’t worry: it’ll be refunded back to the source
                account within 5-7 working days.
                <br/><br/>
                Meanwhile, you can retry payment after 30 minutes
                by <a class="bold" href="#">clicking here.</a>
                <br/><br/>
                For any queries or issues, do take a look at our
                <a class="bold" href="#">FAQ section.</a>
                <br/><br/>
                Lots of love and furniture,
                <br/><br/>
                Team Furlenco
            </p>
        </div>
    </div>
    @include('components.email.footer')
</div>
@endsection
