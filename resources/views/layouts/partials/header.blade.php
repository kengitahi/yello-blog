<header class="container flex items-center justify-between mx-auto py-3 px-5 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
        <x-application-mark />
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>

                <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    {{ __('Blog') }}
                </x-nav-link>

                {{--<x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    {{ __('About Us') }}
                </x-nav-link>

                <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Contact us') }}
                </x-nav-link>
                <x-nav-link href="{{ route('terms') }}" :active="request()->routeIs('terms')">
                    {{ __('Terms') }}
                </x-nav-link>
                --}}

            </div>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        @auth
        @include('layouts.partials.header-right-auth')
        @else
        @include('layouts.partials.header-right-guest')
        @endauth


    </div>
</header>