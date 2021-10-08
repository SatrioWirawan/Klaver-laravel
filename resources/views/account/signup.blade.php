@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{asset('')}}assets/css/login.css">
@endsection

@section('content')
<div class="auth-content">
    <div class="card">
        <div class="row align-items-center text-center">
            <div class="col-md-12">

                <div class="card-body">

                    <h4 class="mb-3 f-w-400 mb-4"> Sign In</h4>					
                    <form class="" action="/">
                        <div class="form-floating mb-3">
                          <input type="username" class="form-control rounded-4" id="floatingInput" placeholder="Username">
                          <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                          </div>
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                          <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign Up</button>

                        <p class="mb-0 text-muted">Have an account? <a href="/login" class="f-w-400">Login</a></p>
                    </form>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush