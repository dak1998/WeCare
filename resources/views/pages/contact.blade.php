@extends('layouts.app')

@section('mainContent')
    <div class="page-contatiner">
        <div class="center-content-less-margin">
            <div class="row">
                <div class="col l6 s12">
                    <h4> Our ChatBot is all set to serve you!</h4>
                    <iframe
                            class="card"
                            allow="microphone;"
                            width="350"
                            height="430"
                            src="https://console.dialogflow.com/api-client/demo/embedded/0d32da09-acb9-4c87-bce3-dac1c5c179c1">
                    </iframe>
                </div>
                <div class="col l6 s12">
                    <h4> Not Helpful? We have Human Agents too! </h4>
                    <div class="center-content">
                        <h6><a href="mailto:support@wecare.com"><i class="material-icons">contact_mail</i> Mail at: support@wecare.com</a>  </h6>
                        <h6><a href="tel:+913335554488"><i class="material-icons">contact_phone</i> Call on: +91 333 555 4488</a>  </h6>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

