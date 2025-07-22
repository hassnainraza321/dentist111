@extends('index')
@section('title', 'Internal Server Error')

@section('content')
<section class="pt-50 pb-50 mb-5 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="error-content text-center">
                    <div class="notfound-404">
                        <h1>500</h1>
                    </div>
                    <h3>Internal Server Error</h3>
                    <p>We apologize, but an unexpected error has occurred on the server. Please try again later. If the problem persists, contact our support team for assistance. Thank you for your understanding.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection