@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="{{ route('register') }}" method="post" class="mt-5">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" class="form-control @error('name') border-danger @enderror" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control @error('username') border-danger @enderror" value="{{ old('username') }}">
                        @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" placeholder="Your email" class="form-control @error('email') border-danger @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Choose a password" class="form-control @error('password') border-danger @enderror" value="">
                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="sr-only">Password again</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="form-control @error('password_confirmation') border-danger @enderror" value="">
                        @error('password_confirmation')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection