@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center my-5" >
            <div class="col-md-4 p-3 rounded shadow-lg" style="background-color
            : rgba(2, 150, 248, 0.301)">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center text-white">Please Login</h1>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus autocomplete="off" value="{{ old('username') }}" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-3 text-white">
                        Not registered? <a href="/register">Register Now!</a>
                    </small>
                </main>
            </div>
        </div>
    </div>
@endsection
