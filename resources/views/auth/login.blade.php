@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-secondary">
        <div class="container py-5">
            <div class="d-flex justify-content-center m-5 p-5">
                <form class="form-control" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                    <div>
                        <label for="email">{{__('Email')}}</label>
                        <input id="email" class="form-control" type="email" name="email"
                               value="{{old('email')}}" required autofocus/>
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password">{{__('Password')}}</label>
                        <input id="password" class="form-control"
                               type="password"
                               name="password"
                               required autocomplete="current-password"/>
                    </div>
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me">{{ __('Remember me') }}</label>
                        <input id="remember_me" type="checkbox"
                               class=""
                               name="remember">
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
                    </div>
                    <a href="{{route('register')}}">Sign Up</a>
                </form>
            </div>
        </div>
    </div>
@endsection
