@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
      <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="text-xl font-bold text-gray-800">{{ __('Register') }}</div>
  
          <form method="POST" action="{{ route('register') }}">
            @csrf
  
            <div class="mb-4">
              <div class="grid grid-flow-row sm:grid-flow-col gap-3">
                <div class="sm:col-span-4 justify-center">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="name">{{ __('Name') }}</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  
                  @error('name')
                    <span class="text-red-500 text-xs italic" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="sm:col-span-4 justify-center">
                  <label class="block text-gray-700 text-sm font-bold mb-2" for="email">{{ __('Email Address') }}</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
  
                  @error('email')
                    <span class="text-red-500 text-xs italic" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>
  
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">{{ __('Password') }}</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" id="password" type="password" name="password" required autocomplete="new-password">
  
              @error('password')
                <span class="text-red-500 text-xs italic" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
  
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>
  
            <div class="flex items-center justify-between">
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Register') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
  