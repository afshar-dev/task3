@extends('layouts.app')
@section('content')

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    @if(!auth()->user()->hasVerifiedEmail())
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600" style="color: #00e572">
                {{ __('A new verification link has been sent to the email address you provided during
                registration.') }}
            </div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
                <button class="btn btn-success" type="submit"
                        id="button-addon1"> {{ __('Resend Verification Email') }}
                </button>
            </div>
        </form>
    @else
        <div class="container">
            <h2>Laravel DataTables Tutorial Example</h2>
            <table class="table table-hover table-striped table-bordered dt-responsive nowrap" id="table">
                <thead>
                <tr>
                    <th>numericCode</th>
                    <th>name</th>
                    <th>population</th>
                </tr>
                </thead>
            </table>
        </div>
        <script type="module">
            $(function () {
                $.getJSON("https://restcountries.com/v2/all", function (returndata) {
                    var table = $('#table').DataTable({
                        scrollY: 800,
                        autoFill: true,
                        "pageLength": 25,
                        data: returndata,
                        columns: [
                            {data: "numericCode"},
                            {data: "name"},
                            {data: "population"},
                        ]
                    }).api();
                    table.page('next').draw(false);
                });
            });
            @endif
        </script>
@endsection
