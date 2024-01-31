@extends('layouts.app')

@section('title')
    Pariwisata | Home
    
@endsection


@section('content')
   <!-- Wrapper Start -->
   <div class="wrapper">
    <!-- Login Section Start -->
    <div class="login--section pd--100-0 bg--overlay" data-bg-img="{{ asset('') }}portal/img/login-img/bg.jpg">
        <div class="container">
            <!-- Login Form Start -->
            <div class="login--form">
                <div class="title">
                    <h1 class="h1">Daftar</h1>
                    <p>Daftar into account by fillup the below form</p>
                </div>

                <form method="POST" action="{{ route('user.store') }}" id="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>
                            <span>Username or Email Address</span>
                            <input type="email" class="form-control" name="username" required>
                        </label>
                    </div>

                    <div class="form-group">
                        <label>
                            <span>Password</span>
                            <input type="password"  class="form-control" name="password" required>
                        </label>
                    </div>
                    <input type="hidden" class="form-control" name="role" required>

                   

                    <button type="submit" class="btn btn-lg btn-block btn-primary">Daftar </button>

                 
                </form>
            </div>
            <!-- Login Form End -->
        </div>
    </div>
    <!-- Login Section End -->
</div>
<!-- Wrapper End -->
@endsection


@push('after-script')


@endpush


