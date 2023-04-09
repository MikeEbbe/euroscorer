@extends('layouts.layout')

@section('content')
<section>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img id="app-logo"  class="h-40" src="{{ asset('storage/app-logo-white.png') }}" alt="logo">
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Account aanmaken
                </h1>
                <form class="space-y-4 md:space-y-6" method="post" action="{{ route('register.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div>
                        <label for="username"
                            class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Gebruikersnaam</label>
                        <input type="text" name="username" id="username" value="{{ old('username') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Gebruikersnaam" required="required" autofocus>
                        @if ($errors->has('username'))
                        <span class="text-red-500 text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Wachtwoord</label>
                        <input type="password" name="password" id="password" value="{{ old('password') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="••••••••" required="required">
                        @if ($errors->has('password'))
                        <span class="text-red-500 text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Wachtwoord</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="••••••••" required="required">
                        @if ($errors->has('password_confirmation'))
                        <span class="text-red-500 text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Registreren</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Al een account? <a href="/login"
                            class="font-semibold text-primary-600 hover:underline dark:text-primary-500">Log je in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection