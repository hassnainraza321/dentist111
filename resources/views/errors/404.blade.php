@extends('index')
@section('title', 'Page Not Found')

@section('content')
<section class="pt-50 pb-50 mb-5 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="error-content text-center">
                    <div class="notfound-404">
                        <h1>404</h1>
                    </div>
                    <h3>This page does not appear to exist.</h3>
                    <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection