@extends('layouts.email')
@section('content')
<div id="container">
    @include('components.email.header')
    <div class="fl-bg" style="padding:0 2rem 2rem 2rem">
        <div style="background:#fff;border-radius:1.4rem;padding:2.5rem;color:rgb(34, 34, 34);">
            <div class="row">
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
