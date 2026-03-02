@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex min-h-screen justify-center items-center">
        <form action={{ route('authenticate') }} method="post" class="space-y-2">
            @csrf
            <h1 class="font-semibold text-2xl text-center">SIGN IN</h1>
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                    {{ session('success') }}
                </div>
            @endif
            @error('email')
                <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                    {{ $message }}
                </div>
            @enderror
            <label for="email">Email</label><br/>
            <input type="email" name="email" id="email" class="border border-gray-300 rounded p-1 text-sm w-full" value="{{ old('email') }}"><br/>
            <label for="password">Password</label><br/>
            <input type="password" name="password" id="password" class="border border-gray-300 rounded p-1 text-sm w-full"><br/>
            <button class="bg-orange-400 w-full p-2 rounded text-slate-50 mt-2">Sign In</button>
            <p>Don't have an account? <a href={{ route('register') }} class="font-semibold">Sign Up here</a></p>
        </form>
    </div>
@endsection