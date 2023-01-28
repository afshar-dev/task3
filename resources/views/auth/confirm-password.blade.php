@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-secondary">
        <div class="container py-5">
            <div class="d-flex justify-content-center m-5 p-5">
                <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')"/>

                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>

                    <div class="flex justify-end mt-4">
                        <x-primary-button>
                            {{ __('Confirm') }}
                        </x-primary-button>
                    </div>
                </form>
                </x-guest-layout>
            </div>
        </div>
    </div>
@endsection
