@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="flex min-h-screen justify-center items-center">
        <form action="{{ route('user.store') }}" method="post" class="space-y-2">
            @csrf
            <h1 class="font-semibold text-2xl text-center">SIGN UP</h1>

            <label for="name">Name</label><br/>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="border border-gray-300 rounded p-1 text-sm w-full"><br/>
            @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span><br/>
            @enderror

            <label for="email">Email</label><br/>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="border border-gray-300 rounded p-1 text-sm w-full"><br/>
            @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span><br/>
            @enderror

            <label for="password">Password</label><br/>
            <input type="password" name="password" id="password" minlength="6"
                class="border border-gray-300 rounded p-1 text-sm w-full"><br/>
            @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span><br/>
            @enderror

            <label for="password_confirmation">Confirm Password</label><br/>
            <input type="password" name="password_confirmation" id="password_confirmation" minlength="6"
                class="border border-gray-300 rounded p-1 text-sm w-full"><br/>

            <button type="submit" class="bg-orange-400 w-full p-2 rounded text-slate-50 mt-2">Sign Up</button>
            <p>Already have an account? <a href={{ route('login') }} class="font-semibold">Sign In here</a></p>
        </form>
    </div>
@endsection