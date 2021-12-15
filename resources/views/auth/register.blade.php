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
                <h3 class="fw-bold">Create a Rizumu account</h3>
            </div>

            <div class="content-body">

                <form action="{{ route('register') }}" method="POST" class="row justify-content-center">
                    @csrf


                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{Session::get('success')}}
                        </div>
                    @elseif(Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{Session::get('failed')}}
                        </div>
                    @endif
                    
                    <div class="align-self-center col-sm-10 col-md-6 p-2">
                        <input type="text" name="username" required placeholder="Username" value="{{old('username')}}" class="form-control" required autocomplete="username">
                    </div>
                        <div class="w-100"></div>

                    <div class="align-self-center col-sm-10 col-md-6 p-2">
                        <input type="email" name="email" required placeholder="Email" value="{{old('email')}}" class="form-control" required autocomplete="email">
                    </div>
                        <div class="w-100"></div>

                    <div class="align-self-center col-sm-10 col-md-6 p-2">
                        <input type="password" name="password" required placeholder="Password" value="{{old('password')}}" class="form-control" required autocomplete="new-password">
                    </div>
                        <div class="w-100"></div>

                    <div class="align-self-center col-sm-10 col-md-6 p-2">
                        <input type="password" name="password" required placeholder="Repeat password" value="{{old('confirm_password')}}" class="form-control" required autocomplete="new-password">
                    </div>
                        <div class="w-100"></div>
                    
                    <div class="signUp align-self-center col-sm-10 col-md-6 py-4">
                        <!-- <a href="#" class="button col-12 btn btn-lg btn-primary" role="button" type="submit" aria-disabled="true">Create account</a> -->
                        <button type='submit' class="button col-12 btn btn-lg btn-primary">Create account</button>
                    </div>

                </form>

                <p class="text-dark">Have an account? <a href="/login" class="link-success fw-bold text-decoration-none">Log in</a></p>
            </div>
        </div>
    </div>
</div>



@endsection