@extends('layouts.app')

@section('mainContent')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if($message = Session::get('error'))
                <div class="alert-fail" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Error!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('error') !!}
            @if($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}
            <div class="page-contatiner">
                <div class="center-content-less-margin">
                    <h1>Confirm Details</h1>
                    <h3>Amount: {{$amount}}</h3>
                    @if ( $transmessage != null or $transmessage != "")
                        <h3>Message: {{$transmessage}}</h3>
                    @endif
                </div>

            </div>

                <div class="panel-body text-center">
                    <form action="{!!route('payment')!!}" method="POST" >
                        <!-- Note that the amount is in paise = 50 INR -->
                        <!--amount need to be in paisa-->
                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="{{ Config::get('custom.razor_key') }}"
                                data-amount="{{$amount*100}}"
                                data-buttontext="Confirm"
                                data-name="WeCare"
                                data-description="Donation Of"
                                data-image="assets/blank_profile.png"
                                data-prefill.name="{{$name}}"
                                data-prefill.email="{{$email}}"
                                data-theme.color="#008080">
                        </script>
                        <input type="submit" value="Confirm" class="waves-effect waves-light btn">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection