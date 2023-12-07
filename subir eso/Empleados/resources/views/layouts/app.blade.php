<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.nam', 'ElectroKatiuski') }}</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <div id="app">
        <nav class="bg-cyan-700">
          <div class="container mx-auto px-1 flex items-center justify-between">
            <a class=" text-4xl font-bold text-white" href="{{ url('/') }}">
              {{ config('app.nam', 'ElectroKatiuski') }}
            </a>
            <button class="md:hidden" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <svg class="w-6 h-6 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>

            <div class="hidden md:block" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="space-x-4">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="space-x-4">
                <!-- Authentication Links -->
                @guest
                  @if (Route::has('login'))
                    <li>
                      <a class="text-white hover:text-gray-300" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                  @endif

                  @if (Route::has('register'))
                    <li>
                      <a class="text-white hover:text-gray-300" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                  @endif
                @else
                  <li class="relative">
                    <a class="text-white hover:text-gray-300 flex items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}

                    </a>

                    <div class="right-0 mt-2 bg-cyan-800 shadow-lg rounded w-48" aria-labelledby="navbarDropdown">
                      <a class="block px-4 py-2  text-white hover:text-gray-300" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                      </form>
                    </div>
                  </li>
                @endguest
              </ul>
            </div>
          </div>
        </nav>

        <main class="py-4">
          @yield('content')
        </main>
      </div>

</body>
</html>
