@extends('layouts.static')

@section('header')
    <link rel="stylesheet" href="../../css/home.css">
    <title>Account ⏐ Rizumu</title>
@endsection

@section('content')

<div class="body container bg-light text-dark border border-primary rounded p-4">
    <div class="row">

        <div class="content">
            <div class="content-header py-4">
                <h3 class="fw-bold">Log in to your account</h3>
            </div>

            <div class="content-body text-dark">
                
                <form action="{{ route('login') }}" method="POST" class="row justify-content-center">
                    @csrf

                    <div class="align-self-center col-sm-10 col-md-6 p-2">
                        <input type="email" name="Email" required placeholder="Email" class="form-control" autofocus>
                    </div>
                        <div class="w-100"></div>

                    <div class="align-self-center col-sm-10 col-md-6 p-2">
                        <input type="password" name="Password" required placeholder="Password" class="form-control">
                    </div>
                        <div class="w-100"></div>
                    
                    <div class="signUp align-self-center col-sm-10 col-md-6 py-4">
                        <button type='submit' class="button col-12 btn btn-lg btn-primary">Log in</button>
                    </div>
                </form>

                <p>New to Rizumu? <a href="/register" class="link-success fw-bold text-decoration-none">Sign up</a></p>
            </div>
        </div>
    </div>
</div>

@endsection